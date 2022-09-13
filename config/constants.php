<?php
    define('LOCALHOST','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DB_NAME','bookiva');
    define('SITEURL',"http://localhost/bookivaphp/");
    $conn=mysqli_connect(LOCALHOST,USERNAME,PASSWORD)or die(mysqli_error());
    $deb_select=mysqli_select_db($conn,DB_NAME)or die(mysqli_error());
?>