<?php 
include 'conn.php';
if(isset($_POST['submit']))
{
	$a=$_POST["categoryname"];
		echo "<script> alert('Successfully added')</script>;";
	$sql="INSERT INTO `category`(`categoryname`) VALUES ('$a')";
	$result=mysqli_query($con,$sql) or die(mysqli_error($con));
}
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
        <li><a href="chefs.php">View Chefs</a></li>
        <li><a href="notification.php">Post Notifications</a></li>
       
        <li   class="selected"><a href="addcategory.php">Add Category</a></li>
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
       
          <span><h2><center>Add Category</center></h2></span>
          <table>
		  
		  <form action="#" name="addcatfrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<form name="myform" action="#" method="post">
  
   Category Name 
    <input type="text" name="categoryname" placeholder="category name" class="oh-autoval av-username" av-message="Invalid name"required><br>

<br><input type="submit" name="submit" value="ADD"><br>

</form>

</table>
</body>
</html>            
         