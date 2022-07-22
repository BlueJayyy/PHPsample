<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Database"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> Database  </Title>
</Head>



<Body> 
<?php include "menu.php";?>
<?php include "secmenu.php";?>
<h1> Leave your comment here! </h1>

<form action="commentshandler.php" method="post">

Title: <input type="text" name="title" /><br>

Full Name: <input type="text" name="name"/><br>

<p> What are your comments? 
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
