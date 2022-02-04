<?php
class Car
{ 
  //car attributes
  private $speed;
  private $color = "silver";
  
  //car methods to demostrate the behaviours
  public function accelerate($value) {
    $this->speed += $value;
    echo "The car speed is".$this->speed."</br>";
  }

  public function brake() {
    $speed = 0;
    echo "The car has stopped.";
  }

}

//instantiating Car object
$carObj = new Car();

$carObj->accelerate(10);
$carObj->brake();

?>