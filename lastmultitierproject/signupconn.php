<?php

$connection = mysqli_connect("localhost", "root", "")
 or die("could not connect to database </body></html>");
 
 mysqli_select_db($connection, "customers")
 or die("could not open customers database </body></html>");
 
 $query = "INSERT INTO customers(ID,username,Fname,Lname,Sex,Bday,email,phone,City,Street,ZIPcode,password) 
	VALUES('','$_POST[username]','$_POST[Fname]','$_POST[Lname]','$_POST[Sex]','$_POST[Bday]','$_POST[email]','$_POST[phone]','$_POST[City]','$_POST[Street]','$_POST[ZIPcode]','$_POST[password]')";
	
 if(!($result = mysqli_query($connection, $query )))
 {
  print("<p>Could not excute query!</p>");
  die(mysql_error()."</body></html>");
 }

mysqli_close($connection);
session_start();
$_SESSION['ID'] = $ID;
header("Location: log-in-Customer.php");

exit();
?>