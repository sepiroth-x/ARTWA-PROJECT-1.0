
<?php
    session_start();
    include('connections.php');
    include('functions.php');

    $userdata = check_login($con);

 ?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>PHP Training Home Page</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href ="css/stylesheet.css" type="text/css" rel="stylesheet">
 </head>
 <header>
   <section class ="menu-nav">
   <ul>
   <a href="#">Profile<li></li></a>
   <a href="# " target="_blank"><li>Projects</li></a>
   <a href="#" target="_blank"><li>Training</li></a>
   <a href="#" target="_blank"><li>About Us</li></a>
   <a href="logout.php"><li>Logout</li></a>

   </ul>
   </section>

 </header>
 <body>

 <section class="profile-header">
   <hr>
  <div class="profile-banner">
    <h1>Welcome! <br><?php echo $userdata['username']?> </h1>
    <div class ="search-box">
    <input name="search-box" type="search">
    <input name="search-button" type="button" value="Search">
  </div>
  </div>
  
    <div class ="profile-control-panel">
      <ul>
        <a href="">Edit Profile<li></li></a>
        <a href="">Schedule<li></li></a>
        <a href="">Classes<li></li></a>
      </ul>
    </div>
    <hr>

 </section>


 </body>


<footer class="footer">
    <div><a href="#">Copyright@ 2022 Developed by HANGMATA 2022</a>.
    </div>

 </footer>

 </html>
