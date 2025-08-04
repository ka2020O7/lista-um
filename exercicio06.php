
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
    <label for="numero">Digite um número para ver os divisores:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit" name="verificar_divisores">Verificar</button>
</form>

<?php

function exibirDivisores($numero) {
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo $i . "<br>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_divisores'])) {
    $numero = $_POST['numero'];
    echo "Divisores de $numero:<br>";
    exibirDivisores($numero);
}

?>
</body>
</html>
