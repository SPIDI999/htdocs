<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#6A3B3B;">
    
<?php
    $SQL = new mysqli("localhost", "root", "", "cia");

    if($SQL->connect_error) {
        die('Connection failed: ' . $SQL->connect_error);
    }

    $res = $SQL->query("SELECT * FROM `cia`");

    if($res->num_rows > 0) {
        echo "<ul>";

        while($row = $res->fetch_assoc()) {
            echo "<li>Name: " . $row["name"] . "</li>";
        }
        echo "</ul>";
    }
?>

<h2><p><a href="../../index.php">Tilbake til hovedsiden</a></p></h2>  
</body>
</html>

















