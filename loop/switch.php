<?php
$rank = '乙';
$result = match ($rank) {
    '甲' => '大変良いです',
    '乙' => '良いです',
    '丙' => '頑張りましょう',
    default => '???'
};
print $result;
