<?php
include_once 'conn.php'; //database connection page
$id=$_SESSION['id'];
//echo "$id";

$result ="SELECT * FROM registration where username='$id'";
echo $result;
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['name'];
$Lname=$row3['housename'];
$Housename=$row3['district'];
$Place=$row3['city'];
$State=$row3['pincode'];
$Photo=$row3['email'];
$Phno=$row3['mobno'];
echo $Fname;
echo $Lname;
echo "jhgfc";
}
?>

<html>
<head>
<title>Green Valley</title>

</head>
<body>
<table>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 <font size=5 color="red"><b>WELCOME</b> <i> <?php echo $Fname ?></i></font>
 <img src="<?php echo $Photo ?>" width="50" height="40" alt="no image found"/>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="about.php">About</a></li>
 

<li><a href="change.php">Change Password</a>
 </li>
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>

<td> </td> <td></td>
<td>
<table width="400"  align="center" cellpadding="0">
<caption><b><font size="8"> My Profile</font></b></caption>
<tr>

</tr>
<form action="#" method="POST" name="f3">
  <tr>
    
    <tr><td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><input type="text" name="username"  value='<?php echo $Fname ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><input type="text" name="lastname"  value='<?php echo $Lname ?> '></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Housename:</div></td>
    <td valign="top"><input type="text" name="hname"  value='<?php echo $Housename ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Place: </div></td>
    <td valign="top"><input type="text" name="place"  value='<?php echo $Place ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Phno: </div></td>
    <td valign="top"><input type="text" name="phone"  value='<?php echo $Phno ?> '></td>
  </tr>
  <tr><td><center><input type="submit" name="submit"  value="EditProfile"></center></td></tr>
  <td> </td>
  </form>
  <?php
if(isset($_POST["submit"]))
{

$f=$_POST["name"];
$l=$_POST["housename"];
$p=$_POST["district"];
$u=$_POST["city"];

$h=$_POST["pincode"];
$i=$_POST["email"];
$j=$_POST["mobno"];

$res=mysqli_query($con,"UPDATE `registration` SET `name`='$f',`housename`='$l',`district`='$p',`city`='$u',`pincode`='$h' ,`email`='$i',`mobno`='$j' WHERE `username`='$id'");

?>
<script>
                    window.location="editpro.php";
                    alert("Updated Successfully ");
            </script>
			<?php
}
?>  
  </td></tr>
</table>
</table>
<footer><div class="footer">           <table  align="center" cellpadding="10px">               <tr>                   <td width="33%">                       <img src="icon6.png" alt="icon6" width="40px" height="40px"/>
                    </td>
                    <td width="33%">
                        <img src="icon7.png" alt="icon7" width="40px" height="40px"/> 
                    </td>
                    <td width="33%">
                        <img src="icon8.png" alt="icon8" width="40px" height="40px"/>
                    </td>
                </tr>
            </table>
            <i style="position:relative;top:20px;left:320px;">@2018 Amal Jyothi College of Engineering.All rights Reserved. Powered by Department of MCA 
 <a href="#main">Top</a></i>
        </div></footer> 

</body>
</html>