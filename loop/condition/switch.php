<body>
    <?php
    $message = '';
    $extension = 'gif';
    switch ($extension) {
        case 'jpg':
            $message = 'jpg画像です';
            break;
        case 'png':
            $message = 'png画像です';
            break;
        default:
            $message = 'その他の形式です';
    }
    ?>
    <p>メッセージ:<?= $message ?></p>
</body>