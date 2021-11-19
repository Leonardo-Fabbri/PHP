<?php
$nome = 'LEONARDO';
$età = 23; //intero
$temperatura = 36.07; //float con virgola
$is_online = true; //boolean
$interessi = ['kayak', 'Down-Hill', 'Sci'];
$fidanzata = null;







$persona1 = new persona ('Marco', 'Antonio', '23', 'M', 'sesso', 'droga', 'rock n roll'); 

class persona {

    
    public $nome;  
    public $cognome;  
    public $eta;  
    public $sesso;  
    public $x;
    public $y;
    public $z;

        
 
    
    public function __construct($nome, $cognome, $eta, $sesso, $x, $y, $z)
    {
        $this-> nome = $nome;
        $this-> cognome = $cognome;
        $this-> eta = $eta;
        $this-> sesso = $sesso;
        $this-> x = $x;
        $this-> y = $y;
        $this-> z = $z;

    }
}
var_dump( $persona1); //stampa contenuto varaibile 