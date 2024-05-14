<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1> array-laços </h1>
    <h2> exemplo 01 </h2>

    <pre> 
    <?php
        $A1 = array ("antonio ", "luiz ", "jose ", "joao ");
        echo $A1[0] . "<br>";
        echo $A1[1] . "<br>";
        echo $A1[2] . "<br>";
        echo $A1[3] . "<br>";
        ?>
</pre>

<h2> array com for </h2>

<?php
$A2 = array (10, 9, 8, 7);
?>

<pre> <?php echo $A2[0]; ?> </pre>  

<h2> impressao com for </h2>
<pre> 
    <?php
    for($a = 0; $a<4; $a++) {
        echo "posicao $a o valor é $A1[$a]";
    }
?>
</pre>

<h2> impressao com foreach </h2> 
<pre> 
    <?php
    foreach ($A1 as $dados)
    echo "<p>$dados</p>"
    ?>
    </pre>

<h2> array: definiçao explicita (com chave ) <br> <h2>
    <pre>
        <?php
    $var = array(
        "Maria" => 25,
        "joao"  => 44,
        "jose"  => 12,
        "neusa" => 73
    );
    foreach ($var as $dados) 
     echo "<p>$dados</p>"
?>
</pre>

<h2> array: definiçao explicita (com chave valor ) <br> <h2>
    <pre>
        <?php

    foreach ($var as $chave => $valor){
        echo "$chave: tem $valor anos <br>";
    }
    ?>
    </pre>
     
<h2> exemplo print</h2>
<pre>
    <?php
    print_r($var);
    ?>
</pre>
<h2>array multimensional: definição explicita</h2>
<pre>
<?php 
$alunos= array(
    "maria"=>
    array("endereço"=> "rua chile 1020",
    "bairro" => "rebouças"),
    
    "jose"=>
    array("endereço"=> "rua china 3020",
    "bairro" => "ipanema"),
    
    "zeca"=>
    array("endereço"=> "hermes fonseca 242",
    "bairro" => "santo antonio"));
    print_r($alunos);
    print_r ("dados de maria:");
    echo"<br>";
    print_r($alunos["maria"] ["endereço"]);
    echo"<br>";
    print_r($alunos["maria"] ["bairro"]);
    echo"<br>";
    echo"<br>";
    print_r("bairro de jose:");
    print_r($alunos["jose"] ["bairro"]);
    echo"<br>";
    echo"<br>";
    print_r("bairro de zeca:");
    print_r($alunos["zeca"] ["bairro"]);
    echo"<br>";

    ?>
    </pre>

<pre>
<h2> impressao com foreach - array dentro do array </h2>
<pre>
    <?php
foreach ($alunos as $chave => $valor) {
    echo $chave.": <br>";
    foreach ($valor as $chave => $valor) {
        echo " - $valor<br>";
    }
    echo "<br>";

}
    ?>
</pre>
</body>
</html>

