<?php session_start();?>
<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Sessions"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> Arrays </Title>
</Head>

<nav class= "mainnav">
<a href="index.php">Main Menu</a> 
<a href="Foundations.php">Foundations</a> 
<a href="Employees.php">Variables</a> 
<a href="Forms.php">Forms</a> 
<a href="Arrays.php">Arrays</a>
<a href="Sessions.php">Sessions</a> 
<a href="PLACEHOLDER">CMS Sessions</a> 
<a href="PLACEHOLDER">Database</a> 
<a href="PLACEHOLDER">CMS DATABASE</a> 
</nav>

<Body> 
<h2> Welcome to the Sessions assignment! Please enter "customer" for the username and password to be redirected to the employee chart. </h2>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

Username: <input type="text" name="Username" /><br>
Password: <input type="password" name="Password"/><br>

<input type="submit">
</form>

<?php
$username = $_POST['Username'];
$password = $_POST['Password'];
//potential error here; may have to pass values to $_SESSION via post.
$_SESSION ['Username'] = $UN
$_SESSION ['Password'] = $PW

if ($UN == 'customer' && $PW == 'customer') {
//perform redirect?
header('Location: https://onlinedevelopmentsolutions.com/Employees.php'); 
exit();
}
else echo "Invalid password! please enter a valid one.";
?>
<a href ="destroy.php">
<button type="button">Destroy Session</button>
</a>
<footer>
<?php include "footer.php";?>
</footer>
</body>
</html>