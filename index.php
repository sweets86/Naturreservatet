<?php

session_start();

if(isset($_GET["clear"])) {
    unset($_SESSION["animals"]);
}

if (!isset($_SESSION["animals"])) {
    header('Location:http://localhost:3001/settings.php');
} else {
    header('Location:http://localhost:3001/results.php');
}

?>
    