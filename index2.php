<?php 

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$bday = $_POST['bday'];
	$Email = $_POST['email'];
	$pass = $_POST['pass'];

	if(empty($fname))
	{
		echo "Need to enter First Name";
	}elseif(empty($lname))
	{
		echo "Need to enter Last Name";
	}elseif(empty($bday))
	{
		echo "Need to enter Birthday";
	}elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)  && (!empty($Email))) {
			echo "Unvalid Email Format";
	}elseif(empty($Email))
	{
		echo "Email is Empty";
	}elseif (empty($Pass)) {
		echo "There is no password inputed";
	}elseif(mb_strlen($Pass)<8)
	{
		echo "You need to add 8 or more characters";
	}
	else
	{
		echo "Success: <br> First Name: $fname <br> Last Name: $lname <br> Birthday: $bday <br> Email: $Email <br> Password: $pass";
	}


 ?>