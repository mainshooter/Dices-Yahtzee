<?php
  require_once 'NormalDice.class.php';
  $Dice = new NormalDice(1,6);
  echo '<img src="' . $Dice->roll() . '">';
?>
