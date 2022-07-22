<?php 
$menu = array("index.php", "Foundations.php", "Employees.php", "Forms.php", "Arrays.php","Sessions.php","cmsmain.php");
foreach ($menu as $navitem) {
	echo "<a href= '$navitem'>"; echo substr($navitem, 0,-4); echo "&nbsp;"; echo "</a>";  
}
?>






