<body>
    <?php
    $result1 = floor((0.1 + 0.7) * 10);
    $result2 = floor((string)(0.1 + 0.7) * 10);
    $result3 = floor((int)bcmul(bcadd(0.1, 0.7, 2), 10, 2));
    ?>
    <h4>(0.1+0.7)*10の切り捨て計算結果</h4>
    <p>result1:<?= $result1 ?></p>
    <p>result2:<?= $result2 ?></p>
    <p>result3:<?= $result3 ?></p>

</body>