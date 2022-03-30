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
        <a href="busyPerson.php">Insert Person</a>
        <a href="busyFirma.php">Insert Firma</a>
        <a href="busySokFirma.php">Søk Firma</a>
    </header>

    <section>
        <article>
            <form action="busySokPersonResultat.php" method="POST">
            <h1>Finn personen</h1>
            <input type="text" name="personnavn" required>
            <input type="submit" name="submit" value="Søk">
        </article>
    </section>


    <br><?php
    $personnavn = $_POST["personnavn"];
    $mysqli = new mysqli("localhost","root","","tsb");

    
    
    $result = $mysqli->query("select * from personer where fornavn like '%{$personnavn}%' order by fornavn");

    while($row = $result->fetch_assoc()){
        echo " ";
        echo "FirmaID: ", $row["firma_id"], "<br>", "Fornavn: ", $row["fornavn"], "<br>", "Etternavn: ", $row["etternavn"], "<br>", "Telefon: ", $row["telefon"], "<br>", "Epost: ", $row["epost"], "<br>";
    }
    //HERE BITCHES

    // Check connection
    if ($mysqli -> connect_error) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    ?></br>
    


</body>
</html>