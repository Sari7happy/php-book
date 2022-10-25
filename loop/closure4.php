<?php

declare(strict_types=1); ?>

<body>
    <?php
    define('EXTRA_PRINT_MODE_USER', 1);
    define('EXTRA_PRINT_MODE_VENDOR', 2);

    function printPurchased(array $items, int $extraPrintMode): void
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
            $extraData = '';
            if ($extraPrintMode === EXTRA_PRINT_MODE_USER) {
                $extraData = "色: {$item['color']} サイズ:{$item['size']}";
            } elseif ($extraPrintMode === EXTRA_PRINT_MODE_VENDOR) {
                $extraData = "商品No:{$item['item-number']} 製造番号:{$item['serial']}";
            }
            echo '<td>', $extraData, '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    $items = [
        [
            'date' => '2020-2-14',
            'name' => 'tanaka',
            'price' => '2500',
            'color' => 'red',
            'size' => 'S',
            'item-number' => '52525',
            'serial' => 'PLI2525'

        ],
        [
            'date' => '2021-08-25',
            'name' => 'yamada',
            'price' => '9000',
            'color' => 'white',
            'size' => 'M',
            'item-number' => '25252',
            'serial' => 'PLO2526',

        ]
    ];
    echo 'ユーザ向け購入履歴ページを出力します。。。<br>';
    PrintPurchased($items, EXTRA_PRINT_MODE_USER);
    echo '<br>販売事業者向け購入履歴ページを出力します。。。<br>';
    printPurchased($items, EXTRA_PRINT_MODE_VENDOR);
    ?>

</body>