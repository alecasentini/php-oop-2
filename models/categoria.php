<?php
class Categoria
{
    public $nome;
    public $icona;

    public function getCategoryName()
    {
        return $this->nome;
    }

    public function getCategoryIcon()
    {
        return $this->icona;
    }

    public function __construct($nome, $icona)
    {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}
