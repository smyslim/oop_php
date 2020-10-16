<?
class Cat{
  public $age;
  public $weight;
  public $strength;
  
  function __construct(){
  }
  
  function fight($anotherCat){
    $win = 0;
    echo $win."<br>";
    if($this->age > $anotherCat->age){
      echo $this->age." and ".$anotherCat->age."<br>";
      $win++;
    }
    echo $win."<br>";
    if($this->weight > $anotherCat->weight){
      echo $this->weight." and ".$anotherCat->weight."<br>";
      $win++;
    }
    echo $win."<br>";
    if($this->strength > $anotherCat->strength){
      echo $this->strength." and ".$anotherCat->strength."<br>";
      $win++;
    }
    echo $win."<br>";
    if($win >= 2){
      echo "true";
    }
    else{
      echo "false";
    }
  }
}

$cat1 = new Cat();
$cat1->age = 7;
$cat1->weight = 6;
$cat1->strength = 10;

$cat2 = new Cat();
$cat2->age = 4;
$cat2->weight = 5;
$cat2->strength = 8;

$cat3 = new Cat();
$cat3->age = 2;
$cat3->weight = 4;
$cat3->strength = 6;

$cat2->fight($cat1);

?>
