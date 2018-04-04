<?php
include 'conn.php';
$c = date('Y-m-d');
   // echo $currentDateTime;
if(isset($_POST["submit"]))
{

//$b=$_POST["date"];
$a=$_POST["noti"];

$sql="INSERT INTO `notification`(  `notification`, `date`) VALUES ('$a','$c')";
$result=mysqli_query($con,$sql);
}
?>
<?php
    
?>
<?php
    
    
   
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
	    <li><a href="newadminhome.php">Admin Home</a></li>
        <li><a href="viewusers.php">View Users</a></li>

        <li  class="selected"><a href="notification.php">Post Notifications</a></li>
        
        <li><a href="addcategory.php">Add Category</a></li>
        <li><a href="addproduct.php">Add Products</a></li>
		<li><a href="addchef.php">Add Chefs</a></li>
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
       
          <span><h2><center>Post Notifications</center></h2></span>
          <table>
		  
		  <form action="#" name="notiffrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >
<table  border="0" align="center" width="400" height="200" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">

<tr><td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> Enter Notification</td><td><textarea name="noti" row="4"col="10"   required>Enter notification</textarea></td></tr>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit" value="Save" name="submit"/></td><td><a href="login.php"><input type="submit" value="Cancel" name="submit"/></a></td></tr>
</tr></table>
</td>
</tr>
</table>
</td>
</tr></table>
</body>
</html>