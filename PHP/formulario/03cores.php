<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 03</title>
    <style>
        .texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <br>
    <a href="ex03.html">voltar</a>
</body>
</html>