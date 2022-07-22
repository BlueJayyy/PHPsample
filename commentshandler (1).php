<?php
$title = $_POST['title'];
$name = $_POST['name'];
$comments = $_POST['comments'];

if (!preg_match ("/^[a-zA-Z0-9\s\.\!\&\;]*$/", $name)) {$Namepattern = "false";}
else {$Namepattern= "true";}

if (!preg_match ("/^[a-zA-Z0-9\s\.\!\&\;]*$/", $title)) {$Titlepattern = "false";}
else {$Titlepattern= "true";}

if (!preg_match ("/^[a-zA-Z0-9\s\.\!\&\;]*$/", $comments)) {$Commentpattern = "false";}
else {$Commentpattern= "true";}




if ($Namepattern == "false") {
die("Invalid entries! Please enter only alphanumeric characters and punctuation.");}
elseif ($Titlepattern == "false") {
die("Invalid entries! Please enter only alphanumeric characters and punctuation.");}
elseif ($Commentpattern == "false") {
die("Invalid entries! Please enter only alphanumeric characters and punctuation.");}

else {
try{
$db = new PDO("mysql:host=localhost;dbname=onlinons_JacobDonaldson", "onlinons_admin", "jacobsdatabase");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "database connection successful. Your responses were recorded! <a href='Employees.php'> Click here to return to the comments page!"; 
$db->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} 

catch(PDOException $error) {
	die("ERROR: Connection unsuccessful." . $error->getMessage());
}

	
$query = "INSERT INTO Comments (Name, Title, Comments)
								VALUES('".$name."', '".$title."', '".$comments."')";
$prepared = $db->prepare($query);
$prepared->execute();


}

?>

