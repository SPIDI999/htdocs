<?php 

if ($_GET['submit']) { 

$mass = $_GET['mass'];
$height = $_GET['height'];

function bmi($mass,$height) {
$bmi = $mass/($height*$height);
return $bmi;
} 

$bmi = bmi($mass,$height);
if ($bmi <= 18.5) {
$output = "Under Weight";}

else if ($bmi > 18.5 AND $bmi<=25 ) {
$output = "Normal Weight";}

else if ($bmi > 25 AND $bmi<=30) {
$output = "Over Weight";} 

else if ($bmi > 30.0) {
$output = "OBESE";}

echo "Your BMI value is " . $bmi . " and you are : "; 
echo "$output";
}
?>