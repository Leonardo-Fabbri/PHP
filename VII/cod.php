<?php
$città = ['Milano', 'Bologna', 'Roma'];
array_push($città, 'Napoli');
array_unshift($città, 'Aosta');
array_shift($città);

print_r($città);
array_pop($città);



echo '<br>';
//  ordino array in ordine alfabetico
sort($città);
for ( $i=0; $i < count($città); $i++) {
    echo $città[$i] . '<br>';
}





echo '<br>';
echo '<br>';
//ARRAY ASSOCIATIVO
$persona = [
    "nome" => "Leonardo",
    "Cognome" => "Fabbri",
    "eta" => "23",

];

// // echo $persona ['Cognome'];

ksort($persona);
foreach ($persona as $key => $value) {
   
    echo $key . "=>" . $value . "<br>";
}



// $classi = [
//     ["Luca", "Marco", "Simone", "Francesco"],
//     ["Angela", "Simona", "Costanza", "Annalisa"],

// ];
// $classi[0][0] = 'Leonardo';

// for ($classe=0; $classe < count($classi); $classe++) {
   
//     echo "Classe: " . $classe . "<br>";
//     for($alunno=0; $alunno < count ($classi[$classe]); $alunno++) {
//         echo $classi[$classe][$alunno] . "<br>";
//     }
// }

