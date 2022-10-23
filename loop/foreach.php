<?php
$books = [
    ['独学PHP', '3000'],
    ['独学HTML', '2000'],
    ['独学CSS', '1000'],
];
foreach ($books as [$title, $price]) {
    print "{$title} ({$price}円)<br/>";
}
