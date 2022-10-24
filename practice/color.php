<?php $colors = ['赤', '青', '黄', '緑', 'オレンジ']; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">


    <title>ラッキーカラー占い</title>
</head>

<body>
    <h1>本日、<?= date('Y年m月d日') ?>のラッキーカラー</h1>
    <p>今日のラッキーカラーは「<?= $colors[random_int(0, 4)] ?>」です！</p>

</body>

</html>