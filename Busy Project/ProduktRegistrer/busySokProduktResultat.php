<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Søk Firma</title>

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

        <h1>Busy Prosjekt Produkt/vareregister</h1>
        <h3><a href="../../index.php">Tilbake til hovedsiden</a></h3>
        <h3><a href="../busyFirma.php">Kontaktmodul</a></h3>
        <a href="busyProduktregistrer.php">Insert vare</a>
        <a href="busySlettProdukt.php">Slett varen din</a>

    </header>

    <section>
        <article>
            <form action="busySokProduktResultat.php" method="POST">
            <h1>Finn personen</h1>
            <br>Produkt navn</br>
            <input type="text" name="varenavn" required>
            <br>Produktbetegnelse</br>
            <input type="text" name="produktbetegnelse">
            <br>Leverandør ID</br>
            <input type="text" name="leverandor_id"></br>
            <input type="submit" name="submit" value="Søk">
        </article>
    </section>


    <br><?php
    $varenavn = $_POST["varenavn"];
    $produktbetegnelse = $_POST["produktbetegnelse"];
    $leverandor_id = $_POST["leverandor_id"];
    $mysqli = new mysqli("localhost","root","","tsb");

    
    
    $result = $mysqli->query("select * from produktregistrer where navn like '%{$varenavn}%' order by navn");
    $result = $mysqli->query("select * from produktregistrer where produktbetegnelse like '%{$produktbetegnelse}%' order by navn");
    $result = $mysqli->query("select * from produktregistrer where leverandor_id like '%{$leverandor_id}%' order by navn");

    while($row = $result->fetch_assoc()){
        echo " ";
        echo "Produkt ID: ", $row["id"], "<br>", "Navn: ", $row["navn"], "<br>", "Produktbetegnelse: ", $row["produktbetegnelse"], "<br>", "Pris INN: ", $row["pris_inn"], "<br>", "Pris UT: ", $row["pris_ut"], "<br>", "Leverandør ID: ", $row["leverandor_id"], "<br>";
        echo "<br>";
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