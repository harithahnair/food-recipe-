<?php
include_once 'conn.php'; //database connection page
if(!isset($_SESSION["id"]))
{
	header('location:index.php');
}
else
{
$id=$_SESSION['id'];

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

<link rel="stylesheet" type="text/css" href="css/oh-autoval-style-1.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="js/oh-autoval-script-1.js"></script>

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
	  <li class="selected"><a href="userhome.php">My Home</a></li>
	     <li ><a href="editprofile.php">Edit Profile</a></li>
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

<div class="bb">
<div class="aa">


<center><h2>YOUR DETAILS</h2></center>

<br>
<form action="#" method="post" name="my">
<?php
 $sql="select * from registration where username='$id'"; //value querried from the table
	//echo $sql;
$res=mysqli_query($con,$sql);  //query executing function
	//echo '$res';
if($fetch=mysqli_fetch_array($res))
	{?>
		<table border="0" align="center" cellspacing="10" width="600" height="100" ><tr>
<td>NAME</TD><td>ADDRESS</TD><td>EMAIL</TD><td>CITY</TD><td>GENDER</TD><td>PHONE NO</TD><td>PINCODE</TD>
</TR>
<?php

$results= mysqli_query($con,"select * from registration where username='$id'");
$i=1;
while($row=mysqli_fetch_array($results))
{
	?>
	<tr>
	
	<td><?php echo $row['name'];?></td>

	<td><?php echo $row['housename'];?></td>
<td><?php echo $row['email'];?></td>
	
	
	<td><?php echo $row['city'];?></td>

	<td><?php echo $row['gender'];?></td>
<td><?php echo $row['mobno'];?></td>
	<td><?php echo $row['pincode'];?></td>

	
	</tr></table>
	  
	<?php
}

}

?></form>
</div>
</div>


</body>
</html><?php } ?>