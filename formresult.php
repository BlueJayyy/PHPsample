<?php

$Employeename = $_POST['Employee'];
$Jobtitle = $_POST['JobTitle'];
$Aboutme = $_POST['AboutMe'];
$Education = $_POST['Education'];
$Hobbies = $_POST['Hobbies'];
$Additionalinfo = $_POST['AdditionalInfo'];

$infoarray = array ($Employeename, $Jobtitle, $Aboutme, $Education, $Hobbies, $Additionalinfo);

if ($Employeename == "Select") {
	echo "<h1><span style=color:#FF0000;text-align:center;> Error! Please choose a valid name from the drop-down menu!</span></h1>";
}

else foreach ($infoarray as $info)
echo "<h1><center>$info</center></h1>";
?>
<footer>
<?php 
include "footer.php";
?>
</footer>