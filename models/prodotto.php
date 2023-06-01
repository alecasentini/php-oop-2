<?php
class Prodotto
{
    public $id;
    public $immagine;
    public $titolo;
    public $prezzo;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;
    }

    public function getImmagine()
    {
        return $this->immagine;
    }

    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;
    }

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }
}
