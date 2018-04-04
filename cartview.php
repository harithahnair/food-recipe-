 <?php
 include_once "conn.php";

$id=$_SESSION['id'];
 
  //echo $usereid;
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
	     <li><a href="editprofile.php">Edit Profile</a></li>
        <li><a href="addrecipe.php">Add Recipe</a></li>
        <li><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotif.php">View Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li   class="selected"><a href="cartview.php">My Cart</a></li>
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
       
          <span><h2><center>Your Cart Details</center></h2></span>
       
		  
		  <form action="#" name="cartfrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table  border="1" align="center" width="400" height="200" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">
<td><center><font color="black">&nbsp;Image</font></center></td>
<td><center><font color="black">&nbsp;Item name</font></center></td>
    <td><center><font color="black">&nbsp;Quantity</font></center></td>
    <td><center><font color="black">&nbsp;Cost</font></center></td>
    <td><center><font color="black">&nbsp;Total</font></center></td>
    <td><center><font color="black">&nbsp;Actions</font></center></td>
  </tr>
<?php
$total=0;
$results=mysqli_query($con,"select * from cart c,product p where c.pid=p.pid and username='$id'");
while($row=mysqli_fetch_array($results))
{
  $tot=$row['quantity1']*$row['cost'];
  $total+=$tot;
?>
<td><center><img src="<?php echo $row['image']?>" width="90px" height="75px"></center></td>
<td><center><?php echo $row['name']; ?></center></td>
<td><center><?php echo $row['quantity1']; ?></center></td>
<td><center><?php echo $row['cost']; ?></center></td>
<td><center><?php echo $tot ?></center></td>
<td><center><a href="deletecart.php?id=<?php echo $row['cartid'];?>">Remove</a></center></td>
</tr>
<?php } ?>
<tr><td colspan="4"><font color="black">&nbsp;<center>Total Amount</center></font></td>
  <center>  <td colspan="1"><font color="red"><center><?php echo $total; ?></center></td></tr>
  <table>
<tr> <td><button>
<a href="payment.php">Continue Shopping</a></button>

</td><td><button>
<a href="quantity.php">Back To Products</a></button></td></tr>
</table>
</table>
</body>
</html>