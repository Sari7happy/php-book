<body>
    <?php $point = 85; ?>
    <?php
    var_dump($point <=> 85);
    //差異がなければ0
    var_dump($point <=> 70);
    //小さければ1
    var_dump($point <=> 99);
    //大きければ-1
    ?>
</body>