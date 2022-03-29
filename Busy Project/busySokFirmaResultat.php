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
    </header>

    <section>
        <article>
            <form action="busySokFirmaResultat.php" method="POST">
            <h1>Finn firmaen din </h1>
            <input type="text" name="firmanavn" required>
            <input type="submit" name="submit" value="Send inn">
        </article>
    </section>


    <?php
    
    $firmanavn = $_POST["firmanavn"];
    $mysqli = new mysqli("localhost","root","","tsb");

    
    
    $result = $mysqli->query("select * from firma where navn like '%{$firmanavn}%' order by navn");

    while($row = $result->fetch_assoc()){
        echo " ";
        echo "Orgnummer: ", $row["orgnummer"], "<br>", "Firmanavn: ", $row["navn"], "<br>", "Adresse: ", $row["adresse"], "<br>", "Telefon: ", $row["telefon"], "<br>", "Postnummer: ", $row["postnummer"], "<br>";
    }
    //HERE BITCHES

    // Check connection
    if ($mysqli -> connect_error) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    ?>
    


</body>
</html>