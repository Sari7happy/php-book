<?php
$dt1 = new DateTime(null,new DateTimezone('Asia/Tokyo'));
print $dt1->format('Y年m月d日 H時i分');
