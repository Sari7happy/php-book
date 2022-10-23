<?php
$sum =0;
for($i =1;$i<=100;$i++){
    $sum +=$i;
    //breakは中断処理
    if($sum>1000){break;}

}
print"合計が1000を超えるのは、1〜{$i}を加算した時です";
