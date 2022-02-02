<?php


function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$userdata = mysqli_fetch_assoc($result);
			return $userdata;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$id_num = "";


   $current = getdate();

   $num = rand(0,$length);

   $year = $current['year'];
   $id_num .= $num .'-'.$year;


	return $id_num;
}
