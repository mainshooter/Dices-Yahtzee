<?php

  abstract class Dice {
    private $startNumber;
    private $endNumber;

    private $randomNumber;

    public function __construct($startNumber, $endNumber) {
      $this->startNumber = $startNumber;
      $this->endNumber = $endNumber;
    }

    private function getStartNumber() {
      return($this->startNumber);
    }

    private function getEndNumber() {
      return($this->endNumber);
    }

    protected function generateNumber() {
      $this->randomNumber = rand($this->getStartNumber(), $this->getEndNumber());
      return($this->randomNumber);
    }

    public function getNumber() {
      return($this->generateNumber());
    }

    abstract public function roll();
  }


?>
