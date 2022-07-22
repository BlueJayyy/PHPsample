<?php
echo “<table style=’border: solid 1px black;’>”;
echo “<tr><th>Name</th><th>Title</th><th>Comments</th><th>Commentdate</th></tr>”;class TableRows extends RecursiveIteratorIterator {
function __construct($it) {
parent::__construct($it, self::LEAVES_ONLY);
}
function current() {
return “<td style=’width:150px;border:1px solid black;’>” . parent::current(). “</td>”;
}

function begindata() {
echo “<tr>”;
}

function enddata() {
echo “</tr>” . “\n”;
}

}

$servername = “localhost”;
$username = “onlinons_admin”;
$password = “jacobsdatabase”;
$dbname = “onlinons_JacobDonaldson”;

try {
$pdo = new PDO(“mysql:host=$servername;dbname=$dbname”, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$prepared = $pdo->prepare(“SELECT Name, Title, Comments, Commentdate FROM Comments”);
$prepared->execute();

    $result = $prepared->setFetchMode(PDO::FETCH_ASSOC);
foreach(new TableRows(new RecursiveArrayIterator($prepared->fetchAll())) as $k=>$v) {
echo $v;
}
}
catch(PDOException $e) {
echo “Data error: “ . $e->getMessage();
}
$pdo = null;
echo “</table>”;
?>