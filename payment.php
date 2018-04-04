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
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="view121.php">View Products</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <a href="#"><img src="images/loli.jpg" alt="" width="700"></a> </div>
  </div>
</div>
<br><center>
<h1>Please do not refresh the page while Payment on Process</h1></center>

 
  
<form action="" method="post" enctype="multipart/form-data"> 
				 
				
               <div class="container">

                <table border="0" align="center" >
				<tr><td>
  PAY BY:
<input type="radio" name="r1" id="r1" value="Credit Card/Debit Card" required />Credit Card/Debit Card
<input type="radio" name="r1" id="r1" value="VISA" required />VISA
  <br>
<br>
   Select Bank&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="bank">
  <option value="State Bank Of India">State Bank Of India</option>
   <option value="State Bank Of Travancore">State Bank Of Travancore</option>
  <option value="Axis Bank">Axis Bank</option>
   <option value="Punjab National Bank">Punjab National Bank</option>
</select>
<br>
<br>
Card Holder
  <input type="text" name="holdername" placeholder="CARD HOLDER NAME" required />
    <br>
<br>
Validity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" name="validity"  required/>
<br>
<br>
ATM PIN&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" name="pin" placeholder="ATM PIN" required />
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<table align="center">
<tr>
<td>
<input type="submit" name="submit" value="MAKE PAYMENT" ><br>
</td>
</tr>
</table>
</div>
</form>
</html>