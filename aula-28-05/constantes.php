<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> Exercicio constantes </h1>
<h2> 4.6 Constantes: </h2>
<pre>
  
<?php 
 define("PI", 3.1415);
echo PI; 
?>
</pre>
<h2> somando sem parametro</h2>
<pre>
    <?php
    function soma(){
        $a=1;
        $b=2;
        $soma= $a + $b;
        echo $soma;

    }
    soma();
    ?>
</pre>
<h2> somando com parametro</h2>
<pre>
    <?php
    function soma1($a, $b){
        $soma = $a + $b;
        echo $soma;

    }
    soma1(2,2);
    ?>
</pre>
<h2> somando e multiplicando</h2>
<pre>
<?php
    function somul($a,$b,$c){return ($a+$b)*$c;};
    echo somul(2,2,3);
?>
</pre>

<h2>soma, multiplicação, suibtração e divisão</h2>
<pre>
<?php
function soma_multiplica($x, $y)
{
    return $x / $y * ($x + $y);
}

function potencia($x, $y)
{
    return $x ** $y;
}

echo soma_multiplica(10, 20);
echo "<br>" . potencia(2, 2);
?>
</pre>


<h2> 4.6.1 Constantes Pré-definidas: </h2>
<pre>
<?php
 function funcConsts() {
 echo "ARQUIVO: ".__FILE__."<br>";
 echo "DIRETÓRIO: ".__DIR__."<br>";
 echo "LINHA: ".__LINE__."<br>";
 echo "FUNÇÃO: ".__FUNCTION__."<br>";
}
 funcConsts();
?>
</pre>
<h2>continue</h2>
<pre>
    <?php
    
    class veiculo {
     private $marca;
     function __construct() {
     echo "CLASSE: ".__CLASS__."<br>";
     }
    function setMarca($marca) { $this->marca = $marca;
     echo "MÉTODO: ".__METHOD__."<br>"; 
    } } 
    $obj = new veiculo(); 
     $obj->setMarca("Wolksvagem");
     ?>
    ?>
</pre>

<h2>  4.7 Variaveis Superglobais (pré-definidas) </h2>
<pre>
<?php
 $vars_pre = get_defined_vars();
 print_r($vars_pre);
?>
</pre>

<h2> 4.7 As principais variáveis superglobais:  </h2>
<pre> 
    <h3>● $GLOBALS: retorna um array para todas as variáveis que estão atualmente disponíveis no 
   escopo global </h3>
</pre>

<h2>  4.8 - Funções - PHP  </h2>
<pre>
    
<?php
 function nome_funcao($par_1 = 0, $par_2 = "vazio") {
 echo "Código da Função <br>";
 return "Dado de Retorno: ".$par_1."/".$par_2;
 }
 $retorno = nome_funcao();
 echo $retorno."<br><br>";
 $retorno = nome_funcao(12, "Bill Gates");
 echo $retorno."<br><br>";
?>
</pre>
</body>
</html>