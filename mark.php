<?php 
include 'conn.php';

//$id=$_GET['id'];
//echo $id;
if (isset($_GET['id']))
{
	$id1=$_REQUEST['id'];
	echo $id1;
	$results= mysqli_query($con,"select username from addrecipe where recipeid='$id1'");

//$row=mysqli_fetch_array($results)
while($row=mysqli_fetch_array($results))
{
	$w=$row['username'];
}
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
	    <li><a href="newadminhome.php">Admin Home</a></li>
        <li><a href="viewusers.php">View Users</a></li>

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
<div id="content">
  <div>
    <div id="account">
      <div>
       
          <span><h2><center>Enter Marks</center></h2></span>
          <table>
		  
		  <form action="#" name="markfrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table  border="0" align="center" width="500" height="200" style="color:black;font-family:Calibri Light (Headings);font-size:120%;">


<?php 

	?>


<tr>
<td>USERNAME</td><td><input type="text" name="username" value="<?php echo $w; ?>"></td></tr>
<tr>
<td>TIME MANAGEMENT</td><td><select name="drop1">
<option name=10>10</option>
<option name=20>20</option>
<option name=30>30</option>
<option name=40>40</option>
<option name=50>50</option></select></td></tr>
<td>PERFECTION<td><select name="drop2">
<option name=10>10</option>
<option name=20>20</option>
<option name=30>30</option>
<option name=40>40</option>
<option name=50>50</option></select></td></tr>
<td>TASTE</td><td><select name="drop3">
<option name=10>10</option>
<option name=20>20</option>
<option name=30>30</option>
<option name=40>40</option>
<option name=50>50</option></select></td></tr>
<td>CLEANLINESS</td><td><select name="drop4">
<option name=10>10</option>
<option name=20>20</option>
<option name=30>30</option>
<option name=40>40</option>
<option name=50>50</option></select></td></tr>
<tr><td>

<input type="submit" id="button" value="ENTER" name="submit"></td>
<td><a href="newadminhome.php">Back</td></tr>
</table>

<?php
if(isset($_POST['submit']))
{//echo "sd"
	$a=$_POST['drop1'];
	$b=$_POST['drop2'];
	$c=$_POST['drop3'];
	$d=$_POST['drop4'];

	$s=(int)$a;
	$t=(int)$b;
	$u=(int)$c;
	$v=(int)$d;
	
	$r=$a+$b+$c+$d;
	//echo $r;
	

$results= mysqli_query($con,"select * from addrecipe ");

while($row=mysqli_fetch_array($results))
{
	$username=$row['username'];
	$id1=$row['recipeid'];
}
$sql1="INSERT INTO `mark`(`recipeid`, `username`, `marks`,`status`) VALUES ('$id1','$w','$r','1')";

$res1=mysqli_query($con,$sql1);
echo "<script> alert('Successfully added')</script>;";
}

?>
</table></form>
            
          </table>
		  
        
    