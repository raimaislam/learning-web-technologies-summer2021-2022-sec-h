<?php
$id =$_REQUEST['id']
$name = $_REQUEST['username']
$password = $_REQUEST['password']
$confirmpassword = $_REQUEST['confirmpassword']

if($id==null || $name==null || $password==null || $confirmpassword==null)
{
	echo"Field is empty";

}
if else(password!=confirmpassword)
{
	echo"Incorrect Pasword";
}
else{

	$user=$name."|".$id."|".$password."/r/n";
	$file=fopen('user.txt','a');
	fwrite($fname=='create')
	{
		header('location:home.php');

	}
	else{

		header('location:login.php');
		}
	}
}
