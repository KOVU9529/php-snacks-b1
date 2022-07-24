<?php
## Snack 3
//Creare un array con 15 numeri casuali, 
//tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta-->
//<?php
$numberGenRandom=[];

while(count($numberGenRandom) < 15){
    //creo la varibile associata al numero random
    $thisnumberGet= rand(1 ,15);
   if(!in_array($thisnumberGet, $numberGenRandom )){
       $numberGenRandom[]=$thisnumberGet;
   }
}
var_dump($numberGenRandom);
?>