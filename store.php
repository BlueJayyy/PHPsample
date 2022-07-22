<?php session_start();
if(isset($_SESSION['userretrieved']) && $_SESSION['passwordretrieved'] != "") {
  echo '<h1>Welcome to the store, '.$_SESSION['userretrieved'].'</h1>';
  echo '<h2><a href="logout.php">Log out</a></h2>';
} else { 
  header('location:login.php');
}

include "databaseconfig.php";
?>

<html>

<head>

<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Store"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<title> Store </title>

</head>

<body>
<?php include "menu.php"?>
<?php include "secmenu.php"?>

<?php 

function donothing() {
	;
}

if ($_SESSION['userretrieved'] == "admin" && $_SESSION['passwordretrieved'] == "admin") {
	echo "<h1> hello admin! use this form to edit and delete the content of the store page. <h1>";
	echo "<form action='edithandleradmin.php' Method='post'>
	
	<h1><span style='color:#FF0000'> NOTE: to delete an entire product, simply select a product from the drop-down list and hit submit.</span></h1>
	
	<h1><label for='select'>Select the product being edited.</label><h1>
    <select name ='product' id='product'>
	<option value = 'Select'>Select</option>  
	<option value = '2'>Test product 1</option> 
	<option value = '6'>Comprehensive Website Building</option> 
	<option value = '7'>Cybersecurity Management Services</option> 
	<option value = '8'>Database Management Services</option> 
	<option value = '9'>Database Services</option> 
	<option value = '10'>Software Development</option> 
	<option value = '11'>E-Commerce Management</option> 
	<option value = '12'>Social Media Management</option> 
	<option value = '13'>Sales Consulting Package</option> 
	<option value = '14'>Staffing Management</option> 
	<option value = '15'>Hardware Installation Assistance</option> 
	</select>
	
	
	<h1><label for='select'>Select the content you wish to edit. <br> For all content uploads, upload your file to the public_html folder first, then simply put in the file name.</label><h1>
    <select name ='subject' id='subject'>
	<option value ='Select'>Select</option> 
	<option value ='name'>Product Title</option> 
	<option value ='price'>Product Price</option> 
	<option value ='description'>Product Description</option> 
	<option value ='image'>Product Image</option>
	</select>
	
	<br>
	<h1><label for='content'>Please type the content you would like in the selected area. (Remember to include HTML!) <br> <span style='color:#FF0000'> IMPORTANT NOTE: If you are deleting the selected item, leave this text box blank.</span></label></h1>
	<textarea name='subjectedited' id='subjectedited' rows = '6' cols='100'></textarea>
	<br>
	<h1>  Would you like to delete a user? If so, please enter their username OR user ID below. (if you cannot access the database for any reason, use userID number 32)</h1>
	<input type='text' name='deleteuser' id='deleteuser'>
	<br>
	<h1><label for='newcontent'>Adding a product? Do so below in the following format:<br> 'Product Name', 'Description'(you can include html here!), Price, Maximum Quantity, 'Product image' Be sure not to forget the single quotes!</label></h1>
	<textarea name='newcontent' id='newcontent' rows = '6' cols='100'></textarea>
	<br>
	<input type='submit' name='submitedit' id='submitedit' value='Submit Edit'>
	</form>
	<br> <h1> All successful queries redirect to the same page, so make sure to look and make sure your query went through on this page!</h1>";
}
elseif ($_SESSION['userretrieved'] == "publisher" && $_SESSION['passwordretrieved'] == "publisher") {
	echo "<h1> hello publisher! use this form to edit the content of the store page. <h1>";
	echo "<form action='edithandlerpublisher.php' Method='post'> 
	<h1><label for='select'>Select the content you wish to edit. <br> For all content uploads, upload your file to the public_html folder first, then simply put in the file name.</label><h1>
    <select name ='subject' id='subject'>
	<option value = 'Select'>Select</option> 
	<option value = 'name'>Product Title</option> 
	<option value = 'price'>Product Price</option> 
	<option value = 'description'>Product Description</option> 
	<option value ='image'>Product Image</option>
	</select>
	<br>
	<h1><label for='select'>Select the product being edited.</label><h1>
    <select name ='product' id='product'>
	<option value = 'Select'>Select</option> 
	<option value = '2'>Test product 1</option> 
	<option value = '6'>Comprehensive Website Building</option> 
	<option value = '7'>Cybersecurity Management Services</option> 
	<option value = '8'>Database Management Services</option> 
	<option value = '9'>Database Services</option> 
	<option value = '10'>Software Development</option> 
	<option value = '11'>E-Commerce Management</option> 
	<option value = '12'>Social Media Management</option> 
	<option value = '13'>Sales Consulting Package</option> 
	<option value = '14'>Staffing Management</option> 
	<option value = '15'>Hardware Installation Assistance</option> 
	</select>
	<br>
	<h1><label for='content'>Please type the content you would like in the selected area. (Remember to include HTML!)</label></h1>
	<textarea name='subjectedited' id='subjectedited' rows = '6' cols='100'></textarea>
	<br>
	<h1><label for='newcontent'>Adding a product? Do so below in the following format:<br> 'Product Name', 'Description'(you can include html here!), Price, Maximum Quantity, 'Product image' Be sure not to forget the single quotes!</label></h1>
	<textarea name='newcontent' id='newcontent' rows = '6' cols='100'></textarea>
	<br>
	<input type='submit' name='submit' id='submit' value='Submit'>
	</form>
	<br> <h1> All successful queries redirect to the same page, so make sure to look and make sure your query went through on this page!</h1>";
}
else {donothing();}
?>




<?php
$Prodperpage = 5;
$Currentpage = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
$stmt = $db->prepare('SELECT * FROM `products` ORDER BY `ProductID` ASC LIMIT ?,?');
$stmt->bindValue(1, ($Currentpage - 1) * $Prodperpage, PDO::PARAM_INT);
$stmt->bindValue(2, $Prodperpage, PDO::PARAM_INT); 
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<? $Totalproducts = $db->query('SELECT * FROM products')->rowCount();?>

   <h1> Here are our products. Please, peruse at your leisure!</h1>
   
   <?php foreach ($products as $product): ?>
    <a href="product.php?page=product&id=<?=$product['ProductID']?>">
	<figure>
    <img src="<?=$product['image']?>" width = "200px" height = "200px" alt="<?=$product['name']?>">
    <figcaption = "products"><?=$product['name']?></figcaption>
    <figcaption><?=$product['price']?></figcaption>
	</figure>
    </a>
<?php endforeach; ?>
<center>
<?php if ($Currentpage > 1): ?>
<button><a href="store.php?page=products&p=<?=$Currentpage-1?>">Previous Page</a></button>
<?php endif; ?>
<?php if ($Totalproducts > ($Currentpage * $Prodperpage) - $Prodperpage + count($products)): ?>
<button><a href="store.php?page=products&p=<?=$Currentpage+1?>">Next Page</a></button>
<?php endif; ?>
</center>

<footer> 
<?php include "footer.php"?>
</footer>
</body>


</html>