<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<h1>Oppgave 8</h1>
<form action="resultat.php" method="post">
        <input type="text" id="tall1" name="tall1"> Skriv inn tall nr 1<br>
        <input type="text" id="tall2" name="tall2"> Skriv inn tall nr 2<br>
        <ul>
            <label for="op">Matematisk operatorer</label>  
                <select id="op" name="op">
                    <a><option value="+"> +</option></a>
                    <a><option value="-"> -</option></a>
                    <a><option value="*"> *</option></a>
                    <a><option value="/"> /</option></a>
                    <a><option value="^2"> ^2</option></a>
                </select>
        </ul>
        <input type="submit" value="submit">
    
        
</body>
</html>