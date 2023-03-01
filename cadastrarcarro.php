<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <h1>Seja bem vindo cadastro de carro </h1>
    
    <form action="salvarcarro.php" method="POST">
        <label for="modelo">Modelo do carro:</label><br>
        <input type="text" id="modelo" name="modelo" value="Sandero"><br>
        <label for="marca">Marca:</label><br>
        <input type="text" id="marca" name="marca" value="Renault"><br>
        <label for="ano">Ano</label><br>
        <input type="number" id="ano" name="ano" value="2023"><br>
        <label for="preco">Preço</label><br>
        <input type="float" id="preco" name="preco" value="80.590.00"><br>
        <label for="cor">cor</label><br>
        <input type="text" id="cor" name="cor" value="prata"><br>
        <label for="categorias">Categorias</label>
        <select name="categorias" id="categorias"> 
            <option value="sedan">Sedan</option>
            <option value="hatch">hatch</option>
        </select> <br>
        <label for="situacao">Usado</label>
        <input type="radio" name="situacao" value="usado"><br>
        <label for="situacao">Novo</label>
        <input type="radio" name="situacao" value="Novo"><br>
        <input type="submit" value="Enviar">
    </form>
   
</body>
</html>