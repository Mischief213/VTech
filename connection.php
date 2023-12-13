<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dummy';

//connection
$conn = mysqli_connect($servername, $username, $password)
        OR die('Connection Failed');
$dbselected = mysqli_select_db($conn, $dbname)
            OR die('Database cannot be accessed');
?>