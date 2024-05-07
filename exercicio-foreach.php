<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio foreach</title>
</head>
<body>
<style>
p {
    background-color: #FFF8DC;
}
</style>
    <?php


    
    $aluno1["nome"] = "livia";
    $aluno1["idade"] = 17;
    $aluno1["endereço"] = "Um Lugar";
    $aluno1["cidade"] = "Guanambi";
    $aluno1["estado"] = "Bahia";
    $aluno1["cpf"] = "001";
    
    $aluno2["nome"] = "yngrid";
    $aluno2["idade"] = 17;
    $aluno2["endereço"] = "Um Lugar";
    $aluno2["cidade"] = "Montalvânia";
    $aluno2["estado"] = "Minas Gerais";
    $aluno2["cpf"] = "002";
    
    $professor["nome"] = "Fábio";
    $professor["idade"] = 30;
    $professor["endereço"] = "Um Lugar";
    $professor["cidade"] = "Guanambi";
    $professor["estado"] = "Bahia";
    $professor["cpf"] = "003";
    
    echo "<p> Aluno 1: </p>";
    foreach ($aluno1 as $x) {
        echo  key($aluno1) . ": $x  <br>";
        next($aluno1);
    }
    echo "<br><p>Aluno 2: </p><br>";
    foreach ($aluno2 as $x) {
        echo  key($aluno2) . ": $x  <br>";
        next($aluno2);
    }
    echo "<br><p>Professor: </p> <br>";
    foreach ($professor as $x) {
        echo  key($professor) . ": $x  <br>";
        next($professor);
    }
    ?>
</body>
</html>