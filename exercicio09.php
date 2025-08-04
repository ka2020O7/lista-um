<!-- 5 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
    <label for="num1">Digite o primeiro número:</label>
    <input type="number" id="num1" name="num1" required>
    <label for="num2">Digite o segundo número:</label>
    <input type="number" id="num2" name="num2" required>
    <button type="submit" name="somar_entre">Calcular Soma</button>
</form>

<?php

function somaEntre($a, $b) {
    $inicio = min($a, $b);
    $fim = max($a, $b);
    $soma = 0;

    for ($i = $inicio; $i <= $fim; $i++) {
        $soma += $i;
    }

    return $soma;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['somar_entre'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $resultado = somaEntre($num1, $num2);
    echo "A soma dos números entre $num1 e $num2 é: $resultado";
}

?>
</body>
</html>
