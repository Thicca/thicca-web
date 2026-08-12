<?php
// add_new_images.php(_scriptsフォルダ内から実行)
// 新しく追加された画像だけを検出し、gallery.jsonへの追記を行う(リネームなし)

$baseDir = __DIR__ . '/../public/images/gallery/';
$jsonFile = __DIR__ . '/../data/gallery.json';

// サブフォルダも含めて再帰的に画像を検索
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

// 既存のgallery.jsonを読み込み
$gallery = json_decode(file_get_contents($jsonFile), true) ?: [];

// 既に登録済みの画像パスを集める(image配列を平坦化)
$registeredImages = [];
foreach ($gallery as $item) {
    foreach ($item['image'] as $img) {
        $registeredImages[] = $img;
    }
}

// 現在フォルダにある全画像
$allImages = findImagesRecursive(rtrim($baseDir, '/'), $baseDir);

// まだgallery.jsonに登録されていない画像だけを抽出
$newImages = array_values(array_diff($allImages, $registeredImages));

if (empty($newImages)) {
    echo "新しい画像は見つかりませんでした。\n";
    exit;
}

// 新規画像を更新日時順に並び替え
usort($newImages, function ($a, $b) use ($baseDir) {
    return filemtime($baseDir . $a) <=> filemtime($baseDir . $b);
});

$addedEntries = [];
foreach ($newImages as $relativePath) {
    $filename = basename($relativePath);
    $nameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
    $modifiedTime = filemtime($baseDir . $relativePath);

    $gallery[] = [
        'image' => [$relativePath],
        'name' => $nameWithoutExt,
        'date' => date('Y.m.d', $modifiedTime),
        'category' => 'original' // 仮、後で手動調整
    ];

    $addedEntries[] = $relativePath;
}

// 保存(既存データはそのまま、新規分だけ追加された状態)
file_put_contents($jsonFile, json_encode($gallery, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "--- 追加された画像 ---\n";
foreach ($addedEntries as $log) {
    echo $log . "\n";
}
echo "\n合計 " . count($addedEntries) . " 件を追加しました。\n";