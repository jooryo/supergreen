<?php session_start(); 
$Name = $_POST["Name"];
$Price = $_POST["Price"];
$Specification =$_POST["Specification"];
$Description = $_POST["Description"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List items </title>
</head>

<body>
<?php
// Connect to MySQL
$connection = mysqli_connect( "localhost", "root", "" )
or die( "Could not connect to database </body></html>" );

// open Food Table database
mysqli_select_db( $connection,"Food" )
or die ( "could not open Food Table database </body›</html›" );



// query FoodTable database
$sql="INSERT INTO Food(Name,Price,Specification,Description) VALUES
 ('$_POST[Name]','$_POST[Price]','$POST[Specification]','$POST[Description]')";


if ( !( $result = mysqli_query ( $connection,$sql) ) ){
print ( "<p>Could not execute query!</p>" );
die ( mysql_error (). "</body></html>" );
}


mysqli_close ( $connection );


header ("Location:ListItems.php");
exit();
?>

</body>
</html>