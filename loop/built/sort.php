<?php
$data=['Tennis','Swimming','Soccer','Baseball'];
sort($data,SORT_STRING);
print_r($data);
//A-Z 順に並べる

rsort($data,SORT_STRING);
print_r($data);
//Z-Aに並べる
$data2=['Tennis'=>1,'Swimming'=>1,'Soccer'=>11,'Baseball'=>9];
sort($data2,SORT_NUMERIC);
print_r($data2);
//数値で表すソート
?>