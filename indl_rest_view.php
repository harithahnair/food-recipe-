<?php
include 'conn.php';
SESSION_start();
if(!(isset($_SESSION["username"]))){
	header("location:index.php");
}



//$id=$_REQUEST['recipeid'];
$id=$_REQUEST['recipeid'];
$_SESSION['recipeid']=$id;
$pk = $_SESSION['recipeid'];

//echo $pk;  
//echo $id;

$sq = "select count(`rat`) AS num,sum(`rat`) AS sm from `feedback` where `restid`='$pk' ";
$result = $con->query($sq);
$row = $result->fetch_assoc();
$c=$row["num"];
$s=$row["sm"];
$v= $s/$c;


$usr=$_SESSION['usernm'];
$q = "SELECT  `regid` FROM `login` WHERE `usernm`='$usr' ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["regid"];





if(isset($_POST['gt']))
{
$c=$_POST["coments"];

$sql7="INSERT INTO `comment`( `restid`, `regid`, `coments`) VALUES
 ('$id','$rid','$c')";
$result=mysqli_query($con,$sql7);
}



 ?>
 <?php
$id=$_REQUEST['restid'];
//$rid2=$_SESSION["rid"];
//INSERT INTO `feedback`(`fid`, `regid`, `restid`, `rat`, `msg`, `status`) VALUES 
if(isset($_POST['sub']))
{
$msg=$_POST["msg"];
$rate=$_POST["rate"];
$sql12="INSERT INTO `feedback`(`regid`, `restid`, `rat`, `msg`, `status`) VALUES ('$rid2', '$id','$rate','$msg','0')";
$result=mysqli_query($con,$sql12);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : CrossWalk
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140216

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style>
div.nw
{
	float:right;
	margin-top:-250px;
	margin-right:50px;
}
</style>
</head>
<body>
<div id="wrapper">
	<div id="header" class="container">
<h1><div align="center"><font-color="">RESTURANT DETAILS</div></h1>
		<div id="menu">
		
			<ul>
				<li  class="current_page_item"><a href="indl_rest_view.php" accesskey="2" title="">MORE</a></li>
				<li><a href="user.php" accesskey="1" title="">HOMEPAGE</a></li>


			</ul>
		</div>
</div>
<br/><br/>
<!--<h1><div align="center"><font-color=""><marquee>Get Me More More And Choose Your Best Day Make Happy<br/></marquee></div></h1>-->

<!--<table style="border-collapse: collapse; text-align: center; width: 500px;  border: 3px solid blue;">-->
		<?php
		$results=mysqli_query($con,"SELECT `restid`, `restnm`, `locs`, `restimg`, `cont`, `mapimg`
			 FROM `resturant` WHERE `restid`=$id;");
while($row=mysqli_fetch_array($results))

{

?>

<tr><td><img src="images/<?php echo $row['restimg'];?>" alt=" " height="300"  disabled  style="border:none; background-color:white; margin-left:15%;"width="600"></td></tr><br/><br/>

<!--<tr><td><input name="dist" type="text" value="<?php //echo $row['discripition']; ?>"/></td></tr>-->
<br>
<div class="nw" >
<tr><td><input name="unme" type="text" value="<?php echo $row['restnm']; ?>" disabled  style="border:none; background-color:white;font-size:30px;font-family:arial black;  "/></td></tr><br/>
<tr><td><input name="unme" type="text" value="<?php echo $row['locs']; ?>" disabled  style="border:none; background-color:white;font-family:arial black;margin-left:30px;font-size:20px; "/></td></tr><br/>
<tr><td><input name="unme" type="text" value="<?php echo $row['cont']; ?>" disabled  style="border:none; background-color:white;font-family:arial black;margin-left:35px; "/></td></tr><br/><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php
}
//echo $v;
if($v==5)
		
{?>
<img src="images/Star.jpg"  style="height:30px;"></img>
<img src="images/Star.jpg" style="height:30px;"></img>
<img src="images/Star.jpg" style="height:30px;"></img>
<img src="images/Star.jpg" style="height:30px;"></img>
<img src="images/Star.jpg" style="height:30px;"></img>

	<?php
}
elseif($v==4)
{
	?><img src="images/Star.jpg"  style="height:30px;"></img>
	<img src="images/Star.jpg" style="height:30px;"></img></img>
	<img src="images/Star.jpg" style="height:30px;"></img>
	<img src="images/Star.jpg" style="height:30px;"></img>

	<?php
}
elseif($v=3)
{
?><img src="images/Star.jpg"  style="height:30px;"></img>
	<img src="images/Star.jpg" style="height:30px;"></img></img>
	<img src="images/Star.jpg" style="height:30px;"></img>
	<?php
}
	
elseif($v=2)
{
?><img src="images/Star.jpg" style="height:30px;"></img>
	<img src="images/Star.jpg" style="height:30px;"></img></img>
<?php	
}
else{
	?><img src="images/Star.jpg" style="height:30px;"></img>
	
<?php
}

?>
</div>
<tr><td><br></td></tr>

</td>
</tr>
<!--</table> </center><br/><br/><form id="form1" name="form2" method="post" action="#" >
<center>
<input type="text" name="coments"  placeholder="enter your comments about food on resturants"  cols="45" rows="5" required /></td>
<input type="submit" name="gt" value="send"><br><br>
</center></form>
&nbsp&nbsp&nbsp&nbsp&nbsp
<h3><font-color=""><center>VIEW COMMENTS</center></h3>
<center>
<!---<table style="border-collapse: collapse; text-align: center; width: 500px;  border: 3px solid blue;">-->
		
<tr><td><br></td></tr>

</td>
</tr>
</table>

</div>
<center><table style="border-collapse: none; text-align: center; width: 300px;">

</table></center>

<?php


//SELECT `fid`, `regid`, `rat`, `msg`, `status` FROM `feedback` WHERE
$sql1="SELECT * FROM `feedback`  where `restid`='$id'"; //value querried from the table
	$res1=mysqli_query($con,$sql1);  //query executing function
	$cnt=0;
	while($fetch1=mysqli_fetch_array($res1))
	{
$cnt=$cnt+1;
$rid=$fetch1['regid'];
$sql2="SELECT * FROM `register` WHERE `regid`='$rid'"; //value querried from the table
$res2=mysqli_query($con,$sql2);  //query executing function
$fetch2=mysqli_fetch_array($res2);

$sql3="SELECT * FROM `resturant` WHERE `restid`='$id'"; //value querried from the table
$res3=mysqli_query($con,$sql3);  //query executing function
$fetch3=mysqli_fetch_array($res3);
$rname=$fetch3['restnm'];
if($cnt==4)
{
	break;
}

?>
<div style="width:60%; height:20%; margin-left:20%; margin-top:2%;">
<input type="textarea" value="<?php echo $fetch1['msg'] ?>" disabled style="color:green; border:none; background-color:white; width:60%; height:50%;"></br>
<!--<input type="text" value="<?php echo $rname; ?>" disabled style="color:red; font-size:150%; border:none; background-color:white;"></br>-->
<?php
for($i=0;$i<$fetch1['rat'];$i++)
{
?>
<img src="images/Star.jpg" width=15 height=15></img>
<?php
}
?>
<br>
<img src="<?php echo $fetch2['primg'] ?>" width=100 height=100 style="margin-left:80%; margin-top:-17%; border-radius:50%;"></img><br>
<input type="text" value="<?php echo $fetch2['fname'] ?>" disabled style=" margin-left:670px; margin-top:-600px;color:red; font-size:150%; border:none; background-color:white;">


</div>
<?php
	}
?>
 <br><br>
<div id="copyright" style="background-color: #990066;">
 <form name="rating" action="#" method="post"id="form1">
<h2>RATE YOUR RESTAURT</h2><br/>
<input type="textarea" placeholder="Enter your comments" name="msg" id="msg" value=""style="border-radius:5px; margin-left:80%; height:10%;"><br/><br/>
<select name="rate" class="form-control" style="margin-left:80%; border-radius:5px;">
							<option style="color:red;" value=5>excellent</option>
							<option style="color:red;" value=4>very good</option>
							<option style="color:red;" value=3>good</option>
							<option style="color:red;" value=2>fair</option>						
							<option style="color:red;" value=1>poor</option>
				        </select></br></br>
  <input type='submit' value='Send' name="sub" style="border-radius:5px; margin-left:80%;">
  </form>
</body>
</html>
