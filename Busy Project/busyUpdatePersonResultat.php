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

            <?php 
                $mysqli = new mysqli("localhost","root","","tsb");

                if ($mysqli -> connect_error) {
                    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                    exit();
        
                }

                if (isset($_POST["fornavn"]) && isset($_POST["etternavn"]) && isset($_POST["telefon"]) && isset($_POST["epost"])){
                
                    $fornavn = $_POST["fornavn"];       
                    $etternavn = $_POST["etternavn"];   
                    $telefon = $_POST["telefon"];       
                    $epost = $_POST["epost"];           
                    $personer = $_POST["personer"];
                
                    $query = "UPDATE `personer` SET fornavn = '$fornavn', etternavn = '$etternavn', telefon = '$telefon', epost = '$epost' WHERE id = $personer";
                    

                    if ($mysqli->query($query) == TRUE) {
                        header("Location: ".$_SERVER['PHP_SELF']);
                    } else {
                        echo 'Failed to update';
                    }

                    


                }
            ?>
            <article>
                <form action="busyUpdatePersonResultat.php" method="POST">
                    <h1>Personalia dine er oppdatert</h1>
                    <a href="busyUpdatePersonVelg.php">Trykk her for å oppdatere en ny person</a>

                    
            </article>
        </section>
    </body>
</html>