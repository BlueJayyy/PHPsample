<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="PHP config"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> PHP Configuration </Title>
</Head>

<?php include "menu.php"?>

<Body> 
<h1> Welcome to the php configuration page! </h1>
<?php include "secmenu.php"?>

<?php 
print PHPINFO (INFO_GENERAL);
print PHPINFO (INFO_CONFIGURATION)
?>

</Body>

<footer>
<?php include "footer.php";?>
</footer>
</html>