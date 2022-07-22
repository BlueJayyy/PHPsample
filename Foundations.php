<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Foundations Assignment"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> Foundations </Title>
</Head>

<nav class= "mainnav">
<a href="index.php">Main Menu</a> 
<a href="Foundations.php">Foundations</a> 
<a href="Employees.php">Variables</a> 
<a href="Forms.php">Forms</a> 
<a href="PLACEHOLDER">Arrays</a>
<a href="PLACEHOLDER">Sessions</a> 
<a href="PLACEHOLDER">CMS Sessions</a> 
<a href="PLACEHOLDER">Database</a> 
<a href="PLACEHOLDER">CMS DATABASE</a> 
</nav>

<Body> 
<h2> Welcome to the foundations assignment! Please click on the assignment component 
you wish to review in the Secondary navigation menu below this text.</h2>
<ul>
  <li class="secnav"><a href="AboutUs.php">About Us</a></li>
  <li class="secnav"><a href="phpconfig.php">PHP Config</a></li>
  <li class="secnav"><a href="contactus.php">Contact Us</a></li>
  <li class="secnav"><a href="Foundations.php">Assignment Menu</a></li>
</ul>
</Body>

<footer>
<a href="https://validator.w3.org/nu/">
<img src="CSSVALIDATIONIMAGE.png" alt="Click to validate">
</a>
<a href="https://validator.w3.org/nu/">
<img src="HTMLVALIDATIONIMAGE.png" alt="Click to validate">
</a>
<?php
echo "<b>Last Modified:</b> " . date('F d Y h:i A', filemtime($_SERVER['SCRIPT_FILENAME']));
?>
</footer>
</html>
