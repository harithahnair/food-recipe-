<?php
include 'conn.php';
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
	     <li class="selected"><a href="newadminhome.php">Admin Home</a></li>
        <li><a href="addproduct.php">Add Products</a></li>
        <li><a href="chefs.php">View Chefs</a></li>
        <li><a href="notification.php">Post Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="addcategory.php">Add Category</a></li>
        <li><a href="addproduct.php">Add Products</a></li>
		 <li><a href="addchef.php">Add Chefs</a></li>
		  
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/loli.jpg" alt="" width="700"></a> </div>
  </div>
</div>

      <div>
       
          <span><h2><center>View Recipe By Category</center></h2></span>
          <table>
		  
		  <form action="#" name="addrecipefrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table border="0" align="center" style="font-size:80%"><tr><td>CATEGORY</TD><td>

<form name="submit" method="post" action="#">
<select name="drop">
<option name="NON VEG">NON-VEG</option>
<option name="VEG">VEG</option>
<option name="DESSERT">DESSERTS</option></select><input type="submit" id="lognbtn" name="submit" value="VIEW" />
</form></td></tr>

<tr>
<?php
if(isset($_POST["submit"]))
{
$a=$_POST["drop"];
$sql="select * from addrecipe where category='$a'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function
	
if($fetch=mysqli_fetch_array($res))
	{?>
		<BR>
		<table border="0" align="center" cellspacing="10" width="100" height="50" ><tr>
<td>RECIPE ID</TD><td>NAME</TD><td>CATEGORY</TD><td>IMAGE</TD><td>USERNAME</TD><td></TD>
</TR>
<?php

$results= mysqli_query($con,"select * from addrecipe where category='$a'");
$i=1;
while($row=mysqli_fetch_array($results))
{
	?>
	<tr>
	<td><?php echo $row['recipeid'];?></td>
	
	<td><?php echo $row['recipename'];?></td>

	<td><?php echo $row['category'];?></td>

	<td><img src="<?php echo $row['image']; ?>"  alt="" width="50" height="50"></td>

	<td><?php echo $row['username'];?></td>
	<TD><a href="viewrec.php?id=<?php echo $row['recipeid']; ?>">VIEW RECIPE</a>
<TD><a href="mark.php?id=<?php echo $row['recipeid']; ?>">ENTER MARK</a>
	</tr></table>
	<?php
}

	}
}
?>
</form><div class="sis4"></div></h3></div></div>
<table><tr><td>


</BODY>
</html>
