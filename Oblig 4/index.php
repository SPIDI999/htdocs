<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#e9692c;">

<article>
    <h1>Oppgave 1a) og b)</h1>
        <form action="index.php" method="post">
            <p><input type="text" id="name" name="name" > Ditt navn<br></p>
            <a><input type="submit" value="submit"></a>
            
    <ul>
        <label for="antall">Velg antall:</label>  
            <select id="antall" name="antall">
                <a><option value="1"> 1</option></a>
                <a><option value="5"> 5</option></a>
                <a><option value="10"> 10</option></a>
            </select>
    </ul>

    <?php

        if (isset($_POST["name"]) && isset($_POST["antall"])){

            $name = $_POST["name"];
            $antall = $_POST["antall"];
        
        if($antall == "1"){
            for($i=0; $i <=0; $i++){
                    echo "$name-";
                }
            }
        /* Koden til oppgave 1a)
        $name = $_POST["name"];
        echo "$name-";
        echo "$name-";
        echo "$name-";
        echo "$name-";
        echo "$name-";*/

        if($antall == "5"){
            for($i=0; $i <=4; $i++){
                    echo "$name-";
                }
            }

        if($antall == "10"){
            for($i=0; $i <=9; $i++){
                    echo "$name-";
                }
            }
}
?>

<p><?php 
$liste = array("Sander","Linus","Sebastian", "Thomas", "Marius", "Tobias", "Erling", "Luan", "Jovan", "Szymon", "Oscar", "Steinar", "Fredrik");

for($i=0; $i<13; $i++){
    echo $liste[$i];
    echo "<br>";
}
?></p>


<h1>Oppgave 6</h1>
<form action="index.php" method="post">
            <input type="text" id="name" name="name"> Navn<br>
            <input type="text" id="ad" name="ad"> Adresse<br>

            <a><input type="radio" name="car" value="henting"> Hente selv<br></a>
            <a><input type="radio" name="car" value="levering"> Leveranse (+65kr)<br></a>

            <ul>
                <label for="pizza">Velg pizza-type</label>  
                    <select id="pizza" name="pizza">
                        <a><option value="Hawaisk Pizza"> Hawaisk Pizza</option></a>
                        <a><option value="Miesny Jez"> Miesny Jez</option></a>
                        <a><option value="Smol Terry"> Smol Terry</option></a>
                    </select>
            </ul>

            <a><input type="radio" name="ost" value="Normal Ost"> Normal Ost<br></a>
            <a><input type="radio" name="ost" value="Ekstra Ost"> Ekstra Ost<br></a>

            <p><input type="submit" value="submit"></p>

<?php 

if (isset($_POST["name"]) && isset($_POST["car"]) && isset($_POST["pizza"]) && isset($_POST["ost"]) && isset($_POST["ad"])){

    $name = $_POST["name"];
    $car = $_POST["car"];
    $pizza = $_POST["pizza"];
    $ost = $_POST["ost"];
    $ad = $_POST["ad"];

    echo "Takk for din bestilling, $name <br>";
    echo "Du har valgt $pizza med $ost <br>";
    echo "Leveres til $ad <br>";

}





?>

<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>    
</body>
</html>