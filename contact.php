<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	$to='gktyagi2018@mail.com'; // Receiver Email ID, Replace with your email ID
	$subject='Form Submission';
	$message="Name :".$name."\n"."\n\n".$msg;
	$headers="From: ".$email;

	if(mail($to, $subject, $message, $headers))
	{
		/*echo "Sent Successfully! Thank you"." ".$name.", We will contact you shortly!";*/
	}
	else
	{
		echo "Something went wrong!";
	}
}

?>