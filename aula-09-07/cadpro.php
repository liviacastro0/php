<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro com get</title>
</head>
<body>
    <div class="form">
        <form action="listaprod.php" method="GET" >
        <p> produto: <input type="text" name="produto" size="12" multiple /> </p>
       
        <label for="marca">marca</label>
    <select id="marca" name="marca" >
      <option value="miller" >miller</option>
      <option value="calvin klein">calvin klein</option>
      <option value="malwee">malwee</option>
    </select>
        <p> tamanho:</p>
        <select name="tamanho">
            <option value="PP">PP</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
            <option value="GG">GG</option>
            <option value="XG">XG</option>
        </select><br><br>
        
        <p> preço de venda: <input type="number" name="precov" size="12" multiple/> </p>
        
        <p> preço de compra: <input type="number" name="precoc" size="12" multiple/> </p>
        <label for="Modelo"> modelo </label>
        <select id="Modelo" name="modelo">
        <option value="Wide leg">Wide leg</option>
        <option value="Jogger">Jogger</option>
        <option value="Skinny">Skinny</option>
        <option value="Pantalona">Pantalona</option>
        <option value="Pantacourt">Pantacourt</option>
        <option value="Flare">Flare</option>
        <option value="Reta">Reta</option>
        <option value="Mom">Mom</option>
        </select>
   
        <p> data de venda: <input type="date" name="datav" /> </p>

        <p> cor: <input type="text" name="cor" size="12" multiple/> </p>

        <p> genero: </p>
        <input type="radio" id="genero_masculino" name="genero" value="Masculino">
        <label for="genero_masculino">Masculino</label><br>

        <input type="radio" id="genero_feminino" name="genero" value="Feminino">
        <label for="genero_feminino">Feminino</label><br>

        <input type="radio" id="unissex" name="genero" value="Infantil">
        <label for="unissex">Unissex</label><br>

        
        <p> <input type="submit" value="Enviar"> </p>
        </form>
    </div>
</body>
</html>