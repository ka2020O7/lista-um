
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
    <button type="submit" name="verificar_amigos">Verificar Números Amigos</button>
</form>

<?php
function somaDivisores($n) {
    $soma = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

function NumerosAmigos($a, $b) {
    return somaDivisores($a) == $b && somaDivisores($b) == $a;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_amigos'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (NumerosAmigos($num1, $num2)) {
        echo "$num1 e $num2 são números amigos.";
    } else {
        echo "$num1 e $num2 não são números amigos.";
    }
}
?>
</body>
</html>
