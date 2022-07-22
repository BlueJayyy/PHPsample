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
<h1> Want to contact us? Do so by using the form below! </h1>

<form action="contactform.php" method="post">

E-mail: <input type="text" name="Email" /><br>

Full Name: <input type="text" name="Name"/><br>

Phone Number: <input type= "text" name="PhoneNo"/><br>

<p> What is your question or comment? 
<textarea name= "comments" rows="3" cols="30"required>
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
