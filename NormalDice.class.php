<?php
  require_once 'Dice.class.php';

  final class NormalDice extends Dice {
    private $allPicutres = [
      "image/normal/dice-six-faces-one.png",
      "image/normal/dice-six-faces-two.png",
      "image/normal/dice-six-faces-three.png",
      "image/normal/dice-six-faces-four.png",
      "image/normal/dice-six-faces-five.png",
      "image/normal/dice-six-faces-six.png",
    ];

    public function roll() {
      $diceNumber = $this->generateNumber();
      return($this->allPicutres[$diceNumber-1]);
    }
  }


?>
