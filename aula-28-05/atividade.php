<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-Laços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>ARRAY-LAÇOS</h1>
    <h2>IMPRESSÃO UM POR UM</h2>
    <pre>
        <?php
        $A1= array("Antônio", "Luís", "José", "João");
        echo "<br>- $A1[0] <br>"; 
        echo "- $A1[1] <br>";
        echo "- $A1[2] <br>";
        echo "- $A1[3] <br>";
        ?>
    </pre>
    <h2> ARRAY COM FOR</h2>
    <pre>
        <?php
        for($x=0; $x<(4); $x++){
            echo"<br> posição $x o valor é $A1[$x]; <br>";
        }
        ?>
    </pre>
    <h2> ARRAY COM FOREACH</h2>
    <pre>
        <?php
        foreach ($A1 as $chave => $valor) {
            echo "<br> $chave: $valor; <br>";
        }
        ?>
    </pre>
    <h2>ARRAY: DEFINIÇÃO EXPLÍCITA (com chave)</h2>
    <pre>
    <?php
        $A2= array("Maria" => 25, "João" => 44, "José" => 12, "Neusa" => 73);
        foreach ($A2 as $chave => $valor) {
            echo"<br> $chave tem $valor anos; <br>";
        }
        ?>
    </pre>
    <h2>Exemplo print</h2>
    <pre>
        <h3>print_r - mostra o que tem armazenado no array</h3>
        <?php
            print_r($A2);
        ?>
    </pre>
    <h2>ARRAY MULTIDIMENCIONAL: DEFINIÇÃO EXPLÍCITA</h2>
    <pre>
    <?php
        $A3= array(
            "Maria" => array(
                "Endereço" => "Rua Chile 1845", 
                "Bairro" => "Rebouças", 
                "Cidade" => "Guanambi"), 
            "João" => array (
                "Endereço" => "Rua Chile 1905", 
                "Bairro" => "Rebouças", 
                "Cidade" => "Guanambi"),
            "Zeca" => array (
                "Endereço" => "Rua Chile 19", 
                "Bairro" => "Potosi", 
                "Cidade" => "Guanambi"), 
            "Neusa" => array (
                "Endereço" => "Rua Silva Jardim 89", 
                "Bairro" => "Centro", 
                "Cidade" => "Guanambi"));
        echo"<br>";
        print_r($A3);
        echo"<br>";
        print_r($A3["Maria"]["Endereço"]);
        echo"<br>";
        print_r($A3["Maria"]["Bairro"]);
        echo"<br>";
        print_r($A3["Maria"]["Cidade"]);
        echo"<br><br>";
        print_r($A3["João"]["Bairro"]);
        echo"<br>";
        print_r($A3["Zeca"]["Cidade"]);
        echo"<br>";
        ?>
    </pre>
    <h2>IMPRESSÃO COM FOREACH</h2>
    <pre>
    <?php
        foreach ($A3 as $chave => $valor) {
            echo"<br>Nome: $chave <br>";
            foreach ($valor as $key => $value) {
                echo"$key: $value; <br>";
            }
        }
        ?>
    </pre>
    <h2>ATIVIDADE PARA CASA</h2>
    <pre>
        <?php

            echo "<h3>1. array_keys: Retorna todas as chaves do array</h3>";
            $chaves = array_keys($A3);
            echo "Chaves do array \$A3:<br>";
            echo '<pre>' . print_r($chaves, true) . '</pre>';
            echo "<br>";

            echo "<h3>2. array_values: Retorna todos os valores do array</h3>";
            $valores = array_values($A3);
            echo "Valores do array \$A3:<br>";
            echo '<pre>' . print_r($valores, true) . '</pre>';
            echo "<br>";

            echo "<h3>3. array_search: Busca pelo valor e retorna a respectiva chave (procurando pelo endereço específico)</h3>";
            foreach ($A3 as $nome => $dados) {
                if (in_array("Rua Chile 19", $dados)) {
                    $chaveEndereco = $nome;
                    break;
                }
            }
            echo "Chave do endereço 'Rua Chile 19': $chaveEndereco<br>";
            echo "<br>";

            echo "<h3>4. array_key_exists: Verifica se uma chave existe no array</h3>";
            $existeChaveJoao = array_key_exists("João", $A3);
            echo "Chave 'João' existe: " . ($existeChaveJoao ? 'true' : 'false') . "<br>";
            echo "<br>";

            echo "<h3>5. in_array: Verifica se um valor existe no array</h3>";
            $existeBairroCentro = false;
            foreach ($A3 as $pessoa) {
                if (in_array("Centro", $pessoa)) {
                    $existeBairroCentro = true;
                    break;
                }
            }
            echo "Bairro 'Centro' existe: " . ($existeBairroCentro ? 'true' : 'false') . "<br>";
            echo "<br>";

            echo "<h3>6. isset: Verifica se a variável foi inicializada</h3>";
            $var = "Teste";
            $varInicializada = isset($var);
            echo "Variável 'var' inicializada: " . ($varInicializada ? 'true' : 'false') . "<br>";
            echo "<br>";

            echo "<h3>7. unset: Destrói a variável</h3>";
            unset($var);
            $varInicializada = isset($var);
            echo "Variável 'var' inicializada após unset: " . ($varInicializada ? 'true' : 'false') . "<br>";
            echo "<br>";

            echo "<h3>8. empty: Verifica se a variável está vazia</h3>";
            $vazia = empty($var);
            echo "Variável 'var' está vazia: " . ($vazia ? 'true' : 'false') . "<br>";
            echo "<br>";

            echo "<h3>9. array_push: Adiciona elementos no final do array</h3>";
            $arrayPush = array("PHP", "JavaScript");
            array_push($arrayPush, "Python", "Java");
            echo "Array após array_push:<br>";
            echo '<pre>' . print_r($arrayPush, true) . '</pre>';
            echo "<br>";

            echo "<h3>10. array_pop: Extrai um elemento do final do array</h3>";
            $elementoPop = array_pop($arrayPush);
            echo "Elemento extraído com array_pop: $elementoPop<br>";
            echo "Array após array_pop:<br>";
            echo '<pre>' . print_r($arrayPush, true) . '</pre>';
            echo "<br>";

            echo "<h3>11. array_shift: Remove o primeiro elemento do array</h3>";
            $elementoShift = array_shift($arrayPush);
            echo "Elemento extraído com array_shift: $elementoShift<br>";
            echo "Array após array_shift:<br>";
            echo '<pre>' . print_r($arrayPush, true) . '</pre>';
            echo "<br>";

            echo "<h3>12. array_unshift: Adiciona elementos no início do array</h3>";
            array_unshift($arrayPush, "C++", "Ruby");
            echo "Array após array_unshift:<br>";
            echo '<pre>' . print_r($arrayPush, true) . '</pre>';
            echo "<br>";

            echo "<h3>13. count: Conta o número de elementos do array</h3>";
            $countArray = count($arrayPush);
            echo "Número de elementos no array: $countArray<br>";
            echo "<br>";

            echo "<h3>14. explode: Divide uma string em um array</h3>";
            $string = "PHP,JavaScript,Python,Java";
            $arrayExplode = explode(",", $string);
            echo "Array após explode:<br>";
            echo '<pre>' . print_r($arrayExplode, true) . '</pre>';
            echo "<br>";

            echo "<h3>15. implode: Junta elementos do array em uma string</h3>";
            $stringImplode = implode(" - ", $arrayExplode);
            echo "String após implode: $stringImplode<br>";
            echo "<br>";

            echo "<h3>16. array_combine: Cria um array usando outro array para chaves e valores</h3>";
            $arrayKeys = array("a", "b", "c");
            $arrayValues = array(1, 2, 3);
            $arrayCombine = array_combine($arrayKeys, $arrayValues);
            echo "Array após array_combine:<br>";
            echo '<pre>' . print_r($arrayCombine, true) . '</pre>';
            echo "<br>";

            echo "<h3>17. array_diff: Encontra a diferença entre dois arrays</h3>";
            $array1 = array("a", "b", "c", "d");
            $array2 = array("c", "d", "e");
            $arrayDiff = array_diff($array1, $array2);
            echo "Diferença entre array1 e array2:<br>";
            echo '<pre>' . print_r($arrayDiff, true) . '</pre>';
            echo "<br>";

            echo "<h3>18. array_intersect: Encontra a intersecção entre dois arrays</h3>";
            $arrayIntersect = array_intersect($array1, $array2);
            echo "Intersecção entre array1 e array2:<br>";
            echo '<pre>' . print_r($arrayIntersect, true) . '</pre>';
            echo "<br>";
            
        ?>
    </pre>
</body>

</html>