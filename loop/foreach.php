<?php
$data = [
    '田中'=>'男', '山田'=>'女', '森本' => '女',
    '小泉' => '男', '中川' => '女', '和歌山' => '男'
];

foreach ($data as $key => $value) {
    print "{$key}:{$value}<br/>";
}
