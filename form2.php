<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média das Notas</title>
</head>
<body>
     <h1>Média das Notas</h1>
<!-- <form action="resultado1.php" method="GET"> -->
        <form action="resultado2.php" method="POST">
    <h3 id="nota">Nota 1 :
        <input id="n" type="number" name="n1" min="0" max="10" required/></h3>
    <h3 id="nota">Nota 2 :
        <input id="n" type="number" name="n2" min="0" max="10" required/></h3>
    <h3 id="nota">Nota 3 :
        <input id="n" type="number" name="n3" min="0" max="10" required/></h3>
    
    <input id="calc" type="submit" value="Calcular"/>
    </form>
</body>
</html>