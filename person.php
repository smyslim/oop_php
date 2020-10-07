<? 
header('Content-Type: text/html; charset=utf-8');
class Person{
  private $name;
  private $lastname;
  private $age;
  private $mother;
  private $father;
  
  function __construct($name,$lastname,$age,$mother=null,$father=null){
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }
	public function getName(){return $this->name;}
	public function getLastname(){return $this->lastname;}
	public function getAge(){return $this->age;}
	public function getMother(){return $this->mother;}
	public function getFather(){return $this->father;}
	public function getFatherFather(){return $this->getFather()->getFather()->getName();}
	public function getFatherMother(){return $this->getFather()->getMother()->getName();}
	public function getMotherFather(){return $this->getMother()->getFather()->getName();}
	public function getMotherMother(){return $this->getMother()->getMother()->getName();}
	public function getInfo(){
		return "
		  Меня зовут ".$this->name."<br>
		  Мою маму зовут ".$this->mother->name."<br>
		  Моего папу зовут ".$this->father->name."<br>
		  Мою бабушку по отцу зовут: ".$this->father->mother->name."<br>
		  Моего дедушку по отцу зовут: ".$this->father->father->name."<br>
		  Мою бабушку по матери зовут:".$this->getMotherMother()."<br>
		  Моего дедушку по матери зовут: ".$this->getMotherFather();
	}
}
$maria = new Person("Мария","Иванова",60);
$ivan = new Person("Иван","Иванов",62);
$lena = new Person("Лена","Петрова",65);
$gena = new Person("Гена","Петров",69);
$oleg = new Person("Олег","Иванов",41,$maria,$ivan);
$olga = new Person("Ольга","Петрова",41,$lena,$gena);
$igor = new Person("Игорь","Иванов",12,$olga,$oleg);
echo $igor->getInfo();
?>
