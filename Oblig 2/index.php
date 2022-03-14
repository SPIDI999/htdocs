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
      <form action="index.php" method="POST">
      <li><a><input type="radio" Name="gender" value="male"> Mann<br></a></li>
      <li><a><input type="radio" Name="gender" value="female"> Dame<br></a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Dine Opplysninger</h1>
    <p><input type="text" name="name" required> Ditt navn<br></p>
    <!--Height in meter-->
    <p><input type="text" name="height" required> Høyde<br></p>
    <!--Mass in kilogram-->
    <p><input type="text" name="weight" required> Vekt<br></p>
    <input type="submit" name="submit" value="submit">

    <?php

if (isset($_POST["name"]) && isset($_POST["height"]) && isset($_POST["weight"]) && isset($_POST["gender"])){

    $name = $_POST["name"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $gender = $_POST["gender"];
    $bmi = $weight / ($height * $height);

if($gender =="male"){

if($bmi < 18.5){
 echo "$name du ekke en kvinne, spis mer ellers så blir du en pinne";
}

else if($bmi >=18.5 && $bmi <= 25){
 echo  "$name du ser greit ut, men du kan bygge mer muskler";
}

else if($bmi >25 && $bmi <=30){
 echo  "$name, på tide å ta en eller ti joggeturer";
}

else{
 echo  "$name, hvor fort ruller du til skolen?";
}
    }

    if($gender =="female"){

        if($bmi < 18.5){
         echo "$name, du burde ha spist litt mer idag";
        }
        
        else if($bmi >=18.5 && $bmi <= 25){
         echo  "$name, du har superfin vekt";
        }
        
        else if($bmi >25 && $bmi <=30){
         echo  "$name, la vare den isen neste gang";
        }
        
        else{
         echo  "$name, du vil ikke finne deg en mann";
        }
            }
}
?>


  </article>
</section>

<img src="/img/BMI.png" width="832" height="225"/><img src="/img/BMI2.png" width="832" height="225"/>


<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>
</body>
</html>
