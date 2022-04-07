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
        <a href="busySokFirma.php">Søk Firma</a>
        <a href="busySokPerson.php">Søk Person</a>
        <a href="busySlettFirma.php">Slett Firma</a>
        <a href="busySlettPerson.php">Slett Person</a>
        <a href="busyUpdateFirma.php">Oppdater Firma</a>
        <a href="busyUpdatePerson.php">Oppdater Person</a>
    </header>

    <section>
        <article>
            <form action="busyPersonResultat.php" method="POST">
            <h1>Legg til dine personalia</h1>
            <br>Fornavn</br>
            <input type="text" name="fornavn" required>
            <br>Etternavn</br>
            <input type="text" name="etternavn" required>
            <br>Telefon Kunde</br>
            <input type="text" name="telefon" required>
            <br>Epost</br>
            <input type="text" name="epost" required></br>
            <!--<br>FirmaID</br>
            <input type="text" name="firmaid" required></br>-->
            <input type="submit" name="submit" value="Send inn"> 
        </article>
    </section>

    <br><?php

        if (isset($_POST["fornavn"]) && isset($_POST["etternavn"]) && isset($_POST["telefon"]) && isset($_POST["epost"])){

            
        $fornavn = $_POST["fornavn"];       echo $fornavn . " ";
        $etternavn = $_POST["etternavn"];   echo $etternavn . ", ";
        $telefon = $_POST["telefon"];       echo $telefon . ", ";
        $epost = $_POST["epost"];           echo $epost . ", ";
        #$firma_id = $_POST["firma_id"];     echo $firma_id . " ";

            $mysqli = new mysqli("localhost","root","","tsb");
            $personer = 'INSERT INTO personer (fornavn, etternavn, telefon, epost) VALUES("'.$fornavn.'","'.$etternavn.'","'.$telefon.'","'.$epost.'")';

            $result = $mysqli->query($personer);

        // Check connection
        if ($mysqli -> connect_error) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();}

        }

     


    
    

    ?></br>


</body>
</html>