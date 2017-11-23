<style>
  img {
    width: 20em;
    float: left;
  }
</style>

<?php
  require_once 'NormalDice.class.php';
  require_once 'InvertedDice.class.php';
  require_once 'ThreeDDice.class.php';

  $Dice = new NormalDice(1,6);
  echo '<img src="' . $Dice->roll() . '">';

  $InvertedDice = new InvertedDice(1,6);
  echo '<img src="' . $InvertedDice->roll() . '">';

  $ThreeDDice = new ThreeDDice(1,6);
  echo '<img src="' . $ThreeDDice->roll() . '">';
?>
