 <?php session_start();
 if ( isset($_GET["addtocart"]) )
   {
   $i = $_GET["addtocart"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["prices"][$i] = $prices[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty; 
   }
   ?>