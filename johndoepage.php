<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Employee Information"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> John Doe </Title>
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
<h2> Welcome To John Doe's personal webpage! to navigate between employees or back to the organization chart, use the navigation buttons below.</h2>
<ul>
  <li class="secnav"><a href="Employees.php">Organization Chart</a></li
  <li class="secnav"><a href="johndoepage.php">John Doe</a></li>
  <li class="secnav"><a href="janedoepage.php">Jane Doe</a></li>
  <li class="secnav"><a href="macarthurpage.php">Mac Arthur</a></li>
  <li class="secnav"><a href="aljohnsonpage.php">Al Johnson</a></li>
  <li class="secnav"><a href="jamiebrookspage.php">Jamie Brooks</a></li>
  <li class="secnav"><a href="brockdeanpage.php">Brock Dean</a></li>
</ul>
<center> <img src="johndoe.jpg" alt="John Doe"> </center>

<?php
include "variables.php";
echo "<h2> <center>$employee1name</center></h2>";
echo "<h3> <center>$employee1title</center></h3>" ;
echo "<p> <center>$employee1education</center></p> ";
echo "<p> <center>$employee1info</center></p>";
echo "<p> <center>$employee1additional</center></p>";
?>

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
