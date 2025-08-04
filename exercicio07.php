<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
    <label for="numero">Digite um número para verificar se é perfeito:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit" name="verificar_perfeito">Verificar</button>
</form>

<?php

function NumeroPerfeito($numero) {
    $soma = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }
    return $soma == $numero;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_perfeito'])) {
    $numero = $_POST['numero'];

    if (NumeroPerfeito($numero)) {
        echo "$numero é um número perfeito.";
    } else {
        echo "$numero não é um número perfeito.";
    }
}

?>
</body>
</html>
