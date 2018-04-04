<?php

include("dbconnection.php");
$obj=new DbConnection;
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$description=$_POST['description'];
   
    $cost=$_POST['cost'];
    $category=$_POST['category'];
	$quantity=$_POST['quantity'];
	
	if ($_FILES["photo"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["photo"]["error"] . "<br>";
	
    }
  else
    {
		
		$uploaddir = 'images/products/'; 
		
		
    $file = basename($_FILES['photo']['name']);

     if($_FILES['photo']['name']) {
      $file = preg_replace('/\s+/', '_', $file);
      $rand = rand(0000,9999);
	  

      if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) { 

        } else
		 {
            echo "error";
        }
 $image= 'images/products/'. $rand . $file;

	echo $image;
    }
		
  }
	
	
	
	/********** *************  file upload    ***************/
//vinu 
	
	
	$sql1="INSERT INTO `product`(`name`, `description`, `cost`, `category`,`quantity`,`image`) VALUES ('$name','$description','$cost','$category','$quantity','$image')";
	$exe=($obj->executeNonquery($sql1));
	    if($exe>0){
			$q="select max(pid) as id from  product";
			   $qq=($obj->executeQuery($q));
					   $row=mysqli_fetch_array($qq);
					   $s=$row["id"];
			
	    $sql="insert into productstatus (`pid`,`availability`,`status`) values ('$s','availiable','1')";
        $ee=($obj->executeNonquery($sql));
		if($ee)
		echo "<script> alert('Successfully added')</script>;";
		}
		else
		{
			echo "<script> alert('Error')</script>;";
			
		}
	 
}
?>


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
        <li  class="selected"><a href="addrecipe.php">Add Recipe</a></li>
        <li><a href="viewmark.php">View Marks</a></li>
        <li><a href="viewnotification.php">View Notifications</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li><a href="cartview.php">My Cart</a></li>
        <li><a href="viewproducts.php">View Products</a></li>
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
       
          <span><h2><center>Add Products</center></h2></span>
         
		  
		  <form action="#" name="addprofrm" class="oh-autoval-form" name="myForm" id="myForm" onsubmit="return" method="post" >
<table  border="0" align="center" width="400" height="200" style="color:#852349; background-color:#f7cade;font-family:cambri;font-size:128%;">
<tr><td>
                Name</td><td>
						<input type="text" name="name" required> </td></tr>
               
					    <tr><td>
						Description</td><td>
						<input type="text" name="description" required> </td></tr>
                       <tr><td>
                      
                        Cost</td><td>
						<input type="text" name="cost" required>  </td></tr>
                      
                       
 <tr><td>Select Category</td><td>
<select name="category">
<option value="">select category</option>
<?php
$sql="select * from category";
$execute=($obj->executeQuery($sql));
while($row=mysqli_fetch_array($execute)){
$id=$row["categoryid"];
$name=$row["categoryname"];
echo"<option value='$id'>$name</option>";

}
?>
</td></tr>
</select> <tr><td>
                      	Quantity</td><td>
						<input type="text" name="quantity" required></td></tr>
               <tr><td>         
Image 
</td><td>
<input type="file" name="ima" onChange="readthisURL"></td></tr>

<tr><td><center><input type="submit" name="submit" value="ADD"></center></td></tr>

</form>


</html>

