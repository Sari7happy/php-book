<body>
    <?php
    define('TAX_PERCENT', 0.08);
    define('SMTP_HOST', 'example.com');
    ?>
    <p>消費税率は:<?= TAX_PERCENT; ?></p>
    <p>100円の税込金額は:<?= 100 + 100 * TAX_PERCENT; ?></p>
    <p>STMPサーバーは:<?= SMTP_HOST; ?></p>

</body>