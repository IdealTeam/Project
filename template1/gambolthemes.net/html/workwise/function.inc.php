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

  function note_stage($note_stage)
  {
    if ($note_stage <= '5' OR $note_stage > '0')
    {
      if ($note_stage == '1')
      {
        ?>
        <i class="fas fa-star"></i>
        <?php
      }
      if ($note_stage == '2')
      {
        ?>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <?php
      }
      if ($note_stage == '3')
      {
        ?>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <?php
      }
      if ($note_stage == '4')
      {
        ?>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <?php
      }
      if ($note_stage == '5')
      {
        ?>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <?php
      }
    }
    else
    {
      echo '';
    }
  }


?>
