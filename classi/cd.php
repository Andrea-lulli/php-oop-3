<?php

include_once __DIR__ . '/prodotto.php';
include_once __DIR__ . '/../traits/formati.php';
include_once __DIR__ . '/../traits/anno.php';

class cd  {
  use Formato;
  
  public $nome;
  public $autore;
  public $prezzo;
  public $immagine;
  
  public $tipoMusica;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,   
    String $immagine,

    
    String $tipoMusica
    ) {
        $this->nome = $nome;
    $this->autore = $autore;
    $this->prezzo = $prezzo;
    $this->immagine = $immagine;
    
    $this->tipoMusica = $tipoMusica;
    
  }
}
