<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<h1>
    <?php
    $nome = "Thiago";
    $sobrenome = "Alves Bastos";
    const PAIS = "Brasil";

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    ?>
</h1>
</body>
</html>