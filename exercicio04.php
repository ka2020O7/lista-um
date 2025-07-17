<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada e Fatorial</title>
</head>
<body>
    <form method="POST" action="">
        <label for="tabuada_numero">Informe um número:</label>
        <input type="number" id="tabuada_numero" name="tabuada_numero" required>
        <button type="submit" name="fazer_tabuada">Verificar</button>
    </form>

    <?php
    if (isset($_POST['fazer_tabuada'])) {
        $numero = intval($_POST['tabuada_numero']);

        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        echo "Fatorial de $numero:";
        echo "$numero! = $fatorial";
    }
    ?>
</body>
</html>
