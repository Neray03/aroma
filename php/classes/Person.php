<?php

class Person
{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function  __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

    function sayHi($name)
    {
        return "Hi $name, I`m " . $this->name;
    }

    function setHp($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname() {

    return $this->lastname;
    }
    function getAge() {

    return $this->age;
    }
    function getMother()
    {
        return $this->mother;
    }
    
    function getFather()
    {
        return $this->father;
    }
   function getInfo() {
  // echo   $fath =& $this->getFather();
  //     $mother = $this->getMother();
       return  "
       <h3>A few words about myself</h3><br>"."My name is:".$this->getName().".<br>
      My lastname is: ".$this->getLastname().".<br>
      My age is: ".$this->getAge().".<br>
      My father is: ".$this->getFather()->getName().".<br>
      My mather is: ".$this->getMother()->getName().".<br>
      My grandmother on my father's line is: ".$this->getFather()->getMother()->getName().".<br>
      My grandfather on my father's line is: ".$this->getFather()->getFather()->getName().".<br>
      My grandmother on my  mother's line is: ".$this->getMother()->getMother()->getName().".<br>
      My grandfather on my mother's line is: ".$this->getMother()->getFather()->getName().".<br>";
    }
}
$marina = new Person("Marina", "Ivanova", 61);
$andrey = new Person("Andrey", "Ivanov", 65);
$igor = new Person("Igor", "Bukin", 62);
$maria = new Person("Maria", "Bukina", 60);
$alex = new Person("Alex", "Ivanov", 42, $marina, $andrey );
$olga = new Person("Olga", "Ivanova", 42, $maria , $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);


//echo $valera->getFather()->getMother()->getName();

//echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();
// $medKit = 50;
// $alex->setHp(-30); // Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit); //Нашел аптечку
// echo $alex->getHp();
