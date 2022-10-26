<body>
    <?php require_once dirname(__FILE__) . '/task1.php';
    require_once dirname(__FILE__) . '/tasksheet.php';
    $tasksheet = new Tasksheet();
    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task1->progress = 100;
    $tasksheet->addTask($task1);

    $task2 = new Task();
    $task2->name = '食材の買い出し';
    $task2->progress = 50;
    $tasksheet->addTask($task2);
    echo PHP_EOL, '●タスクリストを表示します', PHP_EOL;
    $tasksheet->show();
    ?>
</body>