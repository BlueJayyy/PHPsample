<?php
session_start();
$_SESSION['userretrieved'] = "";
$_SESSION['passwordretrieved'] = "";
if(empty($_SESSION['sess_user_id'])) header("location: login.php");
?>