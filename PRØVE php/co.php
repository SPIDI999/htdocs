<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRØVE PHP, Szymon</title>
    <style>
	body {
    background-color: cyan;  
}

p{
    font-style: 50px;
    font-size: 200px;
    font-kerning: 42px;
}
</style>
</head>

<body>
<h1>Oppgave 5</h1>
    <form action="co.php" method="post">
        <input type="text" id="co2" name="co2"> CO2 utslipp pr mil<br>
        <input type="text" id="km" name="km"> Årlig kjørelengde i km<br>
        <input type="text" id="bil" name="bil"> Biltype<br>
        <ul>
            <label for="ar">Antall år du vil beholde bilen</label>  
                <select id="ar" name="ar">
                    <a><option value="1"> 1</option></a>
                    <a><option value="2"> 2</option></a>
                    <a><option value="3"> 3</option></a>
                    <a><option value="4"> 4</option></a>
                    <a><option value="5"> 5</option></a>
                    <a><option value="6"> 6</option></a>
                    <a><option value="7"> 7</option></a>
                    <a><option value="8"> 8</option></a>
                    <a><option value="9"> 9</option></a>
                </select>
        </ul>
        <input type="submit" value="submit">


<?php 
if (isset($_POST["co2"]) && isset($_POST["km"]) && isset($_POST["bil"]) && isset($_POST["ar"])){

    $co2 = $_POST["co2"];
    $km = $_POST["km"];
    $bil = $_POST["bil"];
    $ar = $_POST["ar"];

    function regnskap($co2, $km){
        $sum = $km / 10 * $co2;
        return $sum;
    }

    function total($co2, $km, $ar){
        $sum = ($km / 10 * $co2) * $ar;
        return $sum;
    }

    

    echo "CO2 regnskap for min bil av typen: $bil <br>";
    $beregning = regnskap($co2, $km);
    $tot = total($co2, $km, $ar);
    echo "Dette året har utslippet vært $beregning, og totalen for alle år er $tot";
    
    

}
?>
    
</body>
</html>