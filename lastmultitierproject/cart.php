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
											
											<li><a href="log-in-Admins.html">Admin</a></li>
											<li><a href="log-in-Customer.php">Customer</a></li>
											</ul>
											</div>
											
										

										
									</ul>
										</div>
										</strong>
						
								</header>
									<!--futureX-->
              
									
								
</html>




<?php
	

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>


<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="Images\cart.png" width="30" height="25" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>

</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $Food){
?>
<tr>
<td><img src='<?php echo $Food["image"]; ?>'  /></td>
<td><?php echo $Food["Name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $Food["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $Food["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($Food["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($Food["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($Food["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($Food["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($Food["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "SR".$Food["Price"];?></td>
<td><?php echo "SR".(int)$Food["Price"]*(int)$Food["quantity"]; ?></td>
</tr>
<?php
$total_price += ((int)$Food['quantity']*(int)$Food['Price']);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "SR".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>