<?php
include 'conn.php';
$id=$_SESSION['id'];
//echo $id;
?>

<!DOCTYPE html>
<html>
<head>
<title>Cake Delights | SignIn</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
.select{
	width:160px;
	height:20px;
	background-color:#333;
	 display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	border-radius:13px;
}


div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
	background-color:orange;
	height:390px;
	border-radius:13px 13px 13px 13px;
}
div.img:hover span:after {
  position: relative;
  opacity: 0;
  top: 0;
  left:980px;
  transition: 0.5s;
}



div.img:hover span{
    border: 1px solid #777;
	padding-right: 0px;
}

div.img:hover span:after{
  opacity: 1;
  right: 0;
}

div.img img {
    height:200px;
	width:190px;
}

div.desc {
    padding: 15px;
    text-align: center;
	font-family:Benguiat Bk BT;
}
.button1 {	width:100px;
	background-color:#33FF99;
	border-radius:60px;
	cursor: pointer;
}

</style>
</head>


</style>

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
        <li  class="selected"><a href="addrecipe.php">Add Recipe</a></li>
        <li><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotification.php">View Notifications</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="viewproducts.php?id=<?php echo $row['id']?>">View Products</a></li>
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
       
          <span><h2><center>Product Quantity </center></h2></span>
          <table>
		  
		

    

<?php
								$a=$_GET['pid'];
								$result=mysqli_query($con,"select * from product where pid='$a'");
								$row=mysqli_fetch_array($result);
								 ?>
<div style="border:0">

  <table width="900" height="40" style="border:0" >
    <tr>
      <td width="524" style="border:0">
	  
<img src="<?php echo $row['image']?>" width="280px" height="350px" style=" border-radius:30px;">
<p>&nbsp;</p>
	  </td>
      <td width="271" style="border:0"> 
      <div class="img" style="border:0">
      <table style="border:0"	>
     <br><br>	<br><br>	
    			<tr >
				<div class="desc">
        <td style="border:0"> Prod name: </td>
        <td style="border:0"> <?php echo $row['name']?> </td>
        </tr>
		<?php
								$a=$_GET['pid'];
								$result11=mysqli_query($con,"SELECT * FROM `rating` WHERE recipeid='$a'");
								$row11=mysqli_fetch_array($result11);
								 
		$r=$row11['rat'];
		//echo $r;
		?>
		<!--<tr><td style="border:0"> <?php echo $row11['rat']?> </td></tr>-->
		<?php
		?>
<td style="border:0"> Rate:</td><td><?php echo $row11['rat']?><br></td></tr><br>
	
	<!--<img src="star.png" height="1px" width="1px"></img>
	<img src="star.png" height="1px" width="10px"></img>
	
	<img src="star.png" height="1px" width="1px"></img>
	<img src="star.png" height="1px" width="1px"></img>
	<img src="star.png" height="1px" width="1px"></img></tr>-->
<?php
?>
		
		
					<tr >
        <td style="border:0"> Description: </td>
        <td style="border:0"> <?php echo $row['description']?><br></td></tr><br>
		<tr >
        <td style="border:0"> Price: </td>
        <td style="border:0"> <?php echo $row['cost']?><br></td></tr><br>
		
		
		</div>
        </div>
          
        
   
      <?php //echo "$a";

if(isset($_POST['submit1']))
{
 $quantity=$_POST["quantity1"];
  //echo "$quantity";
//echo "$id";
$q=$row['quantity'];
//echo $q;
if($q>$quantity)
{
$sql="INSERT INTO `cart`(`username`, `pid`, `quantity1`) VALUES ('$id','$a',$quantity)";
?>
<script>alert("successfully added to cart")</script>
<?php
//echo $sql;

$result=mysqli_query($con,$sql) or die(mysqli_error($con));

$sql11="UPDATE `product` SET `quantity`=$q-$quantity WHERE pid=$a";
$result11=mysqli_query($con,$sql11) or die(mysqli_error($con));

}
else
{
	?>
<script>alert("Sorry ! The Requested Quantity Not available")</script>	
<?php
}
}
?>
<form action="#" method="post"><tr>

<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
<tr>
<td style=" color:black;font-size:40px;">

  <label class="control-label">Quantity</label></td>
  <td>  <select name="quantity1">
    <option value="">--select--</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select></td></tr>
	<tr>

	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
<tr><td>

	<input type="submit" value="Add To Cart" name="submit1" class="button1"/>
  <input type="hidden" value="<?php echo $row['pid']?>" name="pid" />
</td></tr>
<br>
<tr><td><a href="cartview.php">View Your Cart Now</td>
<td><a href="rating.php?id=<?php echo $row['pid']?>">Rate This Product</tr>

 </table><center>
      
    </tr>
  </table>
  </div>
<?php 
	//}
	?>
			</div> 
</div>
</div>
</div>			
</center>
</figure>
<main class="hoc container clear"> 
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>