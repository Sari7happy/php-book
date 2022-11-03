<?php
$data=['Tennis','Swimming','Soccer','Baseball'];
sort($data,SORT_STRING);
print_r($data);
//A-Z 順に並べる

rsort($data,SORT_STRING);
print_r($data);
//Z-Aに並べる

?>