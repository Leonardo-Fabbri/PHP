<?php
$nome = 'ugo';
$numero = 3;



if ($nome == "Leonardo") {
    echo "ciao Leonardo"; 
} elseif( $nome == 'Marco') {
    echo "ciao Marco";
}else {
    echo 'ciao anonimo';
}

echo '<br>';  

if($numero < 20) {
    if($numero % 2 ==0) {
        echo $numero . "è pari e minore di 20";
    }else{
        echo $numero . 'numero dispari';

    };
}else {
    echo 'numero non disponibile';
}





