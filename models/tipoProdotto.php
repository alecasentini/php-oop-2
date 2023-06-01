<?php
class TipoProdotto
{
    public $nome;
    public $icona;

    public function getTypeName()
    {
        return $this->nome;
    }

    public function getTypeIcon()
    {
        return $this->icona;
    }

    public function __construct($nome, $icona)
    {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}
