 <!--## Snack 2
//Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che noi conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola 
e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato”-->
<?php
$name=$_GET['name'];
$mail=$_GET['mail'];
$age=$_GET['age'];

if(strlen($name) > 3    //name > 3 caratteri
   && strpos($mail,'@') !== false   //mail contiene chiocciola 
   && strpos($mail,'.') !== false   //e punto 
   && is_numeric($age)   //age è numerico
){
   echo 'Accesso riuscito'; //risutato accesso riuscito
}else{
    echo 'Accesso negato';  //risutato accesso negato
}

?>