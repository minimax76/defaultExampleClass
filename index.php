<?php
  include('class.automobile.php');
	
	$mia_automobile = new Automobile();
	$mia_automobile -> colore_vernice = "rosso";
	$mia_automobile -> cavalli_motore = 75;
	$mia_automobile -> Accelera(70);
	
	
	
	$automobile_di_francisco = new Automobile();
	$mia_automobile -> colore_vernice = "verde";	
	$mia_automobile -> cavalli_motore = 150;	
?>
