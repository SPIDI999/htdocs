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

            <?php 
                $mysqli = new mysqli("localhost","root","","tsb");

                if ($mysqli -> connect_error) {
                    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                    exit();
        
                }

                if (isset($_POST["navn"]) && isset($_POST["produktbetegnelse"]) && isset($_POST["pris_inn"]) && isset($_POST["pris_ut"]) && isset($_POST["leverandor_id"])){
                
                    $navn = $_POST["navn"];       
                    $produktbetegnelse = $_POST["produktbetegnelse"];   
                    $pris_inn = $_POST["pris_inn"];       
                    $pris_ut = $_POST["pris_ut"];  
                    $leverandor_id = $_POST["leverandor_id"];          
                    $produktregistrer = $_POST["produktregistrer"];
                
                    $query = "UPDATE `produktregistrer` SET navn = '$navn', produktbetegnelse = '$produktbetegnelse', pris_inn = '$pris_inn', pris_ut = '$pris_ut', leverandor_id = '$leverandor_id' WHERE id = $produktregistrer";
                    

                    if ($mysqli->query($query) == TRUE) {
                        header("Location: ".$_SERVER['PHP_SELF']);
                    } else {
                        echo 'Failed to update';
                    }

                    


                }
            ?>
            <article>
                <form action="busyUpdateProduktResultat.php" method="POST">
                    <h1>Produktet ditt er oppdatert</h1>
                    <a href="busyUpdateProduktVelg.php">Trykk her for å oppdatere en ny produkt</a>

                    
            </article>
        </section>
    </body>
</html>