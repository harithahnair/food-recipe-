<?php
include 'conn.php'; //database connection page
//if(!isset($_SESSION["id"])) {
	//header('location:index.php');
//}
if(isset($_POST["submit"])) {
	//header('location:quantity.php');
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
	     <li><a href="#">Edit Profile</a></li>
        <li><a href="addrecipe.php">Add Recipe</a></li>
        <li><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotif.php">View Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li  class="selected"><a href="view121.php">View Products</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/cake4.jpg" alt="" width="700"></a> </div>
  </div>
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
    width: 180px;
	background-color:orange;
	height:290px;
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
	border-radius:13px;
	cursor: pointer;
}

</style> 
  
</head>

<body>
<form  action="#" method="post">	
<br />
<select name="opt" style="margin-left:17%">
<option>select category</option>
<?php
$qry1="SELECT * FROM `category`";
$res1=mysqli_query($con,$qry1);
$i=0;
while($ar1=mysqli_fetch_array($res1))
{
	
?>
<option><?php echo $ar1['categoryname']; ?></option>

  <br />
  
  <?php
  }
  ?>
  <input type="submit" name="submit">
  </form>
  </select>
<center>
<table><?php 
if(isset($_POST['submit']))
{
$sbc=$_POST['opt'];
//SELECT `categoryid`, `categoryname` FROM `category` WHERE
$qry2="SELECT `categoryid` FROM `category` WHERE `categoryname`='$sbc'";
$res2=mysqli_query($con,$qry2);
$ar2=mysqli_fetch_array($res2);
$f=$ar2['categoryid'];
$qry="select * from product WHERE `category`='$f'";

$res=mysqli_query($con,$qry);
$i=0;
while($ar=mysqli_fetch_array($res))
{
	$i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
?>
    	<td>
			<!-- <form action="book.php" method="post"> -->
        	<div class="img">
    				<span><img src="<?php echo $ar['image']?>" alt="Trolltunga Norway"></span>
  				<div class="desc">
    				<?php echo $ar['name']?>
                   
   					 <br><?php echo $ar['description']?>
   					 <br><?php echo $ar['cost']?><br>
					<input type="hidden" value="<?php echo $ar['pid']?>" name="pid" />
                   <a href="quantity.php?pid=<?php echo $ar['pid']; ?>" ><button type="submit" value="More Details1" name="submit" class="button1"/>More Details</button>
                   </a>
 				 </div>
			</div>
           <!-- </form> -->
		</td>
 <?php } 
 }
 else
 {
 
$query="select * from product";
$result=mysqli_query($con,$query);
$i=0;
while($array=mysqli_fetch_array($result))
{
	$i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
?>
    	<td>
			<!-- <form action="petdetails.php" method="post"> -->
        	<div class="img">
    				<span><img src="<?php echo $array['image']?>" alt="Trolltunga Norway"></span>
  				<div class="desc">
    				<?php echo $array['name']?>
                   
   					 <br><?php echo $array['description']?>
   					 <br><?php echo $array['cost']?><br>
					<input type="hidden" value="<?php echo $array['pid']?>" name="pid" />
                    <a href="quantity.php?pid=<?php echo $array['pid']; ?>" ><button type="submit" value="More Details" name="submit" class="button1"/>More Details</button></a>
 				 </div>
			</div>
         <!--  </form> -->
		</td>
 <?php } 
 }
 ?>
 </table>
 </center>
</body>
</html>