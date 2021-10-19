<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body style="background-color:#ff94c9;">
<h1>Oppgave 1 og 2</h1>
<p>Oppgave a) og b)</p>
    
<?php
$minfil = fopen("tekst.txt", "w") or die("Unable to open file!");
$txt = "Vent ikke på lederen. Gjør det selv, person til person. -Mor Theresa\n";
fwrite($minfil, $txt); 
$txt 	= "Før alle av oss har oppnådd målet har ingen oppnådd noe. - Rosemary Brown\n";
fwrite($minfil, $txt);
$txt 	= "Skal man lede et orkester må man være villig til å vende ryggen til publikum. - Max Lucado\n";
fwrite($minfil, $txt);  
$txt 	= "En hær av sauer ledet av en løve vil slå en hær av løver ledet av en sau. - Arabisk ordtak\n";
fwrite($minfil, $txt);  
$txt 	= "Et liv brukt på feiltak er bedre enn et liv brukt på ingenting. - George Bernhard Shaw\n";
fwrite($minfil, $txt);  
$txt 	= "Se over skulderen din og sørg for at noen følger etter deg. - Henry Gilmer\n";
fwrite($minfil, $txt);  
$txt 	= "For å lede et folk er det best å gå bak dem. - Lao Tzu\n";
fwrite($minfil, $txt);  
$txt 	= "Han som aldri har lært å følge ordre kan aldri bli en god leder. - Aristotles\n";
fwrite($minfil, $txt);  
$txt 	= "Umulig er et ord som kun finnes i idioters ordbøker. - Napoleon\n";
fwrite($minfil, $txt);  
$txt 	= "Hvis de blinde leder de blinde vil alle ende i grøfta. - Jesus Kristus\n";
fwrite($minfil, $txt);  
fclose($minfil);

$minfil = fopen("tekst.txt", "r");

while ($linje = fgets($minfil)){
    echo $linje . "<br />";
}

fclose($minfil)
?> 

<h1>Oppgave 2</h1>
    
<?php
$arr = array("Vent ikke på lederen. Gjør det selv, person til person. -Mor Theresa", 
"Før alle av oss har oppnådd målet har ingen oppnådd noe. - Rosemary Brown",
"Skal man lede et orkester må man være villig til å vende ryggen til publikum. - Max Lucado",
"En hær av sauer ledet av en løve vil slå en hær av løver ledet av en sau. - Arabisk ordtak",
"Et liv brukt på feiltak er bedre enn et liv brukt på ingenting. - George Bernhard Shaw",
"Se over skulderen din og sørg for at noen følger etter deg. - Henry Gilmer",
"For å lede et folk er det best å gå bak dem. - Lao Tzu",
"Han som aldri har lært å følge ordre kan aldri bli en god leder. - Aristotles",
"Umulig er et ord som kun finnes i idioters ordbøker. - Napoleon",
"Hvis de blinde leder de blinde vil alle ende i grøfta. - Jesus Kristus");
echo $arr[array_rand($arr)]


?> 









<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>  
</body>
</html>