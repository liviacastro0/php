<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade arrays</title>
</head>
<body>
<style>
p {
    background-color: #FFF8DC;
}
</style>

<!-- style=\"color:#FFF8DC\" -->

<?php
$aluno = array( "nome" => "Fabio S", 
"idade" => 30, 
"end" => "rua x", 
"cidade"=> "febiane",
"estado"=> "BA", 
"cpf"=> "000.000.000-20");

echo "<p> Aluno 1 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["cpf"] . "<br>";

echo "<br>";

$aluno1 = array( "nome" => "fabio", 
"idade" => 17, 
"end" => "rua z", 
"cidade"=> "fabixx",
"estado"=> "BA", 
"cpf"=> "000.000.000-10");

echo "<p> Aluno 2 </p>" ;

echo $aluno1["nome"] ."<br>";
echo $aluno1["idade"] ."<br>";
echo $aluno1["end"] . "<br>";
echo $aluno1["cidade"] . "<br>";
echo $aluno1["estado"] . "<br>";
echo $aluno1["cpf"] . "<br>";

echo "<br>";


$aluno2 = array( "nome" => "levea", 
"idade" => 18, 
"end" => "rua a", 
"cidade"=> "disney",
"estado"=> "BA", 
"cpf"=> "000.000.000-22");

echo "<p> Aluno 3 </p>" ;

echo $aluno2["nome"] ."<br>";
echo $aluno2["idade"] ."<br>";
echo $aluno2["end"] . "<br>";
echo $aluno2["cidade"] . "<br>";
echo $aluno2["estado"] . "<br>";
echo $aluno2["cpf"] . "<br>";

echo "<br>";


$professor = array( "nome" => "Fabio", 
"idade" => 29, 
"end" => "rua y", 
"cidade"=> "Caetite",
"estado"=> "BA", 
"cpf"=> "000.000.001-20");

echo "<p> Professor </p>" ;

echo $professor["nome"] ."<br>";
echo $professor["idade"] ."<br>";
echo $professor["end"] . "<br>";
echo $professor["cidade"] . "<br>";
echo $professor["estado"] . "<br>";
echo $professor["cpf"] . "<br>";

?>
</body>
</html>