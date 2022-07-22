<?php session_start();
  if ( isset($_GET["removefromcart"]) )
   {
   $i = $_GET["removefromcart"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;
   
   
   if ($qty == 0) {
    $_SESSION["prices"][$i] = 0;
    unset($_SESSION["cart"][$i]);
  }
 else
  {$_SESSION["prices"][$i] = $prices[$i] * $qty;}
  ?>