<?php

include_once __DIR__ . '/prodotto.php';
include_once __DIR__ . '/../traits/formati.php';

class cd  {
  use Formato;
  public $nome;
  public $autore;
  public $prezzo;
  public $immagine;
  public $anno;
  public $tipoMusica;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,   
    String $immagine,

    Int $anno,
    String $tipoMusica
    ) {
        $this->nome = $nome;
    $this->autore = $autore;
    $this->prezzo = $prezzo;
    $this->immagine = $immagine;
    $this->anno = $anno;
    $this->tipoMusica = $tipoMusica;
    
  }
}

?>