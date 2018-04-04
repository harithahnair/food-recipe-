<?php
include_once 'conn.php'; //database connection page
if(isset($_POST["submit"]))
{
	
	$username=$_POST["username"];   //username value from the form
	$password=SHA1($_POST["password"]);	//password value from the form
	//echo $username;
	$sql="select status,username from login where username='$username' and password ='$password'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function
	print_r($res);
	echo $password;
	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch['status']==1) // role means admin or user , for admin set to 0 and for user set to  
		{
	$_SESSION["id"]=$fetch['username'];// setting username as session variable 
	header("location:userhome.php");	//home page or the dashboard page to be redirected
	}
	else 
		if($fetch['status']==0) // role means admin or user , for admin set to 0 and for user set to  
		{
		$_SESSION["username"]=$username;	// setting username as session variable 
	header("location:newadminhome.php");	//home page or the dashboard page to be redirected
	}
		
}
}


	

?>
<!DOCTYPE html>
<html>
<head>
<title>Cake Delights | SignIn</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css"><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css"><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css"><![endif]-->

	
</head>
<body>
<div id="header">
  <div>
    <div>
      <div id="logo"> <a href="#"><img src="images/logo1.png" alt="" width="225px"></a> </div>
      <div>
        <div> <a href="signup.php">My Account</a> <a href="#">Help</a> <a href="signin.php" class="last">Sign in</a> </div>
        <form action="#">
          <input type="text" id="search" maxlength="30">
          <input type="submit" value="" id="searchbtn">
        </form>
      </div>
    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="product.html">A-Z Recipes</a></li>
      <li><a href="about.html">About us</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
    <div class="section"> <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt=""></a> </div>
  </div>
</div>
<div id="content">
  <div>
    <div id="account">
      <div>
        <form  name="loginfrm" class="oh-autoval-form" action="#" method="post">
          <span>SIGN-IN</span>
          <table>
            <tr>
              <td><label for="name">User Name</label></td>
              <td><input type="text" id="name" name="username" class="oh-autoval av-username" av-message="Invalid name" required></td>
            </tr>
            <tr>
              <td><label for="password">Password</label></td>
              <td><input type="password" id="password" name="password" class="oh-autoval av-password" av-message="Invalid Password" required /></td>
            </tr>
            
          </table>
		  

          <input type="submit" name="submit" value="Sign-In" class="submitbtn">
        </form>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="section">
    <div>
      <div class="aside">
        <div>
          <div> <b>Too <span>BUSY</span> to shop?</b> <a href="signin.html">Sign up for free</a>
            <p>and we'll deliver it on your doorstep</p>
          </div>
        </div>
      </div>
      <div class="connect"> <span>Follow Us</span>
        <ul>
          <li><a href="#" class="facebook">Facebook</a></li>
          <li><a href="#" class="twitter">Twitter</a></li>
          <li><a href="#" class="subscribe">Subscribe</a></li>
          <li><a href="#" class="flicker">Flicker</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="featured">
    <ul>
      <li class="first"> <a href="#"><img src="images/fruit-cake.jpg" alt=""></a>
        <h2><a href="#">Tips on how to preserve</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adispiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. <a href="#" class="readmore">read more</a></p>
      </li>
      <li> <a href="#"><img src="images/italian.jpg" alt=""></a>
        <h2><a href="#">Menu of the day: Italian</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adispiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. <a href="#" class="readmore">read more</a></p>
      </li>
      <li> <a href="#"><img src="images/fruit.jpg" alt=""></a>
        <h2><a href="#">Fruit menu for your diet</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adispiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. <a href="#" class="readmore">read more</a></p>
      </li>
      <li> <a href="#"><img src="images/desserts.jpg" alt=""></a>
        <h2><a href="#">Desserts for every occassion</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adispiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. <a href="#" class="readmore">read more</a></p>
      </li>
    </ul>
  </div>
  <div id="navigation">
    <div>
      <ul>
        <li class="first"><a href="#">help</a></li>
        <li><a href="#">about cake delight</a></li>
        <li><a href="#">cake delight talk</a></li>
        <li><a href="#">developers</a></li>
        <li><a href="#">privacy policy</a></li>
        <li><a href="#">terms of use</a></li>
      </ul>
      <p>Copyright &copy; 2012 <a href="#">Domain Name</a> All rights reserved | Website Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">freewebsitetemplates.com</a></p>
    </div>
  </div>
</div>
</body>
</html>
