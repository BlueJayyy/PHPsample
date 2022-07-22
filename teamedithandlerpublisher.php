<?php 
Session_start();
include "databaseconfig.php"; 
function donothing() {
	;
}
$Subject=$_POST["subject"];
$Subjectedited=$_POST["subjectedited"]; 
$Employee=$_POST["Employee"];
$Newcontent=$_POST["newcontent"];
if ($_SESSION['userretrieved'] == "publisher" && $_SESSION['passwordretrieved'] == "publisher") {
	
	
		if (!empty($_POST["subjectedited"])) {
			$stmt = $db->prepare ("UPDATE Employees SET $Subject = '$Subjectedited' WHERE EmployeeID = $Employee");
			$stmt -> execute();
			header ('Location: cmsourteam.php');
			exit();
		}
		elseif (!empty($Newcontent)) {
			$query = "INSERT INTO Employees (EmployeeName, EmployeeTitle, EmployeeEducation, EmployeeAbout, EmployeeAdditional, EmployeeImage)
			VALUES($Newcontent)";
			$stmt = $db->prepare($query);
			$stmt->execute();
			header ('Location: cmsourteam.php');
			exit();
		}
		
		else {donothing();}
	   
}



?>