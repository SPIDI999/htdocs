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
include("class_lib.php"); 

$elev1 = new Person("Sander", 18, 78915368, "sanderc@viken.no", "3DAA", "Jon Myrvoll");
echo "Navn:".$elev1->get_navn(). "<br>";
echo "Han er:".$elev1->get_alder(). "ar<br>";
echo "Hans sitt nummer er:".$elev1->get_mobil(). "<br>";
echo "Mail:".$elev1->get_epost(). "<br></br>";
#echo "Studentnummeret:".$elev1->get_studentnum(). "<br>";

$elev2 = new Person("Linus", 18, 78915368, "linusg@viken.no", "3DAA", "Jon Myrvoll");
echo "Navn:".$elev2->get_navn(). "<br>";
echo "Han er:".$elev2->get_alder(). "ar<br>";
echo "Hans sitt nummer er:".$elev2->get_mobil(). "<br>";
echo "Mail:".$elev2->get_epost(). "<br></br>";
#echo "Studentnummeret:".$elev2->get_studentnum(). "<br>";

$elev3 = new Person("Sevastian", 18, 78915368, "sebastian@viken.no", "3DAA", "Jon Myrvoll");
echo "Navn:".$elev3->get_navn(). "<br>";
echo "Han er:".$elev3->get_alder(). "ar<br>";
echo "Hans sitt nummer er:".$elev3->get_mobil(). "<br>";
echo "Mail:".$elev3->get_epost(). "<br></br>";
#echo "Studentnummeret:".$elev3->get_studentnum(). "<br>";

?>
<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>  
</body>
</html>