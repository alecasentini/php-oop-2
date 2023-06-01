<?php
require_once __DIR__ . '/tipoProdotto.php';
require_once __DIR__ . '/categoria.php';
class Prodotto
{
    public $categoria;
    public $tipo;
    public $immagine;
    public $titolo;
    public $prezzo;
    public $marca;

    public function __construct(Categoria $categoria, TipoProdotto $tipo, $immagine, $titolo, $prezzo, $marca)
    {
        $this->categoria = $categoria;
        $this->tipo = $tipo;
        $this->immagine = $immagine;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->marca = $marca;
    }
}
