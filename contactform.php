<?php 
$Name= $_POST["Name"]; 
$Email= $_POST["Email"]; 
$Phone= $_POST["PhoneNo"]; 
$Comments=$_POST["comments"];

if (!preg_match ("/^[a-zA-z\s]*$/", $Name)) {$Namepattern = "false";}
else {$Namepattern= "true";}

if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
$Emailpattern = "true";
}
else {
$Emailpattern = "false";
}
if (!preg_match ("/^[0-9]*$/", $Phone) ){$Phonepattern = "false";}
else {$Phonepattern = "true";}

if ($Namepattern == "false") {
echo "invalid entries! please enter only numeric values for phone number, valid e-mails for email, and only letters and spaces for name.";}
elseif ($Emailpattern == "false") {
echo "invalid entries! please enter only numeric values for phone number, valid e-mails for email, and only letters and spaces for name.";}
elseif ($Phonepattern == "false") {
echo "invalid entries! please enter only numeric values for phone number, valid e-mails for email, and only letters and spaces for name.";}

else {
echo "<h1> Thank you, $Name, for your responses! They have been recorded in our database. Here are your answers.</h1>";

echo "Name: $Name <br>";
echo "E-mail: $Email <br>";
echo "Phone: $Phone <br>";
echo "Your comments: $Comments<br>";
}
?>