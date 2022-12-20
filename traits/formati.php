<?php

trait Formato
{
    public $formato;
    public $tipo;
    public $dimensioni;

    public function getFormat(){
        return "$this->formato $this->tipo -  $this->dimensioni";
    }
}
