<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
$minfil = fopen("opg4.txt", "r") or die("Unable to open file!");

while($linje = fgets($minfil)){
    echo $linje . "<br />";
}

fclose($minfil);
?>

<h2><p><a href="index.php">Tilbake til Oblig 6</a></p></h2> 
</body>
</html>