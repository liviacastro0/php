<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Atividade</h2>
    <pre>
        <?php
        echo"<br>";
        $alunos_notas = array(
        array("nome" => "Kesia", "nota" => 9.2),
        array("nome" => "Catarina", "nota" => 3.0),
        array("nome" => "anica", "nota" => 4.0),
        array("nome" => "Daniel", "nota" => 7.5),
        array("nome" => "Eduardo", "nota" => 4.5),
        array("nome" => "Fernanda", "nota" => 8.0),
        array("nome" => "Gabriel", "nota" => 5.5),
        array("nome" => "Heloísa", "nota" => 7.2),
        array("nome" => "Igor", "nota" => 3.5),
        array("nome" => "Juliana", "nota" => 7.0)
    );

print_r($alunos_notas);

echo "<h3>Alunos Aprovados:</h3>";
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 7) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}

echo "<br>";

echo "<h3>Alunos Reprovados:</h3>";
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] < 3) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}

echo "<br>";

echo "<h3>Alunos na Final:</h3><br>";
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 3 && $aluno['nota'] <= 7) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?>

    </pre>
</body>
</html>