<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="About Us"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> About Us </Title>
</Head>
<body>

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

<h1> Welcome to the about us page! to navigate between components, please click on the assignment component 
you wish to review in the secondary navigation menu below this text.</h1>

<ul>
  <li class="secnav"><a href="AboutUs.php">About Us</a></li>
  <li class="secnav"><a href="phpconfig.php">PHP Config</a></li>
  <li class="secnav"><a href="contactus.php">Contact Us</a></li>
  <li class="secnav"><a href="Foundations.php">Assignment Menu</a></li>
</ul>

<h2> About Us </h2>

<?php
echo '<p> Online Development Solutions is a company devoted to developing quality websites and other web-based solutions to
its clients around the world. Our Mission is to provide great service at competitive rates, while providing the best websites,
online media, and engineering possible to make sure that our clients have a competitive advantage in the ecommerce space.
We provide website-building services,website remodeling, content management, Cybersecurity management, and Database services
among many other custom solutions that our team can create to be tailored to the needs of our clients. Our team consists of
seasoned software and web engineers that are well-acquainted with all components of web-facing sites and applications, as well
as the security and maintenance needed to protect and preserve them in a meaningful way. Database management is another strong-suit
of our company, with on-site databases ready to be leased as a service to any in-need client, while providing fast, effective,
and bug-free database performance. Whether you are looking for a ground-up construction of a web solution, a website update or
touch up, or an entire content management and cyber security system, Online Development Solutions has you covered. Our technical
ability combined with our creative staff ensure a seamless experience and a tangible advantage over your competitors in the 
e-commerce space. Our data specialists will work with you to create a usable database with quality data for decision making,
and will allow you to save precious dollars in advertising and maintenance costs. Call us today!</p>' ;

?>

<footer>
<a href= "https://validator.w3.org/nu/">
<img src= "CSSVALIDATIONIMAGE.png" alt="Click to validate">
</a>

<a href="https://validator.w3.org/nu/">
<img src="HTMLVALIDATIONIMAGE.png" alt="Click to validate">
</a>

<?php
echo "<b>Last Modified:</b> " . date('F d Y h:i A', filemtime($_SERVER['SCRIPT_FILENAME']));
  
?>
</footer>
</nav>
</body>
</html>