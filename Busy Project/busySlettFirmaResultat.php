<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Slett Firma</title>

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
        <a href="busySokFirma.php">Søk Person</a>
        <a href="busySlettPerson.php">Slett Person</a>
        <a href="busyUpdateFirmaVelg.php">Oppdater Firma</a>
        <a href="busyUpdatePersonVelg.php">Oppdater Person</a>
    </header>

    <section>
        <article>
            <form action="busySlettFirmaResultat.php" method="POST">
            <h1>Slett firmaen din </h1>
            <input type="text" name="firmanavn">
            <input type="submit" name="submit" value="Slett">
        </article>
    </section>


    <br><?php
    
    $firmanavn = $_POST["firmanavn"];
    $mysqli = new mysqli("localhost","root","","tsb");

    $firmaer = 'DELETE FROM firma WHERE navn= "'.$firmanavn.'";';
    //echo $firmaer;

    
    
    $result = $mysqli->query($firmaer);
    echo "Firmaen " .$firmanavn. " er slettet!";

    
    

    // Check connection
    if ($mysqli -> connect_error) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    

    
    ?></br>
    


</body>
</html>