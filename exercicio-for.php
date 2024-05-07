<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        p{
            background-color:limegreen; }
 </style>
    
<?php
$aluno1 = array("Rayfran",
"17", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-88");

echo "<br><p>Aluno 1: </p><br>";
for($a=0; $a<count($aluno1);$a++){
    echo "$aluno1[$a] <br>";
}

$aluno2 = array("Yngrid",
"17", 
"rua A", 
"Guanambi",
"BA", 
"000.000.000-55");

echo "<br><p>Aluno 2: </p><br>";
for($a=0; $a<count($aluno2);$a++){
    echo "$aluno2[$a] <br>";
}

$aluno3 = array("Yuri",
"9", 
"rua B", 
"Guanambi",
"BA", 
"000.000.000-22");

echo "<br><p>Aluno 3: </p><br>";
for($a=0; $a<count($aluno3);$a++){
    echo "$aluno3[$a] <br>";
}

$professor = array( "Fábio", 
"40", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-10");

echo "<br><p>Professor: </p><br>";
for($a=0; $a<count($professor);$a++){
    echo "$professor[$a] <br>";
}

?>

</body>
</html>