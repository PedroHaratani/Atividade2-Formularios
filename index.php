<?php
    
    $nome=$_POST['nome'];
    $numeros=$_POST['numeros'];
    $contagem=$_POST['verifica'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        for($i=1;$i<$numeros;$i++){
    ?>
        <?$nome?><p>conta</p><?$i?><br>
        <?$nome?><p>conta</p><?$i?>
        <?
            if($contagem=="Sim")
            {    
                for($j=1;$j<=$i;$j++){
            
        ?>
                <p>é <?$j?>,</p>
        <?
            
        ?>

    <?
                }
    ?>
    <?
    
            }
    ?>

    <br>
    Ana viva a <?$nome?>, Viva a <?$nome?>
    <?
        }
    ?>

</body>
</html>