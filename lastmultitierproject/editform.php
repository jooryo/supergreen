<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>update item </title>
<link rel="stylesheet" type="text/css" href="projectcss.css">
</head>

<body>
<h1>update item</h1>

<form method="post" action="edit.php">
<?php 
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn ,"Food");
$no=$_GET['no'];
$query="SELECT * from Food where no=$no";
$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($result))
{$no=$row['no'];
$Name = $row["Name"];
$Price = $row["Price"];
$Specification =$row["Specification"];
$Description = $row["Description"];
}
mysqli_close( $conn );
?>
<table>
<tr> <td> Name of the Item:<input type="text" name="Name" size="50" value="<?php echo $Name;?>"> </td></tr>
<tr> <td> Price of the Item: <input type="text" name="Price" size="50" value="<?php echo $Price;?>"></td></tr>
<tr> <td> Specification: <input type="text" name="Specification" size="50" value="<?php echo $Specification;?>"> </td></tr>
<tr> <td> Description: <textarea rows="4" cols="36" name="Description"  value="<?php echo $Description;?>"></textarea></td></tr>
<input type="hidden" name="no" size="5" value="<?php echo $no;?>">
</table>

<p><input type="submit" value="update Item"> </p>
</form>
</body>
</html>