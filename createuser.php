<?php session_start();

$username = $_POST['newusername'];
$password = $_POST['newpassword'];

if (isset ($_POST['newusername']) && (isset ($_POST['newpassword'])))
{
	
if (!preg_match ("/^[a-zA-Z0-9\s\.\!\&\;]*$/", $username)) {$Userpattern = "false";}
else {$Userpattern= "true";}

if (!preg_match ("/^[a-zA-Z0-9\s\.\!\&\;]*$/", $password)) {$Passpattern = "false";}
else {$Passpattern= "true";}





if ($Userpattern == "false") {
die("Invalid entries! Please enter only alphanumeric characters and these special characters : . ! & ; ");}
elseif ($Passpattern == "false") {
die("Invalid entries! Please enter only alphanumeric characters and these special characters : . ! & ; ");}

else {
try{
$db = new PDO("mysql:host=localhost;dbname=onlinons_JacobDonaldson", "onlinons_admin", "jacobsdatabase");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$db->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} 

catch(PDOException $error) {
	die("ERROR: Connection unsuccessful." . $error->getMessage());
}

try {
$query = "INSERT INTO `Users` (Username, Password)
								VALUES('".$username."', '".$password."')";
$prepared = $db->prepare($query);
$prepared->execute();
echo "<h1>Database connection successful. your account has been created! <a href='login.php'> Click here to return to the login page and access your new account!</h1>";
}
catch (PDOException $error2) {
	die("<strong> ERROR: Account creation unsuccessful. Your username or password may already be used by another user. Error message:</strong>&nbsp"  . $error2->getMessage());
}
}
}

?>