<?php
include_once 'conn.php'; //database connection page
$id=$_SESSION['id'];
//echo "$id";


?>
<!DOCTYPE html>
<html>
<head>
<title>Cake Delights | SignIn</title>
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
      <div id="logo"> <a href="#"><img src="images/logo1.png" alt=""width="250px"></a> </div>
      <div>
        
      </div>
    </div>
    
    <div id="section">
      <ul>
	     <li class="selected"><a href="#">Edit Profile</a></li>
        <li><a href="addrecipe.php">Add Recipe</a></li>
        <li><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotif.php">View Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="view121.php">View Products</a></li>
		  <li><a href="viewchef.php">View Chefs</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/cake4.jpg" alt="" width="700"></a> </div>
  </div>
</div>
<form action="#" name="myForm" id="myForm" onsubmit="return" method="post" enctype="multipart/form-data" >
<?php 
$sql="select name from registration where username='$id'";

$result=mysqli_query($con,$sql);

$i=0;

?>
	
	
        <form id="form" method="post" action="#">
		<?php 
		$sql="select * from registration where username='$id'";

$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
?>
<table border="0" cellspacing="10" align="center" width="400" height="400" style="color:black;font-family:Calibri Light (Headings);font-size:130">

<tr class="spaceUnder"><td>NAME</TD><TD><INPUT TYPE="TEXT" NAME="name" id="name" class="oh-autoval av-username" av-message="Invalid name" required value="<?php echo $row['name']; ?>"></td></tr><br>

<tr class="spaceUnder"><td>HOUSENAME</td><td><INPUT TYPE="TEXT" NAME="housename" id="house_name" class="oh-autoval av-housename" av-message="Invalid name" required value="<?php echo $row['housename']; ?>"></td></tr>
<tr class="spaceUnder"><td>DISTRICT</td><td><input type="text" name="district" class="oh-autoval av-username" av-message="Invalid district,alphabets only" required value="<?php echo $row['district']; ?>">
</td></tr>
<tr class="spaceUnder"><td>CITY</td><td><input type="text" name="city" class="oh-autoval av-username" av-message="Invalid district,alphabets only" required value="<?php echo $row['city']; ?>">
</td></tr>
<tr class="spaceUnder"><td>PINCODE</td><td><input type="text" name="pincode" class="oh-autoval av-pincode" av-message="Invalid pincode,Pincode contain only 6 digits" required value="<?php echo $row['pincode']; ?>">
</td></tr>
<tr class="spaceUnder"><td>EMAIL</td><td><input type="text" name="email" id="userid" class="oh-autoval av-email" av-message="Invalid email_id" required value="<?php echo $row['email']; ?>"></td></tr>
<tr class="spaceUnder"><td>MOB NO:</td><td><input type="text" name="mobno" id="mobile" class="oh-autoval av-phone" av-message="Invalid phone number" required value="<?php echo $row['mobno']; ?>"></td></tr>

<tr class="spaceUnder"><td><input type="submit" value="EDIT" name="submit" onsubmit="return validate()" class="button button5"></td></tr>
</table></form>
<?php

if(isset($_POST['submit']))
{
//$b=$_POST['drop'];
$a=$_POST["name"];
$b=$_POST["housename"];
$c=$_POST["district"];
$e=$_POST["city"];
$h=$_POST["pincode"];
$i=$_POST["email"];
$h=$_POST["gender"];


$res=mysqli_query($con,"UPDATE `register` SET `name`='$a',`housename`='$b',`street`='$c',`pincode`='$e',`phoneno`='$h' WHERE username='$id'");

}?>

</body>
</html>
<?PHP } ?>