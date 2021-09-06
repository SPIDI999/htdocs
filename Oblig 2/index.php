<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
    
    header{
    background-color: gray;
    padding: 15px;
    text-align: center;
    font-family: cursive;
    font-size: 20;
    color: whitesmoke;
}

nav{
    float: left;
    width: 25%;
    height: 250px;
    background: #ccc;
    padding: 20px;
}

nav ul{
    list-style-type: none;
    padding: 0;
}

article{
    float: left;
    padding: 20px;
    width: 75%;
    background-color: #f1f1f1;
    height: 250px;
}

section::after {
  content: "";
  display: table;
  clear: both;
}

@media (max-width: 600px) {
nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>


<body style=background-color:cyan;>

<header>
  <h2>BMI Kalkulator</h2>
</header>

<section>
  <nav>
    <ul>
      <form action="bmi.php" method="GET">
      <li><a><input type="radio" name="gender" value="male"> Mann<br></a></li>
      <li><a><input type="radio" name="gender" value="female"> Dame<br></a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Dine Opplysninger</h1>
    <p><input type="text" name="name" required> Ditt navn<br></p>
    <!--Height in meter-->
    <p><input type="text" name="height" required> Høyde<br></p>
    <!--Mass in kilogram-->
    <p><input type="text" name="mass" required> Vekt<br></p>
    <input type="submit" name="submit" value="Submit">
  </article>
</section>

<img src="/img/BMI.png" width="832" height="225"/><img src="/img/BMI2.png" width="832" height="225"/>


<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>
</body>
</html>



<!--

if (isset($_POST["name"]) && (isset($_POST["height"]) && (isset($_POST["weight"]) && (isset($_POST["gender"])){
$navn = $_POST["name"];
$hoyde = $_POST["height"];
$vekt = $_POST["weight"];
$kjonn = $_POST["gender"];
$bmi = $weight / ($height * $height);
$message = "";

if($bmi < 18.5){
 $message = "Du er undervektig";
}
else if($bmi >=18.5 && $bmi <= 25){
 $message = "Du har normal vekt";
}
else if($bmi >25 && $bmi <=30){
 $message = "Du er overvektig";
}
else{
 $message = "Fedme";
}

$output = array(
  "bmi"=>$bmi,
  "message"=>$message
);


}
?>
-->