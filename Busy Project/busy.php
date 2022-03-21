<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project</title>

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
    </header>

    <section>
        <article>
            <h1>Insert firma</h1>
            <br>Navn</br>
            <input type="text" name="navn" required>
            <br>Adresse</br>
            <input type="text" name="adresse" required>
            <br>Organisasjonsnummer</br>
            <input type="text" name="orgnummer" required>
            <br>Telefon</br>
            <input type="text" name="telefon" required>
            <br>Web</br>
            <input type="text" name="web" required></br>
            <input type="submit" name="submit" value="submit">

           <!-- <h1>Person</h1>
            <br>For navn</br>
            <input type="text" name="fnavn" required>
            <br>Etter navn</br>
            <input type="text" name="enavn" required>
            <br>Telefon Kunde</br>
            <input type="text" name="telefonk" required>
            <br>Epost</br>
            <input type="text" name="epost" required></br>
            <input type="submit" name="submit" value="submit"> -->
        </article>
    </section>

    <?php

        if (isset($_POST["navn"]) && isset($_POST["adresse"]) && isset($_POST["orgnummer"]) && isset($_POST["telefon"]) && isset($_POST["web"])){

            
            $navn = $_POST["navn"];             echo $navn;
            $adresse = $_POST["adresse"];       echo $adresse;
            $orgnummer = $_POST["orgnummer"];   echo $orgnummer;
            $telefon = $_POST["telefon"];       echo $telefon;
            $web = $_POST["web"];               echo $web;
            }

      $sql = insert into firma(navn, adresse, orgnummer, telefon,web) values(); 





    /*$mysqli = new mysqli("localhost","root","","tsb");

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();}*/
  



    ?>


</body>
</html>