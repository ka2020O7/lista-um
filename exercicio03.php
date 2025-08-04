<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="tabuada_numero">Informe um número:</label>
        <input type="number" id="tabuada_numero" name="tabuada_numero" required>
        <button type="submit" name="fazer_tabuada">Verificar</button>
    </form>


</body>
</html>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fazer_tabuada'])) {
        $numero = floatval($_POST['tabuada_numero']);

        if ($numero > 0) {
            echo "O número $numero é positivo";
        } elseif ($numero < 0) {
            echo "O número $numero é negativo";
        } else {
            echo "O número é zero";
        }
    }
    ?>