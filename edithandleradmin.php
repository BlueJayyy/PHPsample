<?php 
Session_start();
include "databaseconfig.php"; 
function donothing() {
	;
}
$Subject=$_POST["subject"];
$Subjectedited=$_POST["subjectedited"]; 
$Product=$_POST["product"];
$Deleteuser=$_POST["deleteuser"];
$Newcontent=$_POST["newcontent"];

if ($_SESSION['userretrieved'] == "admin" && $_SESSION['passwordretrieved'] == "admin") {
	
	if (empty($_POST["deleteuser"])) 
	{donothing();}

elseif (!empty($_POST["deleteuser"])) {
$stmt = $db->prepare ("DELETE FROM Users WHERE Username = $Deleteuser OR UserID = $Deleteuser");
$stmt-> execute();
header ('Location: store.php');
}
	if (empty($_POST["subjectedited"]) && $Subject!=="Select") {
		$stmt = $db->prepare ("DELETE $Subject from products where ID = $Product");
		$stmt->execute();
		header ('Location: store.php');
		exit();
	}
		elseif (!empty($_POST["subjectedited"])) {
			$stmt = $db->prepare ("UPDATE products SET $Subject = '$Subjectedited' WHERE ProductID = $Product");
			$stmt -> execute();
			header ('Location: store.php');
			exit();
		}
		if ($Subject== "Select" && empty("$Subjectedited") && $Product !== "Select") {
			$stmt = $db->prepare ("DELETE from products where ProductID = $Product");
			$stmt -> execute();
			header ('Location: store.php');
			exit();
		}
		elseif (!empty($Newcontent)) {
			$query = "INSERT INTO products (name, description, price, quantity, image)
			VALUES($Newcontent)";
			$stmt = $db->prepare($query);
			$stmt->execute();
			header ('Location: store.php');
			exit();
		}
}



?>