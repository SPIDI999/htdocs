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
            <p><input type="text" id="name" name="name" required> Ditt navn<br></p>
            <a><input type="submit" value="submit"></a>
            
    <ul>  
        <a><input type="radio" name="antall" value="1"> 1<br></a>
        <a><input type="radio" name="antall" value="5"> 5<br></a>
        <a><input type="radio" name="antall" value="10"> 10<br></a>
    </ul>

    <?php

        if (isset($_POST["name"])){
            $name = $_POST["name"];
            for($i=0; $i <=5; $i++){
                echo "$name-";
            }
        /* Koden til oppgave 1a)
        $name = $_POST["name"];
        echo "$name-";
        echo "$name-";
        echo "$name-";
        echo "$name-";
        echo "$name-";*/
}
?>

<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>    
</body>
</html>