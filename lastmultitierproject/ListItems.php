<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List items </title>

<script>
function move(){
	window.location.assign("form-Insert-Admain.html");
} 
</script>
</head>

<body>
<?php
// Connect to MySQL
$conn = mysqli_connect( "localhost", "root", "" )
or die( "Could not connect to database </body></html>" );

// open Food Table database

mysqli_select_db( $conn,"Food");

$qu1="SELECT * FROM  Food";

$theresult=mysqli_query($conn,$qu1);

?>
<link rel="stylesheet" type="text/css" href="projectcss.css">
<table border="2">
<caption><h1>List of Items</h1></caption>

<tr> <th> No </th> <th> Name </th> <th> Price </th> <th> Specification</th> <th> Description </th></tr>


<?php


while($row=mysqli_fetch_row($theresult)){
	print("<tr>");
	
	foreach($row as $value)
		print("<td>$value</td>");
		print("<td><a href='editform.php?no=$row[0]'>Edit</a></td>");
			print("<td><a href='deleteItemsform.php?no=$row[0]'>Delete</a></td>");
	
	print("</tr>");
}
?>


</table>
<p><input type="button" onclick="move()" value="Add Item"></p>
</body>
</html>