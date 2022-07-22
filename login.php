<?php Session_start(); ?>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Login Page"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> CMS Main Menu</Title>
</Head>
<body>
<?php include "menu.php";?>
<h1> Log In</h1>
<?php include "secmenu.php";?>



<h1> Log in to your customer, administrator, or publisher account here! You must be logged in to access the store.</h1>
<form action="loginhandlermethod2.php" method="post">
<label for="username">Username:</label>
<input type="text" name="username" id="username">
<br>
<label for="password">Password:</label>
<input type="password" name="password" id="password">
<br>
<input type="submit" name="submitlogin" id="submitlogin" value="login">
</form>

<h1> New customer? Create your account here! </h1> 
<form action="createuser.php" method="post">
<label for="newusername">Desired Username:</label>
<input type="text" name="newusername" id="newusername">
<br>
<label for="newpassword">Desired Password:</label>
<input type="password" name="newpassword" id="newpassword">
<br>
<input type="submit">
</form> 

<footer>
<?php include "footer.php"?>
</footer>
</body>
</html>