<body>
    <?php
    $user = [
        'name' => '山田じろう',
        'age' => '59',
        'place' => '横浜',
    ];
    $user['job'] = '画家';
    $user['hobby'] = 'パンづくり';
    ?>
    <p><?= $user['name'] ?></p>
    <p><?= $user['age'] ?></p>
    <p><?= $user['place'] ?></p>
    <p><?= $user['job'] ?></p>
    <p><?= $user['hobby'] ?></p>
    <p>
    <pre><?php print_r($user); ?></pre>
    </p>


</body>