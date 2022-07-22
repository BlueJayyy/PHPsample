<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Arrays"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> Arrays </Title>
</Head>

<nav class= "mainnav">
<a href="index.php">Main Menu</a> 
<a href="Foundations.php">Foundations</a> 
<a href="Employees.php">Variables</a> 
<a href="Forms.php">Forms</a> 
<a href="Arrays.php">Arrays</a>
<a href="PLACEHOLDER">Sessions</a> 
<a href="PLACEHOLDER">CMS Sessions</a> 
<a href="PLACEHOLDER">Database</a> 
<a href="PLACEHOLDER">CMS DATABASE</a> 
</nav>

<Body> 
<h2> Welcome to the Arrays assignment! Please update your selected employee's data using the form below. </h2>

<form action="formresult.php" method="post">

<select name = "Employee"> 
  <option value="Select">Select</option> 
  <option value="John Doe">John Doe</option>  
  <option value="Jane Doe">Jane Doe</option>  
  <option value="Mac Arthur">Mac Arthur</option>  
  <option value="Al Johnson">Al Johnson</option>  
  <option value="Jamie Brooks">Jamie Brooks</option>  
  <option value="Brock Dean">Brock Dean</option> 
</select> <br>

Job Title: <input type="text" name="JobTitle" /><br>
About Me: <input type="text" name="AboutMe"/><br>
Education:<input type ="text" name="Education"/><br>
Hobbies:<input type="text" name="Hobbies"/><br>
Additional Info: <input type= "text" name="AdditionalInfo"/><br>
<input type="submit">

</form>
</Body>
<footer>
<?php 
include "footer.php";
?>
</footer>
</Body>


</html>
