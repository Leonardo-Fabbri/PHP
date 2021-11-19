<?php
// $città = ['Milano', 'Bologna', 'Roma'];

// for ( $i=0; $i < count($città); $i++) {
//     echo $città[$i] . '<br>';
// }



// $persona = [
//     "nome" => "Leonardo",
//     "Cognome" => "Fabbri",
//     "eta" => "23",

// ];


   
// // echo $persona ['Cognome'];


// foreach ($persona as $key => $value) {
//     echo $key . "=>" . $value . "<br>";
// }



$classi = [
    ["Luca", "Marco", "Simone", "Francesco"],
    ["Angela", "Simona", "Costanza", "Annalisa"],

];

// echo $classi [0][2] = 'Leonardo';


for ($classe=0; $classe < count($classi); $classe++) {
    echo "Classe: " . $classe . "<br>";
    for($alunno=0; $alunno < count ($classi[$classe]); $alunno++) {
        echo $classi[$classe][$alunno] . "<br>";
    }
}