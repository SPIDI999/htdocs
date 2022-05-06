<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Oppdater varen din</title>

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
        <a href="busySokProdukt.php">Finn varen din</a>

    </header>

    <section>
        <article>
            <form action="busyUpdateProduktResultat.php" method="POST">
            <h1>Velg varen du har lyst å oppdatere</h1>

            <?php
                $mysqli = new mysqli("localhost", "root", "", "tsb");
                $produktregistrer = $_POST["produktregistrer"];
                $resultat = $mysqli->query("SELECT * FROM `produktregistrer` WHERE `id` = $produktregistrer");

                $row = $resultat->fetch_assoc();

                echo "<input type='hidden' name='produktregistrer' value='" . $row["id"] . "'>";
                echo "Navn </br>";
                echo "<input type='input' name='navn' value='" . $row["navn"] . "'></br>" . " ";
                echo "Produktbetegnelse </br>";
                echo "<input type='input' name='produktbetegnelse' value='" . $row["produktbetegnelse"] . "'></br>" . " ";
                echo "Pris INN </br>";
                echo "<input type='input' name='pris_inn' value='" . $row["pris_inn"] . "'></br>" . " ";
                echo "Pris UT </br>";
                echo "<input type='input' name='pris_ut' value='" . $row["pris_ut"] . "'></br>" . " ";
                echo "Leverandør ID </br>";
                echo "<input type='input' name='leverandor_id' value='" . $row["leverandor_id"] . "'></br>" . " ";
                
            ?>

            <input type="submit" name="submit" value="Oppdater">

        </article>
    </section>

    


</body>
</html>