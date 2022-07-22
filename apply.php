<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Arrays"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> Arrays </Title>
</Head>



<Body> 
<?php include "menu.php";?>
<?php include "secmenu.php";?>
<h1> Want to join our team? Apply here! </h1>

<form action="applyform.php" method="post">

E-mail: <input type="text" name="Email" /><br>

Full Name: <input type="text" name="Name"/><br>

Phone Number: <input type= "text" name="PhoneNo"/><br>

<p> What are your qualifications? 
<textarea name= "qualifications" rows="3" cols="30"required>
</textarea>
</p><br>

<p> What is your education history? 
<textarea name= "education" rows="3" cols="30"required>
</textarea>
</p><br>

<p> List your employment history here. 
<textarea name= "history" rows="3" cols="30"required>
</textarea>
</p><br>

<p> Any additional information? 
<textarea name= "additional" rows="3" cols="30">
</textarea>
</p><br>

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
