<!-- 2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="POST" action="">
        <label for="tabuada_numero">Tabuada do número:</label>
        <input type="number" id="tabuada_numero" name="tabuada_numero" required>
        <button type="submit" name="fazer_tabuada">Calcular Tabuada</button>
    </form>

    <?php
    function fazerTabuada($numero) {
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fazer_tabuada'])) {
        $numero = intval($_POST['tabuada_numero']);
        if ($numero > 0 && $numero <= 10) {
            fazerTabuada($numero);
        } else {
            echo "digite um número entre 1 e 10.";
        }
    }
    ?>
</body>
</html>
