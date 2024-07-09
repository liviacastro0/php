<!DOCTYPE html>
    

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lista</title>
    
    </head>
    <style>
        
    
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    
    </style>
    
    
    <body>
    
    
    <h2>Lista de Produtos</h2>
    
    <table>
    
      <tr>
        <th>Produto</th>
        <th>Marca</th>
        <th>Tamanho</th>
        <th>Cor</th>
        <th>Gênero</th>
        <th>Modelo</th> 
        <th>Data da Venda</th>
        <th>Preço de Venda</th>
        <th>Preço de Compra</th> 
      </tr>
    
      <tr>
      <td><?php echo $_POST['nome'];?></td>
      <td><?php echo $_POST['CPF'];?></td>
     
      </tr>
    
    
    
    </table>
    
    
    </body>
    </html>