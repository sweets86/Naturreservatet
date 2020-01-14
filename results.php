<?php

$amountOfMonkeys = $_POST["Apa"];
$amountOfGirafs = $_POST["Giraff"];
$amountOfTigers = $_POST["Tiger"];
$amountOfCocoNuts = $_POST["Kokosnöt"];

abstract class Animal {
    public $name;
    protected $picture;

    public function getPicture() {
        return $this->picture;
    }

    abstract function makeSound();
}

class Apa extends Animal {

    function __construct($name) {
        $this->name = $name;
        $this->picture = "./apa.jpg";
    }
    
    public function makeSound() {
        return "OoaaA..OoaaA";
    }
} 

class Giraff extends Animal {

    function __construct($name) {
        $this->name = $name;
        $this->picture = "./giraff.jpg";
    }

    public function makeSound() {
        return "Weeeee!!";
    }
}

class Tiger extends Animal {

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./tiger.jpg";
    }

    public function makeSound()
    {
        return "GRRRRRAWW!!";
    }
}

class Kokosnot extends Animal {

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./kokosnöt.jpg";
    }

    public function makeSound()
    {
        return "Boooooop..";
    }
}

$names = array(
    "Victor",
    "Yanica",
    "Essa",
    "Johan",
    "Johanna"
);

$animalArray = array();

for ($i=0; $i < $amountOfMonkeys; $i++) { 
    $apa = new Apa($names[$i]);
    array_push($animalArray, $apa);
}

for ($i=0; $i < $amountOfGirafs; $i++) { 
    $giraff = new Giraff($names[$i]);
    array_push($animalArray, $giraff);
}

for ($i=0; $i < $amountOfTigers; $i++) { 
    $tiger = new Tiger($names[$i]);
    array_push($animalArray, $tiger);
}

for ($i=0; $i < $amountOfCocoNuts; $i++) { 
    $kokosnöt= new Kokosnot($names[$i]);
    array_push($animalArray, $kokosnöt);
}

for ($i=0; $i < count($animalArray); $i++) { 

    $animal = $animalArray[$i];

    $alert = "alert('";
    $alert .= $animal->name;
    $alert .= ": ";
    $alert .= $animal->makeSound();
    $alert .= "');";

    echo '<img style="width: 5em; height: 5em; object-fit: contain;" src="' .$animal->getPicture(). '" onClick="' .$alert. '" />';
    echo "</br></br>";
}

?>