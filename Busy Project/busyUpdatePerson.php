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
            <br>Fornavn</br>
            <input type="text" name="fornavn" required>
            <br>Etternavn</br>
            <input type="text" name="etternavn" required>
            <br>Telefon</br>
            <input type="text" name="telefon" required>
            <br>Epost</br>
            <input type="text" name="epost" required></br>
            <input type="submit" name="submit" value="Oppdater">

            <select name="personer">
            <?php
            $mysqli = new mysqli("localhost","root","","tsb");

            if ($mysqli -> connect_error) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();}
    
            $query = "SELECT `id`, `fornavn`, `etternavn` FROM `personer`";
            

            $result = $mysqli->query($query);

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["id"] . "'>" . $row["fornavn"] . " " . $row["etternavn"] . "</option>";
                        }
                    }
            ?>
            </select>

        </article>
    </section>

    


</body>
</html>