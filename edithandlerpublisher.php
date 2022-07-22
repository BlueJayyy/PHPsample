<?php 
Session_start();
include "databaseconfig.php"; 
function donothing() {
	;
}
$Subject=$_POST["subject"];
$Subjectedited=$_POST["subjectedited"]; 
$Product=$_POST["product"];
$Newcontent=$_POST["newcontent"];

if ($_SESSION['userretrieved'] == "publisher" && $_SESSION['passwordretrieved'] == "publisher") {
	
	
		if (!empty($_POST["subjectedited"])) {
			$stmt = $db->prepare ("UPDATE products SET $Subject = '$Subjectedited' WHERE ProductID = $Product");
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
		
		else {donothing();}
	   
}



?>