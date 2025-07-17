<!-- 1 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form method="POST" action="">
        <label for="numero">Verifica se é um número impar ou par:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>
    

    <?php

    function verificarParouImpar ($numero) {
    if ($numero % 2 == 0) {
        $ehPar = "Par";
    }else{
        $ehPar = "Impar";
    };
    return $ehPar ;
    }



    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_par'])){
    $numero = $_POST['numero'];
    echo verificarParouImpar($numero);
};

?>