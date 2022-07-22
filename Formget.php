<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="User Form"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> User Form Get Method </Title>
</Head>

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

<Body> 
<h2 class="boldtext"> Welcome to our survey! Please answer the questions below this text.</h2>
<form action = "form_handler_get.php" method = "get">
<p> Name: <input type=text 
name = "name" size="30" required></p>

<h2><img src = "website.jpg" alt = "website"/></h2> 
<h3> Comprehensive Website Building</h3>
<p> Our comprehensive website building package includes a 100% hands off approach to web development.
our team will provide all the technical and design aspects of creating your dream website, all at the low price of $500.</p>

<p> Would you buy this product at its given price?
<input type="radio"
name "p1q1response" Value= "absolutely"
required> absolutely 


<input type="radio"
name "p1q1response" Value= "maybe"
required> maybe


<input type="radio"
name "p1q1response" Value="absolutely not"
required> absolutely not 
 
<p> Do you believe this product is beneficial?
<input type="radio"
name "p1q2response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p1q2response" Value= "maybe"
required> maybe

<input type="radio"
name "p1q2response" Value="absolutely not"
required> absolutely not 

<p>Was this product displayed in a professional manner?
<input type="radio"
name "p1q3response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p1q3response" Value= "maybe"
required> maybe

<input type="radio"
name "p1q3response" Value="absolutely not"
required> absolutely not 

<p>How does the product image look?
<input type="radio"
name "p1q4response" Value="Excellent"
required> excellent 

<input type="radio"
name "p1q4response" Value= "Just OK"
required> OK

<input type="radio"
name "p1q4response" Value="Bad"
required> Bad
 
<p>Is this appropriate for your business needs?
<input type="radio"
name "p1q5response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p1q5response" Value= "maybe"
required> maybe

<input type="radio"
name "p1q5response" Value="absolutely not"
required> absolutely not 

<h2><img src = "cybersecurity.jpg" alt = "cybersecurity"/></h2> 
<h3> Cybersecurity Management Service</h3>
<p> Our cybersecurity management service package includes 24/7 protection from all cyber threats and access to our team on demand.
 Rest assured, Online Development Solutions will keep your business safe. $50/mo for small businesses, $300/mo for medium sized businesses, $800/mo for large enterprises.</p>

<p> Would you buy this product at its given price?
<input type="radio"
name "p2q1response" Value="absolutely"
required> absolutely 


<input type="radio"
name "p2q1response" Value= "maybe"
required> maybe


<input type="radio"
name "p2q1response" Value="absolutely not"
required> absolutely not 
 
<p> Do you believe this product is beneficial?
<input type="radio"
name "p2q2response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p2q2response" Value= "maybe"
required> maybe

<input type="radio"
name "p2q2response" Value="absolutely not"
required> absolutely not 

<p>Was this product displayed in a professional manner?
<input type="radio"
name "p2q3response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p2q3response" Value= "maybe"
required> maybe

<input type="radio"
name "p2q3response" Value="absolutely not"
required> absolutely not 

<p>How does the product image look?
<input type="radio"
name "p2q4response" Value="Excellent"
required> excellent 

<input type="radio"
name "p2q4response" Value= "Just OK"
required> OK

<input type="radio"
name "p2q4response" Value="Bad"
required> Bad
 
<p>Is this appropriate for your business needs?
<input type="radio"
name "p2q5response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p2q5response" Value= "maybe"
required> maybe

<input type="radio"
name "p2q5response" Value="absolutely not"
required> absolutely not 


<h2><img src = "database.jpg" alt = "database"/></h2>
<h3>Database Management Services</h3>
<p> Our database management services will cover every business database need and function from A to Z. whether your organization is big or small, 
Online Development Solutions will provide reliable, fast, and quality service at a low cost. $100/mo for small businesses, $500/mo for medium sized,
and $1000/mo for large enterprises.</p>

<p> Would you buy this product at its given price?
<input type="radio"
name "p3q1response" Value="absolutely"
required> absolutely 


<input type="radio"
name "p3q1response" Value= "maybe"
required> maybe


<input type="radio"
name "p3q1response" Value="absolutely not"
required> absolutely not 
 
<p> Do you believe this product is beneficial?
<input type="radio"
name "p3q2response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p3q2response" Value= "maybe"
required> maybe

<input type="radio"
name "p3q2response" Value="absolutely not"
required> absolutely not 

<p>Was this product displayed in a professional manner?
<input type="radio"
name "p3q3response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p3q3response" Value= "maybe"
required> maybe

<input type="radio"
name "p3q3response" Value="absolutely not"
required> absolutely not 

<p>How does the product image look?
<input type="radio"
name "p3q4response" Value="Excellent"
required> excellent 

<input type="radio"
name "p3q4response" Value= "Just OK"
required> OK

<input type="radio"
name "p3q4response" Value="Bad"
required> Bad
 
<p>Is this appropriate for your business needs?
<input type="radio"
name "p3q5response" Value="absolutely"
required> absolutely 

<input type="radio"
name "p3q5response" Value= "maybe"
required> maybe

<input type="radio"
name "p3q5response" Value="absolutely not"
required> absolutely not 

<p> Any comments, questions or concerns?: <textarea 
name= "comments" rows="3" cols="30"
required></textarea></p>

<input type= "submit" name="result" value= "Submit survey"> 
</form>

<footer>

<?php 
include "footer.php";
?>

</footer>

</Body>


</html>
