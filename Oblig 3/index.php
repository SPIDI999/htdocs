<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>



<body style="background-color:#FFD38B;">
    <?php 
    $a=3;
    $b=5;
    $c=8;
    $d=false;

    if($a < $b) {
        echo "True";
    }
    else{
        echo "False";
    }  
    ?>

<h1>Oppgave 1</h1>
        <ul>
            <li><b>$a = 3 og $b = 5</b>
                <ul>
                    <li><p>a)	$a < $b - TRUE</p></li>
                    <li><p>b)	$a >= $b - FALSE</p></li>
                    <li><p>c)	$a == $b - FALSE</p></li>
                    <li><p>d)	3 != $a - FALSE</p></li>
                    <li><p>e)	false == false - TRUE</p></li>
                    <li><p>f)	($a + $b) > 7 - TRUE</p></li>
                    <li><p>g)	($b % 3) > 3 - FALSE</p></li>
                    <li><p>h)	($b % 3) >= 0 - TRUE</p></li>
                </ul>
            </li>
        </ul>
    
<h1>Oppgave 2</h1>
        <ul>
            <li><b>$a = 3 og $b = 5</b>
                <ul>
                    <li><p>a)	($a > $b) && ($a+$b == $c) - FALSE</p></li>
                    <li><p>b)	($a > $b) || ($a+$b == $c) - TRUE</p></li>
                    <li><p>c)	!($a > $b) - TRUE</p></li>
                    <li><p>d)	!$d || false - TRUE</p></li>
                    <li><p>e)	($a == 2 || $b == 5) && ($d != ( $a < $b) ) - TRUE</p></li>
                    <li><p>f)	($a > $b) && ( ( ($a == 2 || $b == 5 ) && ($d != ( $a < $b) ) ) != ($d && $d) ) - FALSE</p></li>
                    <li><p>g)	($a < $b) || ( ( ($a == 2 || $b == 5 ) && ($d != ( $a < $b) ) ) != ($d && $d) ); - TRUE</p></li>
                </ul>
            </li>
        </ul>

<h1>Oppgave 3</h1>
    <p>
    <table border="3" width="40%"> 
        <caption>Klasseliste</caption>

        <tbody>
            <tr>
                <td>$x ulik $y</td>
                <td>$x != $y</td>
            <tr>
                <td>$x lik $y</td>
                <td>$x = $y</td>
            <tr>
                <td>$x lik $y ELLER $y ulik $x</td>
                <td>$x = $y || $y != $x</td>
            <tr>
                <td>$x lik $y og $y lik $z, ELLER $z større enn eller lik $x</td>
                <td>$x = $y && $y = $z, || $z >= $x</td>
            <tr>
                <td>$x er større enn $y OG $y er større enn $z</td>
                <td>$x < $y && $y < $z</td>
            <tr>
                <td>$x er lik $y OG $y er lik $z</td>
                <td>$x = $y && $y = $z</td>
            </tr>
        </tbody>
    </table>
</p>

<h1>Oppgave 4</h1>
    <p>Oppgave a) og b)</p>
    <div style='float:left; width:25%'>
        <?php
        $tabell = array(1,3,6,9,11,14,16,18,20,22,25,29,31,36,38,39,42,47,49,50);
            foreach($tabell as $indeks => $verdi)
        {
            echo "$indeks -> $verdi <br/>";
        }
        ?>
    </div>

    <p>Oppgave c)</p>
        <div style='float:left; width:25%'>
            <?php
            $tabell = array(1,3,6,9,11,14,16,18,20,22,25,29,31,36,38,39,42,47,49,50);
            foreach($tabell as $indeks => $verdi)
            {
            if($verdi<25)
            echo "$index -> $verdi <br>";
            }
            ?>
        </div>
    






<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>
</body>
</html>