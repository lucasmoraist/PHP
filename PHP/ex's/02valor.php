<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML e PHP</title>
</head>
<body>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
    $year = $_GET["year"];
    $sex = $_GET["sex"];

    $age = date("Y") - $year;

    echo "Olá $nome, você tem $age anos e seu sexo é $sex!";

    ?>
    <a href="ex02.html">Voltar</a>
</body>
</html>