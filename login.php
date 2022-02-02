<?php
    session_start();
    include('connections.php');
    include('functions.php');


    if ($_SERVER['REQUEST_METHOD'] = "POST")
    {
         $username = $_POST['username'];
         $password = $_POST['password'];

         if(!empty($username) && !empty($password) && !is_numeric($username))
         {
            $query = "select * from users where username = '$username' limit 1";
            $result = mysqli_query($con , $query);

            if ($result)
            {
              if ($result && mysqli_num_rows($result) > 0)

              $userdata = mysqli_fetch_assoc($result);
              
              if ($userdata['password']===$password)
              {
                     $_SESSION['username'] = $userdata['username'];
                     $_SESSION['user_id'] = $userdata['user_id'];

                     header("Location: home.php");
                     die;
              }

            }
            else 
            {
              echo "wrong username or password!";
            }
            


         }
          echo "wrong username or password!";
         

    }



 ?>