<?php session_start();
 if ( isset($_GET['resetinitiated']) )
 {
 if ($_GET["resetinitiated"] == 'true')
   {
   unset($_SESSION["qty"]);
   unset($_SESSION["prices"]);
   unset($_SESSION["total"]); 
   unset($_SESSION["cart"]);
   }
 }
 ?>