<?php
session_start();
include("connection.php");
include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
   $username = $_POST['username'];
   $password = $_POST['password'];

   if(!empty($username) && !empty($password) && !is_numeric($username))
   {

     //save to database

     $user_id = random_num(999999);
     $query = "insert into users (user_id, username, password) values
     ('$user_id','$username','$password')";

     mysqli_query($con, $query);
     header("Location: index.php");
     die;


   } else
      {
        echo "Please enter some valid information!";
      }


  }





 ?>








<!DOCTYPE html>
<html lang="en">
<head>
<title>SIGN UP</title>

 <!--metas-->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="https://ifamsocial.com/u/sepirothx">
 <meta name="description" content="My Projects">


 <!--links-->
<link href="css\stylesheet.css" type="text/css" rel="stylesheet">

</head>

<body>
  <div class="header_intro">
   <h1>Welcome To My PHP Playground</h1>
  <h3>By: Richard Cebel Cupal</h3>

  <div class="date-time">
    <?php
      $current = getdate();

      $current_time = $current['hours'] . ':' . $current['minutes'];

      $current_date = $current['mon'] . '-' . $current['mday'] . '-' .
      $current['year'];

      echo "Date & Time: $current_date ||  $current_time";
    ?>
  </div>
<div class="banner">
  <table>
  <tr>
    <td>
 <img src="img\blackdragon.jpg" class="dragon-logo" alt="blackdragon-logo" />
    </td>
    <td>


        <div class="signup">
           <form method="post"> <h1>SIGN UP</h1><br><br>
             <input name="username" type="text" value="username" size="30">
             <input name="password" type="password" size="30">
             <input name="submit" type="submit" value="signup"><br><br>
             <a href="index.php">LOGIN<a>
           </form>
         </div>



    </td>



  </tr>





 </div>
</table>

</div>




</body>


</html>
