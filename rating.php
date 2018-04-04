<?php
include 'conn.php';

$rid2=$_SESSION["id"];
//header("location:index.php");
//}
?>
<?php
$id=$_GET['id'];
//echo $id;
//$id=$_REQUEST['restid'];
//$rid2=$_SESSION["rid"];
//INSERT INTO `feedback`(`fid`, `regid`, `restid`, `rat`, `msg`, `status`) VALUES 
if(isset($_POST['sub']))
{
$msg=$_POST["msg"];
$rate=$_POST["rate"];
$sql12="INSERT INTO `rating`(`username`, `recipeid`, `rat`, `msg`,`status`) VALUES  ('$rid2','$id','$rate','$msg',0)";
$result=mysqli_query($con,$sql12);
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
	     <li><a href="editprofile.php">Edit Profile</a></li>
        <li><a href="addrecipe.php">Add Recipe</a></li>
        <li   class="selected"><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotif.php">View Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="view121.php">View Products</a></li>
				<li><a href="viewchef.php">View Chefs</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/loli.jpg" alt="" width="700"></a> </div>
  </div>
</div>

<?php


//SELECT `fid`, `regid`, `rat`, `msg`, `status` FROM `feedback` WHERE
$sql1="SELECT * FROM `rating`  where `recipeid`='$id'"; //value querried from the table
	$res1=mysqli_query($con,$sql1);  //query executing function
	$cnt=0;
	while($fetch1=mysqli_fetch_array($res1))
	{
$cnt=$cnt+1;
$rid=$fetch1['username'];
// $rid;
$sql2="SELECT * FROM `registration` WHERE `username`='$rid'"; //value querried from the table
$res2=mysqli_query($con,$sql2);  //query executing function
$fetch2=mysqli_fetch_array($res2);

$sql3="SELECT * FROM `product` WHERE `pid`='$id'"; //value querried from the table
$res3=mysqli_query($con,$sql3);  //query executing function
$fetch3=mysqli_fetch_array($res3);
$rname=$fetch3['name'];
if($cnt==4)
{
	break;
}

?>
<div style="width:60%; height:20%; margin-left:20%; margin-top:2%;">
<input type="textarea" value="<?php echo $fetch1['msg'] ?>" disabled style="color:green; border:none; background-color:white; width:60%; height:50%;"></br>

<?php
for($i=0;$i<$fetch1['rat'];$i++)
{
?>
<img src="Star.png" width=15 height=15></img>
<?php
}
?>
<input type="text" value="<?php echo $fetch2['name'] ?>" disabled style=" margin-left:83%; margin-top:-3%;color:red; font-size:150%; border:none; background-color:white;"></br>


</div>
<?php
	}
?>
 

<input type="textarea" placeholder="Enter your comments" name="msg" id="msg" value=""style="border-radius:5px; margin-left:80%; height:10%;"><br/><br/>
<select name="rate" class="form-control" style="margin-left:80%; border-radius:5px;">
							<option style="color:red;" value=5>excellent</option>
							<option style="color:red;" value=4>very good</option>
							<option style="color:red;" value=3>good</option>
							<option style="color:red;" value=2>fair</option>						
							<option style="color:red;" value=1>poor</option>
				        </select></br></br>
  <input type='submit' value='Send' name="sub" style="border-radius:5px; margin-left:80%;">
  <a href="view121.php">Go Back</a>
  </form>
	<!--<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
-->
</div>
</body>
</html>
