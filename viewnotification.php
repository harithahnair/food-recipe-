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
        <li class="selected"><a href="notification.php">Post Notifications</a></li>
        <li><a href="newchangepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="viewproducts.php">View Products</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/veg1.jpg" alt="" width="700"></a> </div>
  </div>
</div>
<div id="content">
  <div>
    <div id="account">
      <div>
        <form action="#">
          <span><h2><center>Notifications</center></h2></span>
          <table>
		  <form action="#" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >

<table align="center" border="1" width="300" height="100" style="color:black;font-family:Calibri Light (Headings);font-size:100%;">

<tr><td>Date</td><td><?php echo $date;?></td></tr>
<tr><td>Notification</td><td><?php echo $not?></td></tr>
</table>
</form>
</body>
</html>