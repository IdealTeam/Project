<?php
  // Converti une date au format américain en
  // format français

  function convert_date_FR($date)
  {
  		$date_convert = new DateTime($date);
  		return $date_convert->format('d-m-Y');
  }

  // Converti une date au format français en
  // format américain

  function convert_date_US($date)
  {
  	$date_convert = new DateTime($date);
  	return $date_convert->format('Y-m-d');
  }


?>
