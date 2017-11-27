<?php
  require_once 'Dice.class.php';

  final class ThreeDDice extends Dice {
    protected $allPicutres = [
      "image/3d/perspective-dice-one.png",
      "image/3d/perspective-dice-two.png",
      "image/3d/perspective-dice-three.png",
      "image/3d/perspective-dice-four.png",
      "image/3d/perspective-dice-five.png",
      "image/3d/perspective-dice-six.png",
    ];
    /**
     * Rols the dice and returns the path of the image we need to use
     * @return [string] [The image location]
     */
    public function roll() {
      $diceNumber = $this->generateNumber();
      return($this->allPicutres[$diceNumber-1]);
    }
  }



?>
