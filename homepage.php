<?php
session_start();
include("connection.php");
include("functions.php");


$user_data = check_login($con);


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile Home Page</title>
  <link href="css/stylesheet.css" type="text/css" rel="stylesheet">
 </head>
 <body>

 	<a href="logout.php">Logout</a>
 	<h1>This is the profile home page</h1>

 	<br>
  Username:  <?php echo $user_data['username']?> <br><br>
  <?php echo 'User ID:'.$user_data['user_id'];?> <br><br>
  Account Creation: <?php echo $user_data['date']?><br><br>

  <HR>
    <div class="user-control-panel">

    <form method="POST" action="" id="update-info">
      <input name="update-info" type="button" value="Update Account Info">
    </form>

    <form method="POST" action="" id="search-box">
      <input name="search-box" type="search" value="enter keywords . . . ">
      <input name="search-btn" type="button" value= "search">

    </form>
  </div>

  <HR>

   <div class="profile-info">
     <?php
        $username = $user_data['username'];


       $query = "select * from user_account_info where username =
       '$username' limit 1";
       $result = mysqli_query($con , $query);

       if($result && mysqli_num_rows($result) > 0)
       {
           $user_account_info = mysqli_fetch_assoc($result);

        ?>

      First Name: <?php echo $user_account_info['firstname']?> <br><br>
      Middle Name: <?php echo $user_account_info['middlename']?> <br><br>
      Last Name: <?php echo $user_account_info['lastname']?> <br><br>
      Birthday: <?php echo $user_account_info['birthday']?> <br><br>
      Contact Number: <?php echo $user_account_info['contactnumber']?> <br><br>
      Bio / Motto: <?php echo $user_account_info['biomotto']?> <br><br>


      <?php
       }
        else {
          echo "Failed to pull out acount information . . . ";
        }




      ?>



   </div>





 </body>
 </html>
