<?php

declare(strict_types=1); ?>

<body>
    <?php
    $greeting = 'Good';
    $greetingMaker = function ($time) use ($greeting) {
        print $greeting . ''.$time . '<br/>';
    };
    $greetingMaker('Morning');
    $greeting = 'Beautiful';
    $greetingMaker('Evening');
    ?>
</body>