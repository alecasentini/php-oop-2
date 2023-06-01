<?php
class Categoria
{
    public $nome;
    public $icona;

    public function getNome()
    {
        return $this->nome;
    }

    public function getIcona()
    {
        return $this->icona;
    }
}

$cani = new Categoria('Cani', '<i class="fa-solid fa-dog"></i>');
$gatti = new Categoria('Gatti', '<i class="fa-solid fa-cat"></i>');
