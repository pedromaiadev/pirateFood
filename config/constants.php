<?php 
    //Start session
    session_start();

    define('SITEURL', 'file:///C:/wamp64/www/pirateFood/index.html');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'piratefood');

    $conn = mysqli_connect('localhost','root', '') or die(mysqli_error()); // database conection
    $db_select = mysqli_select_db($conn, 'piratefood') or die(mysqli_error()); //selecting database

?>