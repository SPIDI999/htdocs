<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busy Project, Finn varen din</title>

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
            <h1>Finn varen din</h1>
            <br>Produkt Navn</br>
            <input type="text" name="varenavn">
            <br>Produktbetegnelse</br>
            <input type="text" name="produktbetegnelse">
            <br>Leverandør ID</br>
            <input type="text" name="leverandor_id"></br>
            <input type="submit" name="submit" value="Søk">
        </article>
    </section>

    

    


</body>
</html>