<?php
session_start();

include("connections.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $contactnumber = $_POST['contact_number'];
    $birthday = $_POST['birthday'];
    
    
    
    

    

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {

        //save to database
        $user_id = random_num(99999);
        $query = "insert into users (user_id,username,password) values ('$user_id','$username','$password')";
        $query2 = "insert into user_account_info (username, first_name, middle_name, last_name, email, contact_number, birthday) 
        values ('$username', $firstname', '$middlename', '$lastname', '$email', '$contactnumber', '$birthday')";

         mysqli_query($con, $query);
      
        
        
        header("Location: index.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}


?>



 
<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Training Index Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href ="css/stylesheet.css" type="text/css" rel="stylesheet">
</head>

<header>
  <section class ="menu-nav">
  <ul>
  <a href="index.php"><li>Home</li></a>
  <a href="#"><li>Projects</li></a>
  <a href="#" target="_blank"><li>Training</li></a>
  <a href="#"target="_blank"><li>About Us</li></a>

  </ul>
  </section>

</header>

<body>
<section class="header">
 <div class="banner">
   <img src="" alt=""/>
 


</section>

  <section class = "signup-form">
    <form method="POST"> <h2>REGISTER AN ACCOUNT</h2>
    <table>
      <tr><td id="text-signup">Username</td><td><input name = "username" type="text" value="username"></td><br><br>
      <tr><td id="text-signup">Password</td><td><input name = "password" type="password" value="password"><br><br>
      <tr><td id="text-signup">First Name</td><td><input name = "first_name" type="text"> <br><br>
      <tr><td id="text-signup">Middle Name</td><td><input name = "middle_name" type="text"> <br><br>
      <tr><td id="text-signup">Last Name</td><td><input name = "last_name" type="text"> <br><br>
      <tr><td id="text-signup">Email</td><td><input name = "email" type="text"> <br><br>
      <tr><td id="text-signup">Contact #</td><td><input name = "contact_number" type="text"> <br><br>
      <tr><td id="text-signup">Birthday</td><td><input name = "birthday" type="date"> <br><br>
      <input name = "signup-button" type="submit" value="SIGN UP!">
</table>
    </form>


</section>

</body>

<footer class="footer">
 <div><a href="#">Copyright@ 2022 Developed by HANGMATA 2022</a>.
 

</footer>

</html>
