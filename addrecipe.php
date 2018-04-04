<?php
include 'conn.php';
$id=$_SESSION['id'];
if(isset($_POST['submit']))
{
//$a=$_POST["recipeid"];
$b=$_POST["name"];
$c=$_POST["type"];
$image= $_POST["image"];
$d=$_POST["description"];
$sql="INSERT INTO `addrecipe`(`recipename`, `category`, `image`, `description`,`username`) VALUES  ('$b','$c','$image','$d','$id')";
echo "<script> alert('Successfully added')</script>;";
$result=mysqli_query($con,$sql);
//echo "successfully inserted";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cake Delights | SignIn</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css"><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css"><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css"><![endif]-->
</head>

   
 <body>
<div id="header">
  <div>
    <div>
      <div id="logo"> <a href="#"><img src="images/logo1.png" alt=""width="250px"></a> </div>
      <div>
        
      </div>
    </div>
    
    <div id="section">
      <ul>
	     <li><a href="editpro.php">Edit Profile</a></li>
        <li  class="selected"><a href="addrecipe.php">Add Recipe</a></li>
        <li><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotif.php">View Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="view121.php">View Products</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/loli.jpg" alt="" width="700"></a> </div>
  </div>
</div>
<div id="content">
  <div>
    <div id="account">
      <div>
       
          <span><h2><center>ADD RECIPE</center></h2></span>
          <table>
		  
		  <form action="#" name="addrecipefrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table  border="0" align="center" width="400" height="200" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">
<tr class="spaceUnder"><td>CATEGORY</td><td><select name="type">
  <option value="VEG">VEG</option>
  <option value="NON-VEG">NON VEG</option>
  <option value="CATEG">DESSERTS</option></td></tr>
<tr class="spaceUnder"><td>NAME</TD><TD><INPUT TYPE="TEXT" NAME="name" id="name" class="oh-autoval av-username" av-message="Invalid name"required /></td></tr>


<tr class="spaceUnder"><td>IMAGE</td><td><input type="file" name="image" required>
</td></tr>
<tr class="spaceUnder"><td>DESCRIPTION</td><td><input type="textarea" name="description" required>
</td></tr>

<tr class="spaceUnder"><td><b><input type="submit" value="ADD" name="submit" width="100"color="black"></b></td></tr>

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