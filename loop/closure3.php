<?php

declare(strict_types=1); ?>

<body>
    <?php
    function printPurchased(array $items, callable $extraDataFunc): void
    {
        echo '<table border ="1">';
        echo '<tr>';
        echo '<th>購入日</th>';
        echo '<th>商品名</th>';
        echo '<th>価格</th>';
        echo '<th>その他</th>';
        echo '</tr>';
        foreach ($items as $item) {
            echo '<tr>';
            echo '<td>', $item['date'], '</td>';
            echo '<td>', $item['name'], '</td>';
            echo '<td>', $item['price'], '</td>';
            echo '<td>', $extraDataFunc($item), '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    $items = [
        [
            'user-id' => 'tanaka-1234',
            'date' => '2022-10-8',
            'name' => 'スカート',
            'price' => '2500',
            'color' => 'red',
            'size' => 'M',
            'item-number' => '90125',
            'serial' => 'PLG1052',
        ],
        [
            'user-id' => 'tanaka-1234',
            'date' => '2022-12-8',
            'name' => 'スカート2',
            'price' => '2504',
            'color' => 'orange',
            'size' => 'S',
            'item-number' => '90127',
            'serial' => 'PLA1052'
        ]
    ];
    echo '<h3>ユーザのマイページ内の購入履歴</h3>';
    printPurchased($items, function ($item) {
        return "色:{$item['color']} サイズ:{$item['size']}";
    });

    echo '<h3>販売者専用ページ内の購入履歴</h3>';
    printPurchased($items, function ($item) {
        return "ユーザID:{$item['user-id']} 商品No:{$item['item-number']}";
    });


    ?>
</body>