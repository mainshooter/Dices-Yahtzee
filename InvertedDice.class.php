<?php
  require_once 'Dice.class.php';

  final class InvertedDice extends Dice {
    protected $allPicutres = [
      "image/inverted/inverted-dice-1.png",
      "image/inverted/inverted-dice-2.png",
      "image/inverted/inverted-dice-3.png",
      "image/inverted/inverted-dice-4.png",
      "image/inverted/inverted-dice-5.png",
      "image/inverted/inverted-dice-6.png",
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
