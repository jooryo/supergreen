<?php
session_start();
$user = '';
if(isset($_SESSION['ID'])){
  $user = $_SESSION['ID'];
  if($user != ''){
    header("Location: log-in-Customers.php");
  }
}
$username = "";
$password = "";
$errorMsg = "";
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


$connection = mysqli_connect("localhost", "root", "")
 or die("could not connect to database </body></html>");
 
 mysqli_select_db($connection, "customers")
 or die("could not open customers database </body></html>");
 
 $query = "select * from customers WHERE username = '".$username."' and password = '".$password."' ";
$result = mysqli_query($connection, $query );
 $count = mysqli_num_rows($result);
 $ID = '';
 if($count > 0){
   while($row = $result->fetch_assoc()) {
         $ID = $row['ID'];
        }
    $_SESSION['ID'] = $ID;
    header("Location: welcome-Customer.php");
 }else {
       $errorMsg = "Invalid Username or Password!";
 }
mysqli_close($connection);
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Log in </title>
<link rel="stylesheet" type="text/css" href="projectcss.css">
</head>
<body>
<div class="Login">
<img src="Images\loginicon" class="icon-Login">
<h1> LOGIN </h1>
<?php echo' <h2>'. $errorMsg.'</h2>' ?>
<form method="post" action="">
<p style="text-align:left; color:#004A13;"><strong>Username</strong> </P>
<input type="text" name="username" placeholder="Enter username">

<p style="text-align:left; 	color:#004A13;"><strong> Password</strong></P> 
<input type="password" name="password" placeholder="Enter password"> 
<input type="submit" name="log" value="Login">
<br>
<a href="signup.php"> Not on SuperGreens yet? Sign Up </a>
</form>
</div>
</body>
</html>