<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Variables"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> Variables </Title>
</Head>

<Body> 
<h1> Welcome to the Variables Assignment! We have included a navigation menu for all listed employees above this text, but you may also click any of the images if you wish!.</h1>

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

<ul>
  <li class="secnav"><a href="Employees.php">Organization Chart</a></li
  <li class="secnav"><a href="johndoepage.php">John Doe</a></li>
  <li class="secnav"><a href="janedoepage.php">Jane Doe</a></li>
  <li class="secnav"><a href="macarthurpage.php">Mac Arthur</a></li>
  <li class="secnav"><a href="aljohnsonpage.php">Al Johnson</a></li>
  <li class="secnav"><a href="jamiebrookspage.php">Jamie Brooks</a></li>
  <li class="secnav"><a href="brockdeanpage.php">Brock Dean</a></li>
</ul>
<center> <h1> Our Employees </h1></center>

<center> <a href="johndoepage.php">
<img src="johndoe.jpg" alt="John Doe"/> 
</a>
<?php
include "variables.php";
echo "<h2> <center>$employee1name</center></h2>";
echo "<h3> <center>$employee1title</center></h3>" ;
echo "<p> <center>$employee1education</center></p> ";
echo "<p> <center>$employee1info</center></p>";
echo "<p> <center>$employee1additional</center></p>";
echo "<a href = 'johndoepage.php'><center>$employee1link</center></a>";
?>
</center>

<center> <a href="janedoepage.php">
<img src="janedoe.jpg" alt="Jane Doe"/> 
</a>
<?php
include "variables.php";
echo "<h2> <center>$employee2name</center></h2>";
echo "<h3> <center>$employee2title</center></h3>" ;
echo "<p> <center>$employee2education</center></p> ";
echo "<p> <center>$employee2info</center></p>";
echo "<p> <center>$employee2additional</center></p>";
echo "<a href = 'janedoepage.php'><center>$employee2link</center></a>";
?>
</center>

<center> <a href="macarthurpage.php">
<img src="macarthur.jpg" alt="Mac Arthur"/>
 </a>
 <?php
include "variables.php";
echo "<h2> <center>$employee3name</center></h2>";
echo "<h3> <center>$employee3title</center></h3>" ;
echo "<p> <center>$employee3education</center></p> ";
echo "<p> <center>$employee3info</center></p>";
echo "<p> <center>$employee3additional</center></p>";
echo "<a href = 'macarthurpage.php'><center>$employee3link</center></a>";
?>
</center>

<center> <a href="aljohnsonpage.php">
<img src="aljohnson.jpg" alt="Al Johnson"/>
</a>
 <?php
include "variables.php";
echo "<h2> <center>$employee4name</center></h2>";
echo "<h3> <center>$employee4title</center></h3>" ;
echo "<p> <center>$employee4education</center></p> ";
echo "<p> <center>$employee4info</center></p>";
echo "<p> <center>$employee4additional</center></p>";
echo "<a href = 'aljohnsonpage.php'><center>$employee4link</center></a>";
?>
</center>

<center> <a href="jamiebrookspage.php">
<img src="jamiebrooks.jpg" alt="Jamie Brooks"/> 
</a>
<?php
include "variables.php";
echo "<h2> <center>$employee5name</center></h2>";
echo "<h3> <center>$employee5title</center></h3>" ;
echo "<p> <center>$employee5education</center></p> ";
echo "<p> <center>$employee5info</center></p>";
echo "<p> <center>$employee5additional</center></p>";
echo "<a href = 'jamiebrookspage.php'><center>$employee5link</center></a>";
?>
</center>

<center> <a href="brockdeanpage.php">
<img src="brockdean.jpg" alt="Brock Dean"/> 
</a>
<?php
include "variables.php";
echo "<h2> <center>$employee6name</center></h2>";
echo "<h3> <center>$employee6title</center></h3>" ;
echo "<p> <center>$employee6education</center></p> ";
echo "<p> <center>$employee6info</center></p>";
echo "<p> <center>$employee6additional</center></p>";
echo "<a href = 'brockdeanpage.php'><center>$employee6link</center></a>";
?>
</center



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


</Body>


</html>