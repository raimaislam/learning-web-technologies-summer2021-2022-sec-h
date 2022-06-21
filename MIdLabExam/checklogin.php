<?php
$username = $_REQUEST['username']
$password = $_REQUEST['password']
$confirmpassword = $_REQUEST['confirmpassword']

if( $username==null || $password==null)
{
	echo"Field is empty";

}

else{

	$file=fopen('user.txt','r');
	while(!feof($file));
	{
		$data=fgets($file);
		$user=exploder("|",$data);
		if($username==trim(user[0]) && $password==trim(user[1]))
		{
			setcookie('status','true',time()+3600,'/');
			header('location:home.php?username='.$username);
		}
		else{
			echo"incorrect username or password";
		}
	}
	
}
