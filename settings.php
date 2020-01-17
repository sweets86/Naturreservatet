<?php

session_start();

if (isset($_SESSION["animals"])) {
    header('Location:http://localhost:3001/results.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturreservat</title>
</head>

<body>

    <form action="/results.php" method="POST">
        Apa:<br>
        <input type="number" max=5 name="Apa">
        <br>
        Giraff:<br>
        <input type="number" max=5 name="Giraff">
        <br>
        Tiger:<br>
        <input type="number" max=5 name="Tiger">
        <br>
        Kokosnöt:<br>
        <input type="number" max=5 name="Kokosnöt">
        <br>
        Lejon:<br>
        <input type="number" max=5 name="Lejon">
        <br>
        Antilop:<br>
        <input type="number" max=5 name="Antilop">
        <br>
        Palmträd:<br>
        <input type="number" max=5 name="Palm">
        <br>
        Gorilla:<br>
        <input type="number" max=5 name="Gorilla">
        <br>
        Meranti-träd:<br>
        <input type="number" max=5 name="Meranti">
        <br>
        Boaorm:<br>
        <input type="number" max=5 name="Boa">
        <br>
        Rosor:<br>
        <input type="number" max=5 name="Rosor">
        <br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>