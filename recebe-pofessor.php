<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prof.css">
</head>

<body>
    <div class="header">
        <img src="borboleta.png" alt="Imagem de Uma borboleta"> </img>
        <nav>
            <a href="./aluno.html"> aluno </a>
            <a href="./professor.html"> professor</a>
            <a href="./index.html"> home</a>
            <a href="./lista-aluno.html"> lista </a>
        </nav>
        <img src="borboleta.png" alt="Imagem de Uma borboleta"> </img>
    </div>
    <div class="main">
    <?php 
     
        echo " o meu nome é" . $_POST['nome'];
        echo "<br>";
        echo " o endereço digitado foi" . $_POST['endereco'];
        echo "<br>";
        echo " a cidade digitada foi" . $_POST['Cidade'];
        echo "<br>";
        echo " o estado digitado foi" . $_POST['Estado'];
        echo "<br>";
        echo "meu local de trabalho é" . $_POST['loctrab'];
        echo "<br>";
       
     ?>
     
                    </div>
                
                <footer>rodape</footer>
        
        </html>