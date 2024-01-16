<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<title> Super Greens|Admins </title>
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
													<li>
														<a href="categories.html">categories</a>
													</li>
													<li>
														<a href="#">collection</a>
													</li>
													<li>
														<a href="featured.html">featured</a>
													</li>
													<li>
														<a href="Sale.html">sale</a>
													</li>
													<li>
														<a href="Brands.html">brands</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<a> About</a>
											<div class="sub-menu-1">
												<ul>
													<li>
														<a href="insertItem.php">Insert new Item</a>
													</li>
													<li>
														<a href="ListItems.php">List Item</a>
													</li>
													<li>
														<a href="ListCustomers.php">List customers</a>
													</li>
													<li>
														<a href="logoutA.php">Log out</a>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<a href="cart.html">
												<img src="Images\cart.png" width="30" height="25"> </a>
											</li>
										</ul>
									</div>
								</strong>
							</header>
							
							<br>
								<main>
									
							
									<!--futureX-->
								<video src="vidoeHome.mp4" loop autoplay muted id="imgHome"></video>
						
									<div class="content">
									<br><br><br>
									 <h3>Welcome <?php echo $_SESSION['username']; ?> to our</h3> 
									
										<h1>Healthy Food Store </h1>
										<h3> healthy and happy life starts with your food</h3><br>
										<button type="button" name="shop" onclick="window.open('categories.html')">Shop now </button>
										
									</div>
									</main>
									
									<footer>
									
											<strong>
											<div class="menu-bar">
												<ul>
													<li>
														<a href="ContactUs.html"> contact us </a>
													</li>
												
													<li>
														<a href="support.html"> Support </a>
													</li>
													</div>
												</strong>
												<p align="center">copyright &copy; 2023-2024  SuperGreens.com </p>
											</ul>
										</footer>
									</body>
								</html>