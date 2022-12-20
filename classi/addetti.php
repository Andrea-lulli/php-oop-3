<?php


include_once __DIR__ . '/../traits/anno.php';

class addetti  {
  use anno;
  public $nome;
  public $cognome;
  public $mansione;

  public $valutazione;
  

  public function __construct(
    String $nome,
    String $cognome,
    String $mansione, 
    Float $valutazione   
  
    ) {
        $this->nome = $nome;
    $this->cognome = $cognome;
    $this->mansione = $mansione;
    $this->valutazione = $valutazione;
    
    
  }
}

?>