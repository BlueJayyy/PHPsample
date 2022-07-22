<?php 
$secmenu= array ("cmsmain.php", "cmsaboutus.php", "cmsmission.php", "cmsourteam.php", "login.php", "store.php", "contact.php", "apply.php", "ourphp.php", "facts.php", "newsletter.php", "survey.php",
"termsandconditions.php", "termsofservice.php", "deliveryinformation.php");
echo '<ul>';
foreach ($secmenu as $menuitem) {
	echo "<li class='secnav'>";
	echo "<a href='$menuitem'>";
	echo substr($menuitem, 0,-4); 
	echo "</a></li>";
}
echo "</ul>";
?>
