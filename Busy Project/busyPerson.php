<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Insert Person</title>

    <style>

    header{
        margin: 0cm;
        background-color: #cd9dcd;
        padding: 20px;
        text-align: center;
        font-family: cursive;
        font-size: 25;
        color: whitesmoke;}

	body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #d5bfd5;
        text-align: center;}

    p{
        font-style: 50px;
        font-size: 200px;
        font-kerning: 42px;}
</style>

</head>

<body>
    <header>
        <h1>Busy Prosjekt KONTAKTMODUL</h1>
        <h3><a href="../index.php">Tilbake til hovedsiden</a></h3>
        <a href="busyFirma.php">Insert Firma</a>
    </header>

    <section>
        <article>
            <form action="busyPerson.php" method="POST">
            <h1>Insert person</h1>
            <br>Fornavn</br>
            <input type="text" name="fnavn" required>
            <br>Etternavn</br>
            <input type="text" name="enavn" required>
            <br>Telefon Kunde</br>
            <input type="text" name="telefonk" required>
            <br>Epost</br>
            <input type="text" name="epost" required></br>
            <!--<br>FirmaID</br>
            <input type="text" name="firmaid" required></br>-->
            <input type="submit" name="Send inn" value="submit"> 
        </article>
    </section>

    <?php

        if (isset($_POST["fnavn"]) && isset($_POST["enavn"]) && isset($_POST["telefonk"]) && isset($_POST["epost"])){

            
        $fnavn = $_POST["fnavn"];       echo $fnavn;
        $enavn = $_POST["enavn"];       echo $enavn;
        $telefonk = $_POST["telefonk"]; echo $telefonk;
        $epost = $_POST["epost"];       echo $epost;

            $mysqli = new mysqli("localhost","root","","tsb");
            $person = 'INSERT INTO person (fnavn, enavn, telefonk, epost) VALUES("'.$fnavn.'","'.$enavn.'","'.$telefonk.'","'.$epost.'")';

            $result = $mysqli->query($person);

        // Check connection
        if ($mysqli -> connect_error) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();}

        }

     


    
    

    ?>


</body>
</html>