<!-- 2 -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method ="POST" action="">
    <label for="tabuada_numero">Tabuada numero:</label>
    <input type="number" id="tabuada_numero" name = "tabuada_numero" required>
    <button type="submit" name = "fazer_tabuada"> Tabuada</button>
    </form>
</body>

<?php

    function fazerTabuada ($numero) {
    if ($numero > 0 and $numero < 11)
     { 
        for ($i = 0 )   
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fazer_tabuada'])){
    
    
    }
?>


</html>
