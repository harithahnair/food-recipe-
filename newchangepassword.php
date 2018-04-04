<!DOCTYPE html>
<html>
<head>
<title>Cake Delights | SignIn</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
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
        <li   class="selected"><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="view121.php">View Products</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/key.jpg" alt="" width="700"></a> </div>
  </div>
</div>
<div id="content">
  <div>
    <div id="account">
      <div>
        <form action="#">
          <span><h2><center>Password Settings</center></h2></span>
          <table>
		  
		  <form action="#" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table  border="0" align="center" width="400" height="200" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">
<tr class="spaceUnder"><td>ENTER YOUR USERNAME</TD><TD><INPUT TYPE="TEXT" NAME="username" class="oh-autoval av-username" av-message="Invalid name" required></td></tr><br>

<tr class="spaceUnder"><td>ENTER YOUR PASSWORD</TD><TD><INPUT TYPE="password" NAME="password" class="oh-autoval av-password" av-message="Invalid Password,Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." required></td></tr><br>
  <tr class="spaceUnder"><td>ENTER NEW PASSWORD</TD><TD><INPUT TYPE="password" NAME="newpassword"></td></tr>
<tr class="spaceUnder"><td>RE-ENTER PASSWORD</TD><TD><INPUT TYPE="password" NAME="repassword"></td></tr>

<tr class="spaceUnder"><td><input type="submit" value="Change" name="submit" onsubmit="return validate()" class="button button5"></td></tr>

</table></form>
</body>
</html>