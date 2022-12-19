<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML e PHP</title>
</head>
<body>
    <?php
        $num = $_GET["num"];
        $raiz = sqrt($num);
        echo "A raiz quadrada de $num é igual a " . number_format($raiz,2);
    ?>
    <a href="ex01.html">Voltar</a>
</body>
</html>