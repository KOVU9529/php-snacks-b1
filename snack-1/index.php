<?php
## Snack 1
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
//Ogni array avrà una squadra di casa e una squadra ospite, 
//punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
//Stampiamo a schermo tutte le partite con questo schema.
//Olimpia Milano - Cantù | 55-60

//Creo il mio array
$basket=[
    [
    'home' => 'Santantonio Spurs',
    'outHome' => 'Chicago Bulls',
    'ptHome' => 112,
    'ptOut' => 114
    ],
    [
    'home' => 'Golden State Warriors',
    'outHome' => 'Celtic',
    'ptHome' => 122,
    'ptOut' => 118
    ],
    [
    'home' => 'Golden Virginia',
    'outHome' => 'Lakers',
    'ptHome' => 102,
    'ptOut' => 97
    ],
];
//imposto il ciclo che stamperà il l giornata 
for($i=0; $i < count($basket); $i++){
    $thisMatch=$basket[$i];
    echo $thisMatch['home'] .' ' .  $thisMatch['outHome'] .' ' .  $thisMatch['ptHome'] . ' ' . $thiMatch['ptOut'] . '<br>';
}
    ?> 