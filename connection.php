<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'phptraining';

if (!$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname))
{
  die("server connection failed!");
}




 ?>
