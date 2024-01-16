		
<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password']; 

 

if($username AND $password){

$connection=mysqli_connect("localhost","root","") or die ("couldn't connection!");

mysqli_select_db($connection,"Admins") or die("couldn't find Database Admins") ;

$query=mysqli_query($connection,"SELECT username FROM Admins where username='$username' and password = '$password'");
$rows=mysqli_num_rows($query);

 
if($rows!=0)
{
	//echo "you are in !! click <a href='logout.php'>here<a> logout";
	header("location: welcome-Admins.php");

	$_SESSION['username']=$username;
		   
}

else
die("Incorrect username or password!");
}
else 
die ("please enter a username and a password!");

?>


