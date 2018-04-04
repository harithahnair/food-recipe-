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
	     <li><a href="editprofile.php">Edit Profile</a></li>
        <li><a href="addrecipe.php">Add Recipe</a></li>
        <li   class="selected"><a href="viewmark.php">View Marks</a></li>
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
       
          <span><h2><center>You Removed The Product From Cart . </center></h2></span>
          <table>

   
 <body>

    
    <div id="section">
      <ul


<?php
include("dbconnection.php");
$obj=new DbConnection;
if(isset($_GET['id']))
{
	$id=$_GET["id"];
	$sql="delete from cart where `cartid`='$id'";
	$exe=($obj->executeNonQuery($sql));
	if($exe){
		echo "succesfully remove items from your cart";
		
		}
		else{
			echo "unsucessfull";
		}
}
?>