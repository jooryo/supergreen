<html>
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<title> Super Greens|Home </title>
				<!--Stylesheet -->
				<link rel="stylesheet" type="text/css" href="projectcss.css">
				
			
</head>
				<body>

					<header class="header">
						
						<img src="Images\projectLogo.png" width="200" height="110" id="logo">
						
						<!--Navigation menu-->
						
								<strong>
									<div class="menu-bar">
									<ul>
									<li>
									<a href="homepage.html">Home</a>
									</li>
									<li>
											<a href="AboutUs.html"> About us </a>
										</li>
										<li>
											<a href="#"> products </a>
											<div class="sub-menu-1">
											<ul>
											<li><a href="index.php">categories</a></li>
											<li><a href="#">collection</a></li>
											<li><a href="featured.html">featured</a></li>
											<li><a href="Sale.html">sale</a></li>
											<li><a href="Brands.html">brands</a></li>
											</ul>
											</div>
										</li>
										
										<li>
											<a> Log in </a>
											<div class="sub-menu-1">
											<ul>
											
											<li><a href="log-in-Admins.php">Admin</a></li>
											<li><a href="log-in-Customer.php">Customer</a></li>
											</ul>
											</div>
											
										</li>
										
										
									</ul>
										</div>
										</strong>
						
								</header>
									
									</body></html>
								




<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM Food WHERE code='$code'");
$row = mysqli_fetch_assoc($result);
$Name = $row['Name'];
$Price = $row['Price'];
$Specification =$row['Specification'];
$Description =$row['Description'];
$code = $row['code'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'image'=>$image,
	'Name'=>$Name,
    'Price'=>$Price,
	'Description'=>$Description ,
	'Specification'=>$Specification,
	'quantity'=>1,
	'code'=>$code
	)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
 

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="Images/cart.png" width="30" height="25" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM Food");
while($row = mysqli_fetch_assoc($result)){
		echo "<center><div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."'/></div>
			  <div class='Name'>".$row['Name']."</div>
		   	  <div class='Price'>SR".$row['Price']."</div>
			  	  <div class='Specification'>".$row['Specification']."</div>
		
	       <div class='Description'>".$row['Description']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div></center>";
        }
mysqli_close($con);
?>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
