
<!DOCTYPE html>
<html lang="en">
<head>
<title>ARTWA PROJECT</title>

 <!--metas-->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="https://ifamsocial.com/u/sepirothx">
 <meta name="description" content="My Projects">


 <!--links-->
<link href="css\stylesheet.css" type="text/css" rel="stylesheet">

</head>
<header>

  <div class="header_intro">
   <h1>ARTWA PROJECT</h1>
  <h3>By: Sepiroth-X</h3>
 </div>
  <div class="date-time">
    <?php
      $current = getdate();

      $current_time = $current['hours'] . ':' . $current['minutes'];

      $current_date = $current['mon'] . '-' . $current['mday'] . '-' .
      $current['year'];

      echo "Date & Time: $current_date ||  $current_time";
    ?>
  </div>

  <div class="menu-nav">
      <ul>
        <a href="#"><li>Home</li></a>
        <a href="#"><li>About</li></a>
        <a href="#"><li>Projects</li></a>
        <a href="#"><li>Contact</li></a>
      </ul>


</header>

<body>

<div class="banner">
  <table>
  <tr>

    <td>
 <img src="img\blackdragon.jpg" class="dragon-logo" alt="blackdragon-logo" />
    </td>
    <td>


        <div class="login">
           <form method="post" action="login.php"> <h1>LOGIN</h1><br><br>
             <input name="username" type="text" value="username" size="30"><br><br>
             <input name="password" type="password" value="password" size="30"><br><br>
             <input name="submit" type="submit" value="login"><br><br>
             <a href = "signup.php"><p>SIGN UP</p><a/>
           </form>
         </div>



    </td>



  </tr>






</table>

</div>




</body>


</html>
