<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>delete item </title>
<link rel="stylesheet" type="text/css" href="projectcss.css">
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn ,"Food");
$no=$_POST['no'];
$query="DELETE FROM Food WHERE no=$no";
//echo $query;
$result=mysqli_query($conn, $query);
mysqli_close( $conn );
header("location: ListItems.php");
exit();
?>
</body>
</html>
