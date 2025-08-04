<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit" name="contar_pares">Contar Pares</button>
</form>

<?php

function contarPares($numero) {
    $cont = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            $cont++;
        }
    }
    return $cont;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contar_pares'])) {
    $numero = $_POST['numero'];
    $pares = contarPares($numero);
    echo "Existem $pares números pares entre 1 e $numero.";
}

?>
</body>
</html>
