<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>update item </title>
<link rel="stylesheet" type="text/css" href="projectcss.css">
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn ,"Food");
$query="UPDATE  Food SET Name='".$_POST['Name']."',Price='".$_POST['Price'].
"',Specification='".$_POST['Specification']."',Description='".$_POST['Description'].
"'WHERE no=".$_POST['no']."";

$result=mysqli_query($conn, $query);
mysqli_close( $conn );
header("location: ListItems.php");
exit();
?>
</body>
</html>

