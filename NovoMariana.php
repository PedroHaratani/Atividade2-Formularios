<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST">
        <label>Quem está contando?</label>
        <input type="text" name="nome"><br>
        <label>Ate quanto vai contar?</label>
        <select name="numeros" id="numeros">
            <?for($i = 1; $i <= 99; $i++){?>
                <option><?=$i?></option>
              <?}?>
        </select><br>
        <label>Realizar contagem interna?</label>
        <input name="verifica" type="radio" value="Sim" id="verifica">
        <input name="verifica" type="radio" value="Não" id="verifica"><br>
        <input type="submit" name="Contar">
    </form>
</body>
</html>