<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Oppdater Person</title>

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
        <a href="busyFirma.php">Insert Firma</a>
        <a href="busyPerson.php">Insert Person</a>
        <a href="busySokFirma.php">Søk Firma</a>
        <a href="busySokPerson.php">Søk Person</a>
        <a href="busySlettFirma.php">Slett Firma</a>
        <a href="busySlettPerson.php">Slett Person</a>
        <a href="busyUpdateFirma.php">Oppdater Firma</a>
    </header>

    <section>
        <article>
            <form action="busyUpdatePersonResultat.php" method="POST">
            <h1>Oppdater personalia dine</h1>

            <?php
                $mysqli = new mysqli("localhost", "root", "", "tsb");
                $personer = $_POST["personer"];
                $resultat = $mysqli->query("SELECT * FROM `personer` WHERE `id` = $personer");

                $row = $resultat->fetch_assoc();

                echo "<input type='hidden' name='personer' value='" . $row["id"] . "'>";
                echo "Fornavn </br>";
                echo "<input type='input' name='fornavn' value='" . $row["fornavn"] . "'></br>" . " ";
                echo "Etternavn </br>";
                echo "<input type='input' name='etternavn' value='" . $row["etternavn"] . "'></br>" . " ";
                echo "Telefon Kunde </br>";
                echo "<input type='input' name='telefon' value='" . $row["telefon"] . "'></br>" . " ";
                echo "Epost </br>";
                echo "<input type='input' name='epost' value='" . $row["epost"] . "'></br>" . " ";
                
            ?>

            <input type="submit" name="submit" value="Oppdater">

        </article>
    </section>

    


</body>
</html>