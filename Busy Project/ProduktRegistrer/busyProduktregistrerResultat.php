<?php require "../SQL.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Insert vare</title>

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
        <a href="busySlettProdukt.php">Slett varen din</a>
        <a href="busySokProdukt.php">Finn varen din</a>
        <a href="busyUpdateProduktVelg.php">Oppdater produktet ditt</a>

    </header>

    <section>
        <article>
            <form action="busyProduktregistrerResultat.php" method="POST">
            <h1>Registrer produktet ditt </h1>
            <br>Produkt Navn</br>
            <input type="text" name="navn" required>
            <br>Produktbetegnelse</br>
            <input type="text" name="produktbetegnelse" required>
            <br>Pris INN</br>
            <input type="text" name="pris_inn" required>
            <br>Pris UT</br>
            <input type="text" name="pris_ut" required></br>
            <input type="submit" name="submit" value="Send inn">

            <select name="firma">
                <?php
                    $mysqli = new mysqli("localhost","root","","tsb");

                    if ($mysqli -> connect_error) {
                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                        exit();}
                        
                    $query = "SELECT `id`, `navn` FROM `firma`";

                    $result = $mysqli->query($query);

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["id"] . "'>" . $row["navn"] . "</option>";
                        }
                    }
                ?>
            </select>
        </article>
    </section>

    </br>

    <?php
        if (isset($_POST["navn"]) && isset($_POST["produktbetegnelse"]) && isset($_POST["pris_inn"]) && isset($_POST["pris_ut"]) && isset($_POST["firma"])){
            $navn = $_POST["navn"];       echo $navn . " ";
            $produktbetegnelse = $_POST["produktbetegnelse"];   echo $produktbetegnelse . ", ";
            $pris_inn = $_POST["pris_inn"];       echo $pris_inn . ", ";
            $pris_ut = $_POST["pris_ut"];           echo $pris_ut . ", ";
            $firma = $_POST["firma"];           echo $firma . " ";
            
            $produktregistrer = 'INSERT INTO produktregistrer (navn, produktbetegnelse, pris_inn, pris_ut, leverandor_id) VALUES("'.$navn.'","'.$produktbetegnelse.'","'.$pris_inn.'","'.$pris_ut.'","'.$firma.'")';

            $mysqli->query($produktregistrer);
        }
    ?>

</body>
</html>