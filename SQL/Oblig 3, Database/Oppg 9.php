<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#525252;">
<h1>Skriv inn Land</h1>
<form action="Oppg 9.php" method="POST">
            <input type="text" id="land" name="name" > Ditt land<br>
            <a><input type="submit" value="submit"></a>
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["name"])) {
            $SQL = new mysqli("localhost", "root", "", "cia");

            if($SQL->connect_error) {
                die('Connection failed: ' . $SQL->connect_error);
            }

            $res = $SQL->query('SELECT * FROM `cia` WHERE `name` LIKE "%' . $_POST["name"] . '%" ORDER BY `name`');

            if($res->num_rows > 0) {
                echo '<table border=1 style="border-collapse: collapse;">';
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>Name</th>";
                            echo "<th>Region</th>";
                            echo "<th>Area (km²)</th>";
                            echo "<th>Population</th>";
                            echo "<th>GDP</th>";
                        echo "</tr>";
                    echo "</thead>";

                    echo "<tbody>";
                    while($row = $res->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["region"] . "</td>";
                            echo "<td>" . $row["area"] . "</td>";
                            echo "<td>" . $row["population"] . "</td>";
                            echo "<td>" . $row["gdp"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                echo "</table>";
            }
        }
    }

?>



<h2><p><a href="../../index.php">Tilbake til hovedsiden</a></p></h2>  
</body>
</html>


