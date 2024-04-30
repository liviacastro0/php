
<?php
   echo "exemplo 1<br>";
   $var = array(1, 2, 3, 4, 5);
   foreach ($var as $teste1) {
    $rgb1 = random_int(0, 255);
    $rgb2 = random_int(0, 255);
    $rgb3 = random_int(0, 255);
    echo "<p style=\"background-color:rgb($rgb1,$rgb2,$rgb3);\">$teste1</p>";}


   $var1 = array ( "fabio" => 30, "eber" => 40, "wq" => 60); 
   echo "exemplo 2<br>";
   echo "var é $var1[fabio] <br>" ;
   echo "var é $var1[eber] <br>" ;
   echo "var é $var1[wq] <br>" ;
   
   $var2 = array(0=> 5, 6=> 8, 9=> 15);
   echo "exemplo 3<br>";
   $var2[1]= 20;
   $var2[2]= 53;
   foreach ($var2 as $teste1) {
    $rgb1 = random_int(0, 255);
    $rgb2 = random_int(0, 255);
    $rgb3 = random_int(0, 255);
    echo "<p style=\"background-color:rgb($rgb1,$rgb2,$rgb3);\">$teste1</p>";
};
/*
Chat:






*/