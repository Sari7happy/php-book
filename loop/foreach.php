<?php
$books = [
    ['title'=>'独学PHP', 'price'=>3000],
    ['title'=>'独学HTML', 'price'=>2500],
    ['title'=>'独学CSS', 'price'=>1000],
];
foreach ($books as ['title'=>$title, 'price'=>$price]) {
    print "{$title} ({$price}円)<br/>";
}
