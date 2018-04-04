<?php
include 'conn.php';
if(isset($_POST['submit']))
{
$a=$_POST["name"];
$b=$_POST["username"];
$c=$_POST["password"];
$z=SHA1($c);
$k=$_POST["repassword"];
$d=$_POST["gender"];
$e=$_POST["housename"];
$f=$_POST["district"];
$g=$_POST["city"];
$h=$_POST["pincode"];
$i=$_POST["email"];
$j=$_POST["phone"];
$p=$_POST["image"];
if($c!=$k)
{
	echo"not equal";
}
else
{


$sql2="select * from registration where username='$b'";
$result2=mysqli_query($con,$sql2);
if($res=mysqli_fetch_array($result2))
{
echo "<script> alert('Already Inserted')</script>;";
}
else
{
$sql="INSERT INTO `registration`(`name`, `username`, `password`, `gender`, `housename`, `district`, `city`, `pincode`, `email`, `mobno`,`photo`) VALUES ('$a','$b','$z','$d','$e','$f','$g','$h','$i','$j','$p')";
$result=mysqli_query($con,$sql);
echo "<script> alert('Successfully added')</script>;";
$sql1="INSERT INTO `login`(`username`, `password`, `status`, `usertype`) VALUES ('$b','$z','1','user')";
$result1=mysqli_query($con,$sql1);
//echo "successfully inserted";
}
}}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cake Delights | SignUp</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css"><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css"><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css"><![endif]-->
</head>
<body>
<div id="header">
  <div>
    <div>
      <div id="logo"> <a href="#"><img src="images/logo1.png" alt="" width="330"></a> </div>
      <div>
        <div> <a href="signup.php">My Account</a> <a href="#">Help</a> <a href="signin.php" class="last">Sign in</a> </div>
        
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
          <span><h2><center>SIGN-UP</center></h2></span>
          <table>
		  <form action="#" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table  border="0" align="center" width="400" height="700" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">
<tr class="spaceUnder"><td>NAME</TD><TD><INPUT TYPE="TEXT" NAME="name" id="name" class="oh-autoval av-username" av-message="Invalid name" required/></td></tr><br>
<tr class="spaceUnder"><td>USERNAME</TD><TD><INPUT TYPE="TEXT" NAME="username" id="uname" class="oh-autoval av-username" av-message="Invalid name" required/></td></tr>
<tr class="spaceUnder"><td>HOUSENAME</td><td><INPUT TYPE="TEXT" NAME="housename" id="house_name" ></td></tr>
<tr class="spaceUnder"><td>DISTRICT</td><td><input type="text" name="district" class="oh-autoval av-username" av-message="Invalid district,alphabets only" required/>
</td></tr>
<tr class="spaceUnder"><td>CITY</td><td><input type="text" name="city" class="oh-autoval av-username" av-message="enter alphabets" required/></td></tr>
<tr class="spaceUnder"><td>PINCODE</td><td><input type="text" name="pincode" id="pincode"  class="oh-autoval av-pincode" av-message="Invalid pincode,Pincode contain only 6 digits" required/>
</td></tr>
<tr class="spaceUnder"><td>EMAIL</td><td><input type="text" name="email" id="userid" class="oh-autoval av-email" av-message="Invalid email_id" required/></td></tr>
<tr class="spaceUnder"><td>MOB NO:</td><td><input type="text" name="phone" id="phone"></td></tr>
<tr class="spaceUnder"><td>GENDER</TD><td><FIELDSET style="background-color:grey;width:40%"><LEGEND></LEGEND><input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  
  </FIELDSET></td></tr>
  <tr class="spaceUnder"><td>IMAGE</td><td><input type="file" name="image" id="image">
</td></tr>
 <tr class="spaceUnder"><td>PASSWORD</TD><TD><INPUT TYPE="TEXT" NAME="password" id="password" class="oh-autoval av-password" av-message="Invalid Password,Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars."required /> </td></tr>
<tr class="spaceUnder"><td>RE-ENTER Password</TD><TD><INPUT TYPE="TEXT" NAME="repassword" class="oh-autoval av-password" av-message="Invalid Password,must contain uppercase,lowercase,special chars,digits and minimum 6 chars." required/> </td></tr>

<tr class="spaceUnder"><td><b><input type="submit" value="SIGN-UP" name="submit" width="100" color="black"></b></td></tr>

</table></form>
            
          </table>
		  
       
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
