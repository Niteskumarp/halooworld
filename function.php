<?php
include("connection.php");

function check_login($conn)
{

	if(($_REQUEST['email']))
	{

		$id = $_REQUEST['email'];
		$query = "select * from signup where email = '$id' limit 1";
		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$email = mysqli_fetch_assoc($result);
			return $email;
		}
	}
	

	
	//redirect to login
	//header("Location: login.php");
	//die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}