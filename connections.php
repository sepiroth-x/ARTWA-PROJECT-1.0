<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'hangmata_db';

if (!$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname))
{
   echo "failed to connect database";
  
}