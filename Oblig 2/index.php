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
      <li><a>Melvin's Historie, Side 1</a></li>
      <li><a>Melvin's Historie, Side 2</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Melvin's Historie, Side 3</h1>
    <p>Elsk Melvin, for han elsker deg</p>
    <p>Elsk hverandre, for han elsker dere</p>
  </article>
</section>

<img src="/img/BMI.png" width="832" height="225"/><img src="/img/BMI2.png" width="832" height="225"/>






<h2><p><a href="../index.php">Tilbake til hovedsiden</a></p></h2>
</body>
</html>