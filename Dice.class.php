<?php

  abstract class Dice {
    private $startNumber;
    private $endNumber;
    protected $allPicutres;
    private $randomNumber;

    /**
     * Starts when the class in stared
     * @param [int] $startNumber [The number we want to have atleast]
     * @param [int] $endNumber   [The maximum number]
     */
    public function __construct($startNumber, $endNumber) {
      $this->startNumber = $startNumber;
      $this->endNumber = $endNumber;
    }

    /**
     * Returns the minimum number
     * @return [int] [The minimum number]
     */
    private function getStartNumber() {
      return($this->startNumber);
    }

    /**
     * Returns the maximum number
     * @return [int] [returns the maximum number]
     */
    private function getEndNumber() {
      return($this->endNumber);
    }

    /**
     * Returns a random generated number
     * @return [int] [The random number]
     */
    protected function generateNumber() {
      $this->randomNumber = random_int($this->getStartNumber(), $this->getEndNumber());
      return($this->randomNumber);
    }

    /**
     * Gets a random number as a public function
     * @return [type] [description]
     */
    public function getNumber() {
      return($this->generateNumber());
    }

    abstract public function roll();
  }


?>
