<?php
// generate_gallery_json.php(_scriptsフォルダ内から実行)

$baseDir = __DIR__ . '/../public/images/gallery/';
$outputFile = __DIR__ . '/../data/gallery.json';

// サブフォルダも含めて再帰的に画像を検索
function findImagesRecursive($dir, $baseDir) {
    $results = [];
    $items = scandir($dir);

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;

        $fullPath = $dir . '/' . $item;

        if (is_dir($fullPath)) {
            // フォルダなら中に入って再帰的に探す
            $results = array_merge($results, findImagesRecursive($fullPath, $baseDir));
        } elseif (preg_match('/\.(jpg|jpeg|png|webp)$/i', $item)) {
            // 画像ファイルなら、gallery/からの相対パスを記録
            $relativePath = str_replace($baseDir, '', $fullPath);
            $relativePath = str_replace('\\', '/', $relativePath); // Windowsのバックスラッシュ対策
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

$gallery = [];
foreach ($allImages as $relativePath) {
    $filename = basename($relativePath);
    $nameWithoutExt = pathinfo($filename, PATHINFO_FILENAME); // 拡張子を除いたファイル名

    $gallery[] = [
        'image' => [$relativePath],  // フォルダ名込みの相対パス
        'name' => $nameWithoutExt,    // ファイル名をそのままタイトルに
        'date' => date('Y.m.d', filemtime($baseDir . $relativePath)),
        'category' => 'original' // 仮、後で手動調整
    ];
}

file_put_contents($outputFile, json_encode($gallery, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo count($gallery) . "件のデータを生成しました。\n";