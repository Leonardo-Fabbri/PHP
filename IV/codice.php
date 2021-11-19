<?php
$GLOBALS['nome'] = $_POST['nome'];
$GLOBALS['cognome'] = $_POST['cognome'];

// define('INDIRIZZO', 'Piazza Roma');

//NON è POSSIBILE DEFINIRLA DENTRO A UNA FUNZIONE A DIFFERENZA DI DEFINE
const ADDRESS = 'Viale Genova'; 

function saluto() {
    $nomeII = 'marco';
    $cognomeII = 'polo';
   
    define('INDIRIZZO', 'Piazza Roma');
    //SALUTO FINALE
    echo trim ('Buongiorno, sono il tuo collega virtuale: ' .  $nomeII . ' ' .
    $cognomeII . ' ! Tu sei ... ' . $GLOBALS['nome'] . ' ' . $GLOBALS['cognome'] . ',' .  ' '  . 'la nostra sede è in: '  ); 
}

// senza richiamare la funzione non stamperò a schermo il saluto finale
saluto() ; 
echo INDIRIZZO ;
echo ADDRESS;

