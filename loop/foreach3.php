<body>
    <?php
    $colors = [
        'red' => '赤',
        'blue' => '青',
        'yellow' => '黄'
    ];
    foreach ($colors as $key => $value) {

        echo "<p>キー:{$key}値:{$value}</p>";
    }
    ?>
</body>