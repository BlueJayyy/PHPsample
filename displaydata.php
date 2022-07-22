<?php
  $host = 'localhost';
  $dbname = 'onlinons_JacobDonaldson';
  $username = 'onlinons_admin';
  $password = 'jacobsdatabase';
    
  $dba = "mysql:host=$host;dbname=$dbname"; 
 
  $sqlquery = "SELECT * FROM Comments";
   
  try{
   $pdo = new PDO($dba, $username, $password);
   $stmt = $pdo->query($sqlquery);
   
   if($stmt === false){
    die("Database Error");
   }
   
  }catch (PDOException $error){
    echo $error->getMessage();
  }
?>
