<?php Session_start();?>
<?php include "databaseconfig.php";?>
<?php function donothing(){
	;
}
if (isset($_GET['id'])) {
    $stmt = $db->prepare('SELECT * FROM `Employees` WHERE `EmployeeID` = ?');
    $stmt->execute([$_GET['id']]);
    $Employee = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$Employee) {
        exit('Error: Employee does not exist!');
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


<img src="<?=$Employee['EmployeeImage']?>" width="500" height="500" alt="<?=$Employee['Employeename']?>">
   
<h1><?=$Employee['EmployeeName']?></h1>

<h1><?=$Employee['EmployeeTitle']?></h1>
<p><?=$Employee['EmployeeEducation']?></p>
<p><?=$Employee['EmployeeAbout']?></p>
<p><?=$Employee['EmployeeAdditional']?></p>
<p> COLOSSIANS 3:23 Whatever you do, do your work heartily as for the Lord rather than for men. </p>



<footer> 
<?php include "footer.php"?>
</footer>
</body>


</html>