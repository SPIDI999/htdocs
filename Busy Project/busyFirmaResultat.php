<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Insert Firma</title>

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
        <h3><a href="ProduktRegistrer/busyProduktregistrer.php">Produktregistrer</a></h3>
        <a href="busyPerson.php">Insert Person</a>
        <a href="busySokFirma.php">Søk Firma</a>
        <a href="busySokPerson.php">Søk Person</a>
        <a href="busySlettFirma.php">Slett Firma</a>
        <a href="busySlettPerson.php">Slett Person</a>
        <a href="busyUpdateFirma.php">Oppdater Firma</a>
        <a href="busyUpdatePerson.php">Oppdater Person</a>
    </header>

    <section>
        <article>
            <form action="busyFirmaResultat.php" method="POST">
            <h1>Insert firma</h1>
            <br>Firma Navn</br>
            <input type="text" name="navn" required>
            <br>Adresse</br>
            <input type="text" name="adresse" required>
            <br>Organisasjonsnummer</br>
            <input type="text" name="orgnummer" required>
            <br>Telefon</br>
            <input type="text" name="telefon" required>
            <br>Postnummer</br>
            <input type="text" name="postnummer" required></br>
            <input type="submit" name="submit" value="Send inn">
        </article>
    </section>

    <br><?php

        if (isset($_POST["navn"]) && isset($_POST["adresse"]) && isset($_POST["orgnummer"]) && isset($_POST["telefon"]) && isset($_POST["postnummer"])){

            
        $navn = $_POST["navn"];             echo $navn . ", ";
        $adresse = $_POST["adresse"];       echo $adresse . ", ";
        $orgnummer = $_POST["orgnummer"];   echo $orgnummer . ", ";
        $telefon = $_POST["telefon"];       echo $telefon . ", ";
        $postnummer = $_POST["postnummer"]; echo $postnummer . " ";

            $mysqli = new mysqli("localhost","root","","tsb");
            $firma = 'INSERT INTO firma (navn, adresse, orgnummer, telefon, postnummer) VALUES("'.$navn.'","'.$adresse.'","'.$orgnummer.'","'.$telefon.'","'.$postnummer.'")';

            $result = $mysqli->query($firma);

        // Check connection
        if ($mysqli -> connect_error) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();}

        }
    ?></br>


</body>
</html>