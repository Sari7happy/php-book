<body>
    <?php
    $airports = [
        [
            'name' => '羽田',
            'adress' => '東京都'
        ],
        [
            'name' => '成田',
            'adress' => '千葉県'
        ],
        [
            'name' => '関西',
            'adress' => '大阪'
        ]

    ];
    $airports[] =
        [
            'name' => 'なは',
            'adress' => '沖縄'
        ];
    ?>
    <p><?= $airports[0]['name'] ?>-<?= $airports[0]['adress'] ?></p>
    <p><?= $airports[1]['name'] ?>-<?= $airports[1]['adress'] ?></p>
    <p><?= $airports[2]['name'] ?>-<?= $airports[2]['adress'] ?></p>
    <p><?= $airports[3]['name'] ?>-<?= $airports[3]['adress'] ?></p>
    <p><pre><?php print_r($airports); ?></pre></p>
</body>