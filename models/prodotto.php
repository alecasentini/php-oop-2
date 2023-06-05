<?php
require_once __DIR__ . '/tipoProdotto.php';
require_once __DIR__ . '/categoria.php';

trait Sconto
{
    protected $scontoApplicato = false;
    protected $percentualeSconto = 0;

    public function isScontoApplicato()
    {
        return $this->scontoApplicato;
    }

    public function getPrezzoScontato()
    {
        $prezzoScontato = $this->prezzo - ($this->prezzo * $this->sconto / 100);
        $prezzoScontato  = number_format($prezzoScontato, 2);
        return $prezzoScontato;
    }
    public function getPercentualeSconto()
    {
        return $this->percentualeSconto;
    }
}

class Prodotto
{
    use Sconto;

    protected $sconto;

    public function applyDiscount($percentuale)
    {
        $this->sconto = $percentuale;
        $this->scontoApplicato = true;
        $this->percentualeSconto = $percentuale;
    }

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
