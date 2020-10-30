<?php 

$Email = $_POST['email'];

$Pass = $_POST['pass'];

	if (!filter_var($Email, FILTER_VALIDATE_EMAIL)  && (!empty($Email))) {
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
		echo "Success: <br> Email: $Email <br> Password: $Pass";
	}

 ?>