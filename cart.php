<?php Session_Start(); ?>
<?php include "databaseconfig.php"; ?>
<?php function donothing(){
	;
}
?>
<?php
if (isset($_POST['ProductID'], $_POST['quantity']) && is_numeric($_POST['ProductID']) && is_numeric($_POST['quantity'])) {
    $ProductID = (int)$_POST['ProductID'];
    $quantity = (int)$_POST['quantity'];
	
    $stmt = $db->prepare('SELECT * FROM `products` WHERE ProductID = ?');
    $stmt->execute([$_POST['ProductID']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($product && $quantity > 0) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($ProductID, $_SESSION['cart'])) {
              $_SESSION['cart'][$ProductID] += $quantity;}
              else {$_SESSION['cart'][$ProductID] = $quantity;}
			  } 
			  else {
		$_SESSION['cart'] = array($ProductID => $quantity);
    }
    }
    header('location: product.php?page=cart');
    exit;
}


if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    unset($_SESSION['cart'][$_GET['remove']]);
}
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    header('location: cart.php');
    exit;
}
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: placeorder.php');
    exit;
}

$Cartproducts = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
$total = 0.00;
$tax= 0.00;

if($Cartproducts) {
    $PlaceholderQs = implode(',', array_fill(0, count($Cartproducts), '?'));
    $stmt = $db->prepare('SELECT * FROM `products` WHERE `ProductID` IN (' . $PlaceholderQs . ')');
    $stmt->execute(array_keys($Cartproducts));
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$Cartproducts[$product['ProductID']];
		$tax += (float)($subtotal * 0.08);
		$total += (float)($subtotal + $tax);
    }
	
}
?>

<html>

<head>

<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Store"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<title> Cart </title>

</head>

<body>
<?php include "menu.php"?>
<?php include "secmenu.php"?>
    <h1>Shopping Cart</h1>
		<form action="cart.php?page=cart" method="post">
			<table>
			<thead>
			<tr>
		<td colspan="2">Product</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Total</td>
     </tr>
    </thead>
    <tbody>
		<?php if (empty($products)) { 
			echo "<tr>
			<td colspan='5' style='text-align:center;'>No Products Found.</td>
		</tr>";
		} 
	?>      
    <?php foreach ($products as $product): ?>
    <tr>
    <td>
		<a href="product.php?page=product&id=<?=$product['ProductID']?>">
		<img src="<?=$product['image']?>" width="50" height="50" alt="<?=$product['name']?>">
    </a>
    </td>
		<td>
			<a href="product.php?page=product&id=<?=$product['ProductID']?>"><?=$product['name']?></a>
			<br>
			<a href="cart.php?page=cart&remove=<?=$product['ProductID']?>">Remove</a>
		</td>
    <td><?='$';?><?=$product['price']?></td>
    <td>
    <input type="number" name="quantity-<?=$product['ProductID']?>" value="<?=$Cartproducts[$product['ProductID']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
    </td>
	<td><?='$';?><?=$product['price'] * $Cartproducts[$product['ProductID']]?></td>
    </tr>
	<?php endforeach; ?>
    </tbody>
    </table>
		<h1 style= "color:black">Subtotal:
			<?='$';?><?=$subtotal?></h1>
			<h1> Taxes calculated at 8%: </h1>
			<h1 style= "color:red"><?='$';?><?=$tax;?>
			<h1 style= "color:green">Total: <?='$';?><?=$total?></h1>
		<button>
		<input type="submit" value="Update" name="update">
		</button>
	<button>
    <input type="submit" value="Place Order" name="placeorder">
</button>
</form>
<footer> 
<?php include "footer.php"?>
</footer>
</body>

</html>