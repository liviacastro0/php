
    <?php
    $alunos= array("engredy","boel","gegeo","micha","dadassi","dudinha sapequinha", "xurumin", "hiato");
    
    echo"exemplo com for <br>";

    for ($i=0; $i<(count($alunos)); $i++) { 
        echo $i;
        echo "$alunos[$i] <br>";
    }
    echo "exemplo com foreach <br>";
    foreach($alunos as $dados){
        echo "$dados <br>";
    }

    for ($i=0; $i<(count($alunos)); $i++) { 
        if([$i=4]){}
        echo "$alunos[$i] <br>";
    }
    ?>
