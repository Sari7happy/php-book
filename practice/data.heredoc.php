<body>
    <?php
    $itemNumber = 'abc1323';
    $mailBody = <<<MAIL
    お問い合わせを受け付けました
    ■お問い合わせ内容：
    商品番号「{$itemNumber}」について"サイズと色の種類を教えてください"
    MAIL;
    ?>
    <p>
    <pre><?= $mailBody ?></pre>
    </p>
</body>