<?php
$Email = $_POST["Email"]; 

if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
echo "<h1>thank you for signing up! you will now receive emails from us</h1>";}

else { 
echo "invalid email!";}
?>