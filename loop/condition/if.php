<body>
    <?php
    $point = 90;
    $message = '通常のスコアです';
    if ($point >= 80) {

        $message = 'ハイスコアです';
    }
    ?>

    <p>メッセージ:<?= $message ?></p>
</body>