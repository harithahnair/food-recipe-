<?php
include_once 'conn.php'; //database connection page
$id=$_SESSION['id'];
//echo "$id";


?><!DOCTYPE html>
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
	     <li><a href="editprofile.php">Edit Profile</a></li>
        <li><a href="addrecipe.php">Add Recipe</a></li>
        <li   class="selected"><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotif.php">View Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="view121.php">View Products</a></li>
				<li><a href="viewchef.php">View Chefs</a></li>
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
       
          <span><h2><center>Your Score</center></h2></span>
          <table>
		  <?php
//echo "$id";
$results= mysqli_query($con,"select * from mark where username='$id'");
$i=1;
while($row=mysqli_fetch_array($results))
{
	$username=$row['username'];
	//$id1=$row['recipeid'];
	$r=$ow['marks'];
}


?>
		  <form action="#" name="addrecipefrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table  border="0" align="center" width="400" height="100" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">
<tr><td>USERNAME</td><td><?php echo $id;?></td></tr>
<tr><td>MARKS</td><td><?php echo $r;?></td></tr>
</table>
<?php

if($r<=175)
{
	echo " SORRY.. YOU ARE NOT SELECTED . Your Score is Below 175";
}
else
{
	echo "CONGRATULATIONS!! YOU ARE SELECTED FOR NEXT ROUND";
}
?>

</table>
</body>
</html>

