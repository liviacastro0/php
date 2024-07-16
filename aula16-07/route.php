<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 function rotas($url) {
 $dados = explode("/", $url);
 // CADASTRAR
 if(strcmp($dados[0], "cadastrar") == 0) {
 echo "<script> alert('cadastrar') </script>";
 }
// ALTERAR
 else if(strcmp($dados[0], "alterar") == 0) {
 echo "<script> alert('alterar') </script>";
}
// REMOVER
 else if(strcmp($dados[0], "remover") == 0){
 echo "<script> alert('remover') </script>";
} }
?> 
</body>
</html>