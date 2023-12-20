<?php

/* Scrivi una classe PHP chiamata Calculator che accetterà due valori come argomento. 
Aggiungili, sottraili, moltiplicali e dividili tra loro usando delle funzioni. */

class Calculator {
    private $val1, $val2;

    public function __construct( $val1, $val2 ) {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }
    public function somma() {
        return $this->val1 + $this->val2;
    }
    public function sottrazione() {
        return $this->val1 - $this->val2;
    }
    public function moltiplicazione() {
        return $this->val1 * $this->val2;
    }
    public function divisione() {
        return $this->val1 / $this->val2;
    }
}

$mycalc = new Calculator(12, 6);
echo $mycalc-> somma()."\n"; 
echo $mycalc-> sottrazione()."\n"; 
echo $mycalc-> moltiplicazione()."\n"; 
echo $mycalc-> divisione()."\n"; 
?>