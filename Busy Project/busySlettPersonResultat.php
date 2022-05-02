<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Slett Person</title>

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
        <a href="busyFirma.php">Insert Firma</a>
        <a href="busySokFirma.php">Søk Firma</a>
        <a href="busySokPerson.php">Søk Person</a>
        <a href="busySlettFirma.php">Slett Firma</a>
        <a href="busyUpdateFirma.php">Oppdater Firma</a>
        <a href="busyUpdatePerson.php">Oppdater Person</a>
    </header>

    <section>
        <article>
            <form action="busySlettPersonResultat.php" method="POST">
            <h1>Slett person</h1>
            <input type="text" name="personnavn">
            <input type="submit" name="submit" value="Slett">
        </article>
    </section>


    <br><?php
    
    $personnavn = $_POST["personnavn"];
    $mysqli = new mysqli("localhost","root","","tsb");

    $personer = 'DELETE FROM personer WHERE fornavn= "'.$personnavn.'";';
    //echo $firmaer;

    
    
    $result = $mysqli->query($personer);
    echo "Personen " .$personnavn. " er slettet!";

    
    

    // Check connection
    if ($mysqli -> connect_error) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    

    
    ?></br>
    


</body>
</html>