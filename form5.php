<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSS</title>
</head>
<body>
    <h2>Insira o salário para calcular os descontos</h2>
    <form action="resultado5.php" method="GET">
        <h3>Salário Bruto em R$: 
            <input id="n" type="number" name="salario" min="1" step="0.01" placeholder="0.00" required />
        </h3>
            <input id="calc" type="submit" value="calcular"/>
</body>
</html>
