<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style Side, Fin Nettside</title>
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

footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
@media (max-width: 600px) {
nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>


<body style="background-color:orange;">

<h2>CSS med Melvin</h2>
<p>Her er dokumentert historien til Melvin</p>
<p>Les for å bli med til Melvin sine hemmlige rotter</p>

<header>
  <h2>Melvin</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="Layout2.php">Melvin's Historie, Side 2</a></li>
      <li><a href="Layout3.php">Melvin's Historie, Side 3</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Melvin's Historie, Side 1</h1>
    <p>Melvin er en rotte</p>
    <p>Men ikke en normal rotte, en rotte uten hår</p>
  </article>
</section>

<footer>
  <p>La Melvin være med deg, Amen.</p>
</footer>


<a href="index.php">Forside</a>    
</body>
</html>