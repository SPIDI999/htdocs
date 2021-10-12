<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body style="background-color:#bfff00;">

<h1>Oppgave 1</h1>
    <p>Oppgave a) og b)</p>
    <p>For å definere en funksjon i PHP bruker vi definisjonsordet "function" for å fortelle php'en at vi lager en funksjon</p>
    <!--En eksempel på en funksjon-->
    <?php
    function sunnerToTall ($tall1, $tall2){
        $sum = $tall1 + $tall2;
        return $sum;
    }?>

<h1>Oppgave 2</h1>
    <?php
    function minFunksjon(){
        echo"Funksjon uten argumenter";
    }
    minFunksjon();
    ?>

<h1>Oppgave 3</h1>
    <?php
    function navnFunksjon($navn){
        echo"$navn har opphavsretten til materialet på websiden";
    }
    navnFunksjon("Szymon");
    ?>

<h1>Oppgave 4</h1>
    <?php 
    function dele($tall1, $tall2){
        return($tall1 / $tall2);
    };

    function gange($tall1, $tall2){
        return($tall1 * $tall2);
    };

    function minus($tall1, $tall2){
        return($tall1 - $tall2);
    };

    function plus($tall1, $tall2){
        return($tall1 + $tall2);
    }?>

<h1>Oppgave 5</h1>
    <?php 
    function inFunksjon($fornavn, $etternavn, $adresse, $tlf){
        $array = array("fornavn", "etternavn", "adresse", "tlf");
    }
    
    
    
    
    ?>



<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>   
</body>
</html>