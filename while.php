<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="while.css">
    <title>Estrutura While</title>
</head>
<body>
    <div class="container3">
        <?php
            $in= $_GET["inicio"];
            $f= $_GET["final"];
            $inc= $_GET["incremento"];
            while ($in < $f){
                $in += $inc;
                echo " $in ";
            }
        ?>
        <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>