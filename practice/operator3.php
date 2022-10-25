<body>
    <?php
    $arr1 = ['a', 'b'];
    $arr2 = ['d', 'e', 'f'];
    $mergedA = $arr1 + $arr2;
    $mergedB = $arr2 + $arr1;
    $mergedC = array_merge($arr1, $arr2);
    $mergedD = array_merge($arr2, $arr1);

    ?>
    <p>●配列の合成結果:</p>
    *mergedA:<?php print_r($mergedA) ?>
    *mergedB:<?php print_r($mergedB) ?>
    *mergedC:<?php print_r($mergedC) ?>
    *mergedD:<?php print_r($mergedD) ?>
    <?php
    $arr3 = [
        'a' => 'valueA',
        'b' => 'valueB',
    ];
    $arr4 = [
        'a' => 'valueC',
        'b' => 'valueD',
        'c' => 'valueE',
    ];
    $mergedE = $arr3 + $arr4;
    $mergedF = $arr4 + $arr3;
    $mergedG = array_merge($arr3, $arr4);
    $mergedH = array_merge($arr4, $arr3);
    ?>
    <p>●連想配列の合成結果:</p>
    *mergedE:<?php print_r($mergedE) ?>
    *mergedF:<?php print_r($mergedF) ?>
    *mergedG:<?php print_r($mergedG) ?>
    *mergedH:<?php print_r($mergedH) ?>

</body>