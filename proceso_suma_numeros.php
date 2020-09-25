<?php 
	if (isset($_POST['uno']) && $_POST['uno']!="" && isset($_POST['dos']) && $_POST['dos']!="") {
		echo $suma = $_POST['uno'] +  $_POST['dos']; 
	}
	
?>
