class Car
{ 
  //car attributes
  private $speed;
  public $color = "White";

  //car methods to demostrate the behaviours
  public function accelerate($value) {
    $this->speed += $value;
  }

  public function brake() {
    $speed = 0;
  }

}

//instantiating Car object
$car = new Car();