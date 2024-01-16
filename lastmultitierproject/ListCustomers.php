<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List customers </title>

</head>

<body>
<?php
// Connect to MySQL
$conn = mysqli_connect( "localhost", "root", "" )
or die( "Could not connect to database </body></html>" );

// open customers Table database

mysqli_select_db( $conn,"customers");

$qu1="SELECT * FROM  customers";

$theresult=mysqli_query($conn,$qu1);

?>
<link rel="stylesheet" type="text/css" href="projectcss.css">
<table border="2">
<caption><h1>List of customers</h1></caption>

<tr> <th>


</th> <th> password </th> <th> Fname </th> <th> Lname</th> <th> Bday </th><th> Sex </th> <th> email</th> <th> phone </th>
<th> City </th> <th> Street</th> <th> Bday </th><th> ZIPcode </th>  </tr>


<?php


while($row=mysqli_fetch_row($theresult)){
	print("<tr>");
	
	foreach($row as $value)
		print("<td>$value</td>");
		
	print("</tr>");
}
?>


</table>

</body>
</html>