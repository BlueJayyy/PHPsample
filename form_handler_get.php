<!DOCTYPE HTML>
<html>
<Head>
<meta http-equiv= "content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Results Get"/>
<link rel="stylesheet" type="text/css" href="Style1.css">
<Title> Results report </Title>
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


<?php 
$name = $_GET["name"];
$comments = $_GET["comments"];
echo "<h2><center> Thank you, $name, for your responses. your report is below.</h2></center>";

//product 1 results placed into variables
$p1q1Val = $_GET['p1q1response'];
$p1q2Val = $_GET['p1q2response'];
$p1q3Val = $_GET['p1q3response'];
$p1q4Val = $_GET['p1q4response'];
$p1q5val = $_GET['p1q5response'];
//product 2 results placed into variables
$p2q1Val = $_GET['p2q1response'];
$p2q2Val = $_GET['p2q2response'];
$p2q3Val = $_GET['p2q3response'];
$p2q4Val = $_GET['p2q4response'];
$p2q5val = $_GET['p2q5response'];
//product 3 results placed into variables
$p3q1Val = $_GET['p3q1response'];
$p3q2Val = $_GET['p3q2response'];
$p3q3Val = $_GET['p3q3response'];
$p3q4Val = $_GET['p3q4response'];
$p3q5val = $_GET['p3q5response'];
//use these variables to discern the answer for echo into table
//product 1 
if ($p1q1Val == "absolutely") {
$p1q1answer= "absolutely";
}
else if ($p1q1Val== "maybe"){
$plq1answer="maybe";
}
else {
$p1q1answer= "absolutely not";
}

if ($p1q2Val == "absolutely") {
$p1q2answer= "absolutely";
}

else if ($p1q2Val= "maybe") {
$p1q2answer= "maybe";
}

else {
$p1q2answer= "absolutely not";
}

if ($p1q3Val == "absolutely") {
$p1q3answer= "absolutely";
}
else if ($p1q3Val= "maybe") {
$p1q3answer= "maybe";
}
else {
$p1q3answer= "absolutely not";
}

if ($p1q4Val == "Excellent") {
$p1q4answer = "Excellent";
}
else if ($p1q4Val = "Just OK") {
$p1q4answer = "Just OK";
}
else {
$p1q4answer= "Bad";
}


if ($p1q5Val == "absolutely") {
$p1q5answer= "absolutely";
}
else if ($p1q5Val= "maybe") {
$p1q5answer= "maybe";
}
else {
$p1q5answer= "absolutely not";
}

//product 2
if ($p2q1Val == "absolutely") {
$p2q1answer= "absolutely";
}
else if ($p2q1Val== "maybe"){
$p2q1answer="maybe";
}
else {
$p2q1answer= "absolutely not";
}

if ($p2q2Val == "absolutely") {
$p2q2answer= "absolutely";
}

else if ($p2q2Val= "maybe") {
$p2q2answer= "maybe";
}

else {
$p2q2answer= "absolutely not";
}

if ($p2q3Val == "absolutely") {
$p2q3answer= "absolutely";
}
else if ($p2q3Val= "maybe") {
$p2q3answer= "maybe";
}
else {
$p2q3answer= "absolutely not";
}

if ($p2q4Val == "Excellent") {
$p2q4answer = "Excellent";
}
else if ($p2q4Val = "Just OK") {
$p2q4answer = "Just OK";
}
else {
$p2q4answer= "Bad";
}


if ($p2q5Val == "absolutely") {
$p2q5answer= "absolutely";
}
else if ($p2q5Val= "maybe") {
$p2q5answer= "maybe";
}
else {
$p2q5answer= "absolutely not";
}

//product 3
if ($p3q1Val == "absolutely") {
$p3q1answer= "absolutely";
}
else if ($p3q1Val== "maybe"){
$p3q1answer="maybe";
}
else {
$p3q1answer= "absolutely not";
}

if ($p3q2Val == "absolutely") {
$p3q2answer= "absolutely";
}

else if ($p3q2Val= "maybe") {
$p3q2answer= "maybe";
}

else {
$p3q2answer= "absolutely not";
}

if ($p3q3Val == "absolutely") {
$p1q3answer= "absolutely";
}
else if ($p3q3Val= "maybe") {
$p3q3answer= "maybe";
}
else {
$p3q3answer= "absolutely not";
}

if ($p3q4Val == "Excellent") {
$p3q4answer = "Excellent";
}
else if ($p3q4Val = "Just OK") {
$p3q4answer = "Just OK";
}
else {
$p3q4answer= "Bad";
}


if ($p3q5Val == "absolutely") {
$p3q5answer= "absolutely";
}
else if ($p3q5Val= "maybe") {
$p3q5answer= "maybe";
}
else {
$p3q5answer= "absolutely not";
}



echo "<h2><center>Your responses were: </h2></center><table>
<thead>
  <tr>
    <th></th>
    <th><h2>Comprehensive Website Building &nbsp;  &nbsp; </h2></th>
    <th><h2>Cybersecurity Management Services &nbsp;  &nbsp; </h2></th>
    <th><h2>Database Management Services &nbsp;  &nbsp; </h2></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><h3>Would you buy this product at its given price?</h3></td>
    <td><h3>$p1q1answer</h3></td>
    <td><h3>$p2q1answer</h3></td>
    <td><h3>$p3q1answer</h3></td>
  </tr>
  <tr>
    <td><h3>Do you believe this product is beneficial?</h3></td>
    <td><h3>$p1q2answer</h3></td>
    <td><h3>$p2q2answer</h3></td>
    <td><h3>$p3q2answer</h3></td>
  </tr>
  <tr>
    <td><h3>Was this product displayed in a professional manner? &nbsp; </h3></td>
    <td><h3>$p1q3answer</h3></td>
    <td><h3>$p2q3answer</h3></td>
    <td><h3>$p3q3answer</h3></td>
  </tr>
  <tr>
    <td><h3>How does the product image look?</h3></td>
    <td><h3>$p1q4answer</h3></td>
    <td><h3>$p2q4answer</h3></td>
    <td><h3>$p3q4answer</h3></td>
  </tr>
  <tr>
    <td><h3>Is this appropriate for your business needs?</h3></td>
    <td><h3>$p1q5answer</h3></td>
    <td><h3>$p2q5answer</h3></td>
    <td><h3>$p3q5answer</h3></td>
  </tr>
</tbody>
</table>";
echo "<h3>your comments were: $comments</h3>";
?>
<footer>
<?php 
include "footer.php";
?>
</footer>

</Body>


</html>