<?php
// add_new_images.php(_scriptsフォルダ内から実行)
// 新しい画像を検出し、原寸を_originalsに退避、公開用に縮小版を生成、gallery.jsonへ追記

$originalDir = __DIR__ . '/../_originals/gallery/';
$publicDir = __DIR__ . '/../public/images/gallery/';
$jsonFile = __DIR__ . '/../data/gallery.json';
$maxWidth = 1400; // 公開用画像の最大幅(お好みで調整)
$jpegQuality = 85; // 圧縮品質(0-100)

// フォルダがなければ作成
if (!is_dir($originalDir)) {
    mkdir($originalDir, 0755, true);
}

function findImagesRecursive($dir, $baseDir) {
    $results = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $fullPath = $dir . '/' . $item;
        if (is_dir($fullPath)) {
            $results = array_merge($results, findImagesRecursive($fullPath, $baseDir));
        } elseif (preg_match('/\.(jpg|jpeg|png|webp)$/i', $item)) {
            $relativePath = str_replace($baseDir, '', $fullPath);
            $relativePath = str_replace('\\', '/', $relativePath);
            $results[] = $relativePath;
        }
    }
    return $results;
}

// 画像を指定幅にリサイズして保存する関数
function resizeImage($sourcePath, $destPath, $maxWidth, $quality) {
    $info = getimagesize($sourcePath);
    $mime = $info['mime'];

    switch ($mime) {
        case 'image/jpeg':
            $srcImage = imagecreatefromjpeg($sourcePath);
            break;
        case 'image/png':
            $srcImage = imagecreatefrompng($sourcePath);
            break;
        case 'image/webp':
            $srcImage = imagecreatefromwebp($sourcePath);
            break;
        default:
            return false;
    }

    $srcWidth = imagesx($srcImage);
    $srcHeight = imagesy($srcImage);

    // 幅が既にmaxWidth以下ならリサイズ不要(そのままコピー)
    if ($srcWidth <= $maxWidth) {
        copy($sourcePath, $destPath);
        imagedestroy($srcImage);
        return true;
    }

    $newWidth = $maxWidth;
    $newHeight = intval($srcHeight * ($maxWidth / $srcWidth));

    $destImage = imagecreatetruecolor($newWidth, $newHeight);

    // PNG/WebPの透過を保持
    if ($mime === 'image/png' || $mime === 'image/webp') {
        imagealphablending($destImage, false);
        imagesavealpha($destImage, true);
    }

    imagecopyresampled($destImage, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $srcWidth, $srcHeight);

    switch ($mime) {
        case 'image/jpeg':
            imagejpeg($destImage, $destPath, $quality);
            break;
        case 'image/png':
            imagepng($destImage, $destPath, 8);
            break;
        case 'image/webp':
            imagewebp($destImage, $destPath, $quality);
            break;
    }

    imagedestroy($srcImage);
    imagedestroy($destImage);
    return true;
}

// 既存gallery.json読み込み
$gallery = json_decode(file_get_contents($jsonFile), true) ?: [];
$registeredImages = [];
foreach ($gallery as $item) {
    foreach ($item['image'] as $img) {
        $registeredImages[] = $img;
    }
}

// public内の全画像から、新規のものだけ抽出
$allImages = findImagesRecursive(rtrim($publicDir, '/'), $publicDir);
$newImages = array_values(array_diff($allImages, $registeredImages));

if (empty($newImages)) {
    echo "新しい画像は見つかりませんでした。\n";
    exit;
}

usort($newImages, function ($a, $b) use ($publicDir) {
    return filemtime($publicDir . $a) <=> filemtime($publicDir . $b);
});

$addedEntries = [];
foreach ($newImages as $relativePath) {
    $publicPath = $publicDir . $relativePath;
    $originalPath = $originalDir . $relativePath;

    // サブフォルダがあれば_originals側にも作成
    $originalSubDir = dirname($originalPath);
    if (!is_dir($originalSubDir)) {
        mkdir($originalSubDir, 0755, true);
    }

    // 1. 原寸を_originalsに退避(コピー)
    copy($publicPath, $originalPath);

    // 2. public側の画像を、リサイズ版で上書き
    resizeImage($originalPath, $publicPath, $maxWidth, $jpegQuality);

    $filename = basename($relativePath);
    $nameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
    $modifiedTime = filemtime($originalPath);

    $gallery[] = [
        'image' => [$relativePath],
        'name' => $nameWithoutExt,
        'date' => date('Y.m.d', $modifiedTime),
        'category' => ['original']
    ];

    $addedEntries[] = $relativePath;
}

file_put_contents($jsonFile, json_encode($gallery, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "--- 追加された画像(リサイズ済み) ---\n";
foreach ($addedEntries as $log) {
    echo $log . "\n";
}
echo "\n合計 " . count($addedEntries) . " 件を追加しました(最大幅{$maxWidth}pxに縮小)。\n";