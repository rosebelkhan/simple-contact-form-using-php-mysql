<?php

	$con = mysqli_connect('localhost','root');

	/*if ($con) {
		echo "Connection Successful !";
	}else{
		echo "Connection Lost !";
	}*/

	mysqli_select_db($con, 'newuserdata');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$query = " insert into userdata (name, email, phone, message) values ('$name','$email','$phone','$message')";

	//echo($query);

	mysqli_query($con,$query);
	header('location:contact.php');
?>