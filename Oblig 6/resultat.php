<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<table border=3 style="border-collapse: collapse;">
    <thead>
        <th>Navn</th>
        <th>Poeng</th>
<?php 
    if(filesize("opg4.txt")> 0){
        $scoreF = fopen("opg4.txt", "r");
        $poengL = 100;  #Lavest
        $poengH = 0;    #Hoyest
        $poengA = 0;    #Antall
        $poengS = 0;    #Sum
    
        while(!feof($scoreF)){
            $score = explode(";", fgets($scoreF));
            if(isset($score[1])){
                if($score[1] < $poengL) $poengL = $score[1];
                if($score[1] > $poengL) $poengL = $score[1];
            $poengS += (int)$score[1];
            $poengA++;
    
            echo "<tr>";
            echo "<td> $score[0] </td>";
            echo "<td> $score[1] </td>";
            echo "<tr>";
            }
        }
        echo "<tr>";
        echo "<td> Gjennomsnitt </td>";
        echo "<td>".($poengS/$poengA)."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td> Laveste poengsum</td>";
        echo "<td>".($poengL)."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td> Hoyeste poengsum</td>";
        echo "<td>".($poengH)."</td>";
        echo "</tr>";
    }
    else{
        echo "No data";

}
?>
</thead>
</table>


<h2><p><a href="index.php">Tilbake til Oblig 6</a></p></h2> 
</body>
</html>