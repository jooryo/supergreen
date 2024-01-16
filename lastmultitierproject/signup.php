<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Super Greens|Home </title>
    <!--Stylesheet -->
    <link rel="stylesheet" type="text/css" href="projectcss.css">
   
</head>
  
    <body>
	
<div class="signup">
<img src="Images\loginicon" class="icon-Login">
<h3> Sign up</h3>
<form  action="signupconn.php" method="post">

<p style="text-align:left; color:#004A13;"><strong>  Username</strong> </P>
<input type="text" name="username" placeholder="Enter username" size="25" required>

<p style="text-align:left; color:#004A13;"><strong>  First Name</strong> </P>
<input type="text" name="Fname" placeholder="Enter your first name"  size="25" >

<p style="text-align:left; color:#004A13;"><strong>  Last Name</strong> </P>
<input type="text" name="Lname" placeholder="Enter your last name"  size="25">

<p style="text-align:left; color:#004A13;"><strong>  Sex</strong> </P>
<input type="radio" name="Sex" value="Female">Female
<input type="radio" name="Sex" value="Male">Male

<p style="text-align:left; color:#004A13;"><strong>  Birth-day</strong> </P>
<input type="date" name="Bday">


<p style="text-align:left; color:#004A13;"><strong>  Email</strong> </P>
<input type="text" name="email" placeholder="name@example.com">

<p style="text-align:left; color:#004A13;"><strong> Phone number</strong> </P>
<input type="tel" name="phone"  placeholder="## ### ####" size="25">


<p style="text-align:left; color:#004A13;"><strong>City</strong> </P>
Riyadh<input type="radio" name="City" value="Riyadh"  size="25">

<p style="text-align:left; color:#004A13;"><strong>Street</strong> </P>
<input type="text" name="Street" placeholder="Enter your Street"  size="25">

<p style="text-align:left; color:#004A13;"><strong>  ZIP code</strong> </P></td>
<input type="text" name="ZIPcode" placeholder="Enter ZIP code"  size="25">

<p style="text-align:left;  color:#004A13;"><strong> Password</strong></P> 
<input type="password" name="password" placeholder="Enter password" required> 


<br>
<br><br>
<br>
<input type="submit" name="sign" value="sign up">
     
   
</form>
 </div>
 </body>
 </html>