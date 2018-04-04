<?php
 include_once "conn.php";


 
  //echo $usereid;
?>
<?php
if (isset($_GET['id']))
{
	$id1=$_REQUEST['id'];
	echo $id1;
	$results= mysqli_query($con,"select * from addrecipe");

//$row=mysqli_fetch_array($results)
while($row=mysqli_fetch_array($results))
{
	$w=$row['image'];
	$x=$row['recipename'];
	$y=$row['description'];
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
       
        <li><a href="addcategory.php">Add Category</a></li>
        <li  class="selected"><a href="addproduct.php">Add Products</a></li>
		<li><a href="addchef.php">Add Chefs</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/loli.jpg" alt="" width="700"></a> </div>
  </div>
</div>

       
          <span><h2><center>Recipe details</center></h2></span>
       
		  
		  <form action="#" name="recfrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table  border="1" align="center" width="600" height="400" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">
<td><center><font color="black">&nbsp;Image</font></center></td>
<td><center><font color="black">&nbsp;Recipe Name</font></center></td>
    <td><center><font color="black">&nbsp;Description</font></center></td>
    </tr>

<?php




	?>
	<tr>
	
	
	
	<td><img src="<?php echo $w; ?>"  alt="" width="50" height="50"></td>
	<td><?php echo $x;?></td>
	<td><?php echo $y;?></td>

	
<TD><a href="rate recipe">ENTER MARK</a></td>
	</tr></table>
	<?php



?>
</form><div class="sis4"></div></h3></div></div>
<table><tr><td>


</table>
</body>
 
</html>