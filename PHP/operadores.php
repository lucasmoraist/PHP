<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        //O x está no link da página
        $preco = $_GET["x"];
        echo "O preço é R$" . number_format($preco, 2);
        $preco += ($preco*10/100);
        echo "<br> O preço com aumentou de 10% será R$" . number_format($preco, 2);
        $preco -= ($preco*10/100);
        echo "<br> O preço com desconto de 10% será R$" . number_format($preco, 2);
        
        //Operador Unário
        $a = 1;
        $b = 5;

        $maior = $a>$b ? $a : $b;
        echo "<br> $maior";

    ?>
</body>
</html>