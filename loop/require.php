<body>
 <?php 
    ini_set('date.timezone','Asia/Tokyo');
    echo date('Y-m-d H:i:s'),'<br>';

    ini_set('date.timezone','UTC');
    echo date('Y-m-d H:i:s'),'<br>';
 
 ?>
</body>