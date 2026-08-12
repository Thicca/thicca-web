<?php
// check_dates.php(_scriptsフォルダ内から実行、再帰対応版)

$baseDir = __DIR__ . '/../public/images/gallery/';

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

$allImages = findImagesRecursive(rtrim($baseDir, '/'), $baseDir);

// 更新日時順に並び替え
usort($allImages, function ($a, $b) use ($baseDir) {
    return filemtime($baseDir . $a) <=> filemtime($baseDir . $b);
});

foreach ($allImages as $relativePath) {
    $modifiedTime = filemtime($baseDir . $relativePath);
    $formattedDate = date('Y-m-d H:i:s', $modifiedTime);

    echo "{$relativePath} → {$formattedDate}\n";
}

echo "\n合計 " . count($allImages) . " 件見つかりました。\n";