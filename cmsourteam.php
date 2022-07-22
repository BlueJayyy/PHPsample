<?php session_start();
if(isset($_SESSION['userretrieved']) && $_SESSION['passwordretrieved'] != "") {
  echo '<h1>Welcome to our team page, '.$_SESSION['userretrieved'].'</h1>';
  echo '<h2><a href="logout.php">Log out</a></h2>';
} else { 
  header('location:login.php');
}

include "databaseconfig.php";

function donothing() {
	;
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

<?php 

if ($_SESSION['userretrieved'] == "admin" && $_SESSION['passwordretrieved'] == "admin") {
	echo "<h1> hello admin! use this form to edit and delete the content of the team page. <h1>";
	echo "<form action='teamedithandleradmin.php' Method='post'>
	
	<h1><span style='color:#FF0000'> NOTE: to delete an entire employee profile, simply select an employee from the drop-down list and hit submit.</span></h1>
	
	<h1><label for='select'>Select the employee being edited.</label><h1>
    <select name ='Employee' id='Employee'>
	<option value = 'Select'>Select</option>  
	<option value = '1'>John Doe</option> 
	<option value = '2'>Jane Doe</option> 
	<option value = '3'>Mac Arthur</option> 
	<option value = '4'>Al Johnson</option> 
	<option value = '5'>Jamie Brooks</option> 
	<option value = '6'>Brock Dean</option> 
	<option value = '7'>Test Employee</option>
	</select>
	
	
	<h1><label for='select'>Select the content you wish to edit. <br> For all content uploads, upload your file to the public_html folder first, then simply put in the file name.</label><h1>
    <select name ='subject' id='subject'>
	<option value ='Select'>Select</option> 
	<option value ='employeename'>Employee Name</option> 
	<option value ='employeetitle'>Employee Title</option> 
	<option value ='employeeeducation'>Employee Education</option> 
	<option value ='employeeabout'>Employee About</option>
	<option value ='employeeadditional'>Employee Additional Information</option>
	<option value ='employeeimage'>Employee Image</option>
	</select>
	<br>
	<h1><label for='content'>Please type the content you would like in the selected area. <br> <span style='color:#FF0000'> IMPORTANT NOTE: If you are deleting the selected item, leave this text box blank.</span></label></h1>
	<textarea name='subjectedited' id='subjectedited' rows = '6' cols='100'></textarea>
	<br>
	<h1>  Would you like to delete a user? If so, please enter their username OR user ID below. (if you cannot access the database for any reason, use userID number 32)</h1>
	<input type='text' name='deleteuser' id='deleteuser'>
	<br>
	<h1><label for='newcontent'>Adding an employee? Do so below in the following format:<br> 'employee name', 'employee title', 'employee education', 'employee about' , 'employee additional information', 'employee image' Be sure not to forget the single quotes!</label></h1>
	<textarea name='newcontent' id='newcontent' rows = '6' cols='100'></textarea>
	<br>
	<input type='submit' name='submitedit' id='submitedit' value='Submit Edit'>
	</form>
	<br> <h1> All successful queries redirect to the same page, so make sure to look and make sure your query went through on this page!</h1>";
}
elseif ($_SESSION['userretrieved'] == "publisher" && $_SESSION['passwordretrieved'] == "publisher") {
	echo "<h1> hello publisher! use this form to edit the content of the team page. <h1>";
	echo "<form action='teamedithandlerpublisher.php' Method='post'> 
	
	<h1><label for='select'>Select the content you wish to edit. <br> For all content uploads, upload your file to the public_html folder first, then simply put in the file name.</label><h1>
    <select name ='subject' id='subject'>
	<option value ='Select'>Select</option> 
	<option value ='employeename'>Employee Name</option> 
	<option value ='employeetitle'>Employee Title</option> 
	<option value ='employeeeducation'>Employee Education</option> 
	<option value ='employeeabout'>Employee About</option>
	<option value ='employeeadditional'>Employee Additional Information</option>
	<option value ='employeeimage'>Employee Image</option>
	</select>
	<br>
	<h1><label for='select'>Select the employee being edited.</label><h1>
    <select name ='Employee' id='Employee'>
	<option value = 'Select'>Select</option>  
	<option value = '1'>John Doe</option> 
	<option value = '2'>Jane Doe</option> 
	<option value = '3'>Mac Arthur</option> 
	<option value = '4'>Al Johnson</option> 
	<option value = '5'>Jamie Brooks</option> 
	<option value = '6'>Brock Dean</option> 
	</select>
	<br>
	<h1><label for='content'>Please type the content you would like in the selected area.</label></h1>
	<textarea name='subjectedited' id='subjectedited' rows = '6' cols='100'></textarea>
	<br>
		<h1><label for='newcontent'>Adding an employee? Do so below in the following format:<br> 'employee name', 'employee title', 'employee education', 'employee about' , 'employee additional information', 'employee image' Be sure not to forget the single quotes!</label></h1>
	<textarea name='newcontent' id='newcontent' rows = '6' cols='100'></textarea>
	<br>
	<input type='submit' name='submitedit' id='submitedit' value='Submit Edit'>
	</form>
	<br> <h1> All successful queries redirect to the same page, so make sure to look and make sure your query went through on this page!</h1>";
}
else {donothing();}
?>




<?php
$Empperpage = 5;
$Currentpage = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
$stmt = $db->prepare('SELECT * FROM `Employees` ORDER BY `EmployeeID` ASC LIMIT ?,?');
$stmt->bindValue(1, ($Currentpage - 1) * $Empperpage, PDO::PARAM_INT);
$stmt->bindValue(2, $Empperpage, PDO::PARAM_INT); 
$stmt->execute();
$Employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<? $Totalproducts = $db->query('SELECT * FROM Employees')->rowCount();?>

   <h1> Here is our wonderful team!</h1>
   
   <?php foreach ($Employees as $Employee): ?>
    <a href="employee.php?page=employee&id=<?=$Employee['EmployeeID']?>">
	<figure> 
    <img src="<?=$Employee['EmployeeImage']?>" width = "200px" height = "200px" alt="<?=$Employee['EmployeeName']?>">
    <figcaption = "Employees"><?=$Employee['EmployeeName']?></figcaption>
    <figcaption><?=$Employee['EmployeeTitle']?></figcaption>
	</figure>
    </a>
<?php endforeach; ?>
<center>
<?php if ($Currentpage > 1): ?>
<button><a href="cmsourteam.php?page=cmsourteam&p=<?=$Currentpage-1?>">Previous Page</a></button>
<?php endif; ?>
<?php if ($Totalproducts > ($Currentpage * $Empperpage) - $Empperpage + count($Employees)): ?>
<button><a href="cmsourteam.php?page=cmsourteam&p=<?=$Currentpage+1?>">Next Page</a></button>
<?php endif; ?>
</center>

<footer> 
<?php include "footer.php"?>
</footer>
</body>


</html>