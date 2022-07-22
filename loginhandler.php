<?php session_start();
$username = $_GET["username"];
$password = $_GET["password"];

$_SESSION["username"] = $username; 
$_SESSION["password"] = $password; 

if ($username == 'customer' && $password == 'customer') {

header('Location: store.php');
exit();
}

elseif ($username == 'admin' && $password == 'admin') {

header('Location: store.php');
exit();
}

elseif ($username == 'publisher' && $password == 'publisher') {

header('Location: store.php');
exit();
}

else { echo "invalid password! please enter a valid one"; }
?>