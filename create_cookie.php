<?php
    $nome = 'cookieee';
    $valor = 'valor_do_meu_cookie';
    $tempo = 3600;
    setcookie($nome, $valor, time() + $tempo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'nav.php';?>
    <h3>Meu cookie foi definido com sucesso</h3>
</body>
</html>