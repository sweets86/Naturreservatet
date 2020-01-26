<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["animals"] = serialize($_POST);
} else if (!isset($_SESSION["animals"])) {
    header('Location:http://localhost:3001/settings.php');
}
// IF: Kolla om det är ett POST anrop, isf spara alla värden ifrån $_POST i $_SESSION
// ELSE IF: Kolla om värden finns sparade i $_SESSION, om inte skicka användaren till settings.php

$amountOfMonkeys = unserialize($_SESSION["animals"])["Apa"];
$amountOfGirafs = unserialize($_SESSION["animals"])["Giraff"];
$amountOfTigers = unserialize($_SESSION["animals"])["Tiger"];
$amountOfCocoNuts = unserialize($_SESSION["animals"])["Kokosnöt"];
$amountOfLions = unserialize($_SESSION["animals"])["Lejon"];
$amountOfAntilops = unserialize($_SESSION["animals"])["Antilop"];
$amountOfPalmtrees = unserialize($_SESSION["animals"])["Palm"];
$amountOfGorillas = unserialize($_SESSION["animals"])["Gorilla"];
$amountOfMeranti = unserialize($_SESSION["animals"])["Meranti"];
$amountOfBoas = unserialize($_SESSION["animals"])["Boa"];
$amountOfRoses = unserialize($_SESSION["animals"])["Rosor"];



abstract class Animal
{
    public $name;
    protected $picture;

    public function getPicture()
    {
        return $this->picture;
    }

    abstract function makeSound();
}

class Apa extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/apa.jpg";
    }

    public function makeSound()
    {
        return "OoaaA..OoaaA";
    }
}

class Giraff extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/giraff.jpg";
    }

    public function makeSound()
    {
        return "Weeeee!!";
    }
}

class Tiger extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/tiger.jpg";
    }

    public function makeSound()
    {
        return "GRRRRRAWW!!";
    }
}

class Kokosnot extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/kokosnöt.jpg";
    }

    public function makeSound()
    {
        return "Boooooop..";
    }
}
class Lejon extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/lejon.jpg";
    }

    public function makeSound()
    {
        return "GraaWww!!";
    }
}
class Antilop extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/antilop.jpg";
    }

    public function makeSound()
    {
        return "TweeeeTwee..";
    }
}
class Palm extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/palm.jpg";
    }

    public function makeSound()
    {
        return "Swissshh..";
    }
}
class Gorilla extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/gorilla.jpg";
    }

    public function makeSound()
    {
        return "Aaaawraaaw!!";
    }
}
class Meranti extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/meranti.jpg";
    }

    public function makeSound()
    {
        return "KnAk..";
    }
}
class Boa extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/boa.jpg";
    }

    public function makeSound()
    {
        return "Zzzzz..";
    }
}
class Rose extends Animal
{

    function __construct($name)
    {
        $this->name = $name;
        $this->picture = "./Animal/rose.jpg";
    }

    public function makeSound()
    {
        return "'Beautiful'";
    }
}

$rawData = file_get_contents("https://randomuser.me/api?results=30");
$results = json_decode($rawData)->results;
$names = array();

for ($i = 0; $i < 30; $i++) {
    error_log($results[$i]->name->first);
    array_push($names, $results[$i]->name->first);
}

$animalArray = array();
$nameIndex = 0;

for ($i = 0; $i < $amountOfMonkeys; $i++) {
    $apa = new Apa($names[$nameIndex++]);
    array_push($animalArray, $apa);
}

for ($i = 0; $i < $amountOfGirafs; $i++) {
    $giraff = new Giraff($names[$nameIndex++]);
    array_push($animalArray, $giraff);
}

for ($i = 0; $i < $amountOfTigers; $i++) {
    $tiger = new Tiger($names[$nameIndex++]);
    array_push($animalArray, $tiger);
}

for ($i = 0; $i < $amountOfCocoNuts; $i++) {
    $kokosnöt = new Kokosnot($names[$nameIndex++]);
    array_push($animalArray, $kokosnöt);
}

for ($i = 0; $i < $amountOfLions; $i++) {
    $lejon = new Lejon($names[$nameIndex++]);
    array_push($animalArray, $lejon);
}

for ($i = 0; $i < $amountOfAntilops; $i++) {
    $antilop = new Antilop($names[$nameIndex++]);
    array_push($animalArray, $antilop);
}

for ($i = 0; $i < $amountOfPalmtrees; $i++) {
    $palm = new Palm($names[$nameIndex++]);
    array_push($animalArray, $palm);
}

for ($i = 0; $i < $amountOfGorillas; $i++) {
    $gorilla = new Gorilla($names[$nameIndex++]);
    array_push($animalArray, $gorilla);
}

for ($i = 0; $i < $amountOfMeranti; $i++) {
    $meranti = new Meranti($names[$nameIndex++]);
    array_push($animalArray, $meranti);
}

for ($i = 0; $i < $amountOfBoas; $i++) {
    $boa = new Boa($names[$nameIndex++]);
    array_push($animalArray, $boa);
}

for ($i = 0; $i < $amountOfRoses; $i++) {
    $rose = new Rose($names[$nameIndex++]);
    array_push($animalArray, $rose);
}

for ($i = 0; $i < count($animalArray); $i++) {

    $animal = $animalArray[$i];

    $alert = "alert('";
    $alert .= $animal->name;
    $alert .= ": ";
    $alert .= $animal->makeSound();
    $alert .= "');";

    echo '<img style="width: 5em; height: 5em; object-fit: contain;" src="' . $animal->getPicture() . '" onClick="' . $alert . '" />';
    echo "</br></br>";

}

echo '<a href="/?clear=true"><button>Clear</button></a>';
?>
