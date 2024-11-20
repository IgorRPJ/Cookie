<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <?php
        $valor = "[nao existe cookie]";
        if(!empty($_COOKIE['cookieee'])){
            $valor = $_COOKIE['cookieee'];
        }
        require_once 'nav.php';
    ?>
    <h3>o valor do cookie é: <?= $valor?></h3>
</body>
</html>