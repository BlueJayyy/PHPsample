<?php session_start();
$products= array("Comprehensive Website Building", "Cybersecurity Management Services(1 month)", "Database Management Services (1 month)", "Database Services (1 year)", "Software Development", 
"E-Commerce Management(1 month)", "Social Media Management (1 month)", "Sales Consulting Package", "Staffing Management (1 month)", "Hardware Installation Assistance" );

$prices= array ("$500","$800","$450","$1,000","$10,000","$600","$200","$1,000","$200","$300");

$images= array ("<img src="website.jpg">","<img src="cybersecurity.jpg">","<img src="database.jpg">","<img src="database2.png">",
"<img src="softwaredev.jpg">","<img src="ecommerce.jpg">","<img src="socialmedia.jpg">","<img src="consulting.jpg">",
"<img src="staffing.jpg">","<img src="hardware.jpg">");

$descriptions=array ("<h2>A custom built website, just for you!</h2>",
"<h2>A one-stop shop for all your cybersecurity needs.</h2>",
"<h2>We will manage your database, making it hassle-free!</h2>",
"<h2>Don't have a database? let us take care of it!</h2>",
"<h2>Custom software built for your every business need.</h2>",
"<h2>Let us manage your E-commerce footprint!</h2>",
"<h2>We will manage your social media and bring more traffic to your business.</h2>",
"<h2>Our sales consultants can bring you a competitive edge!</h2>",
"<h2>Can't find staff? we will find qualified, talented candidates.</h2>",
"<h2>Let us install your servers or assemble your computers!</h2>");

 if ( !isset($_SESSION["total"]) ) {
   $_SESSION["total"] = 0;
   for ($i=0; $i< count($products); $i++) {
    $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
  }
 }
?>

<html>

<head>

<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Store"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<title> Store </title>

</head>

<body>
<?php include "menu.php"?>
<?php $username = $_SESSION["username"]; echo "<h1>welcome $username, to the store page!<h1>";?>
<?php include "secmenu.php"?>

<h1> Here are our products. Please, peruse at your leisure!<h1>

<?php
for ($i=0; $i< count($products); $i++) {
echo($images[$i]);
echo($products[$i]);
echo($descriptions[$i]);
echo($prices[$i]);

echo <a href="?addtocart=<?php echo($i); ?>">Add to cart</a></td>
echo <a href="?removefromcart=<?php echo(i); ?>" >Remove from cart</a></td>
echo <a href="?resetinitiated">Clear cart</a></td>
}
?>

<footer> 
<?php include "footer.php"?>
</footer>
</body>


</html>