<?php
// resize_existing_images.php(_scriptsフォルダ内から実行)
// public/images/gallery/内の全画像を対象に、原寸を_originalsへ退避し、公開用を縮小する

$originalDir = __DIR__ . '/../_originals/gallery/';
$publicDir = __DIR__ . '/../public/images/gallery/';
$maxWidth = 1400; // 公開用画像の最大幅(add_new_images.phpと合わせておく)
$jpegQuality = 85;

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

    if ($srcWidth <= $maxWidth) {
        imagedestroy($srcImage);
        return 'skipped'; // 既に小さいのでリサイズ不要
    }

    $newWidth = $maxWidth;
    $newHeight = intval($srcHeight * ($maxWidth / $srcWidth));

    $destImage = imagecreatetruecolor($newWidth, $newHeight);

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
    return 'resized';
}

$allImages = findImagesRecursive(rtrim($publicDir, '/'), $publicDir);

if (empty($allImages)) {
    echo "画像が見つかりませんでした。\n";
    exit;
}

$resizedCount = 0;
$skippedCount = 0;

foreach ($allImages as $relativePath) {
    $publicPath = $publicDir . $relativePath;
    $originalPath = $originalDir . $relativePath;

    // サブフォルダがあれば_originals側にも作成
    $originalSubDir = dirname($originalPath);
    if (!is_dir($originalSubDir)) {
        mkdir($originalSubDir, 0755, true);
    }

    // 既に_originalsに退避済みならスキップ(二重処理防止)
    if (file_exists($originalPath)) {
        echo "スキップ(処理済み): {$relativePath}\n";
        continue;
    }

    // 1. 原寸を_originalsに退避
    copy($publicPath, $originalPath);

    // 2. public側を縮小版で上書き
    $result = resizeImage($originalPath, $publicPath, $maxWidth, $jpegQuality);

    if ($result === 'resized') {
        echo "リサイズ完了: {$relativePath}\n";
        $resizedCount++;
    } elseif ($result === 'skipped') {
        echo "サイズ済み(変更なし): {$relativePath}\n";
        $skippedCount++;
    }
}

echo "\n--- 完了 ---\n";
echo "リサイズした画像: {$resizedCount} 件\n";
echo "既に小さかった画像: {$skippedCount} 件\n";