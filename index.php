<?php
  require_once 'NormalDice.class.php';
  require_once 'InvertedDice.class.php';

  $Dice = new NormalDice(1,6);
  echo '<img src="' . $Dice->roll() . '">';

  $InvertedDice = new InvertedDice(1,6);
  echo '<img src="' . $InvertedDice->roll() . '">';
?>
