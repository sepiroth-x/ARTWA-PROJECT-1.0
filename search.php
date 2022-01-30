<?php
session_start();

include("connection.php");
include("functions.php");


$keyword_entered = $_POST['search-box'];
$query = "select * from users, user_account_info where ";


$mysqli_query($con , $query);
