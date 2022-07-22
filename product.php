<?php Session_start();?>
<?php include "databaseconfig.php";?>
<?php function donothing(){
	;
}
if (isset($_GET['id'])) {
    $stmt = $db->prepare('SELECT * FROM `products` WHERE `ProductID` = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        exit('Error: Product does not exist!');
    }
}  else { header ('Location: cart.php');
exit();
}
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


<img src="<?=$product['image']?>" width="500" height="500" alt="<?=$product['name']?>">
   
<h1><?=$product['name']?></h1>

<p><?=$product['price']?></p>
       
<form action="cart.php" method="post">
<input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
<input type="hidden" name="ProductID" value="<?=$product['ProductID']?>">
<br><input type="submit" value="Add To Cart">
</form>
<p><?=$product['description']?></p>
      



<footer> 
<?php include "footer.php"?>
</footer>
</body>


</html>