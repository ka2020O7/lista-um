<!-- 6 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência Fibonacci</title>
</head>
<body>

<form method="POST" action="">
    <label for="numero">Digite um número para gerar a sequência de Fibonacci até ele:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit" name="gerar_fibonacci">Gerar</button>
</form>

<?php

function fibonacciAte($limite) {
    $a = 0;
    $b = 1;

    echo "$a ";
    if ($limite == 0) return;

    while ($b <= $limite) {
        echo "$b ";
        $proximo = $a + $b;
        $a = $b;
        $b = $proximo;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['gerar_fibonacci'])) {
    $numero = $_POST['numero'];
    echo "Sequência de Fibonacci até $numero:<br>";
    fibonacciAte($numero);
}

?>
</body>
</html>
