<?php
class TipoProdotto
{
    public $nome;
    public $icona;
}

$cibo = new TipoProdotto('Cibo', '<i class="fa-solid fa-bowl-food"></i>');
$giochi = new TipoProdotto('Giochi', '<i class="fa-solid fa-bone"></i>');
$cucce = new TipoProdotto('Cucce', '<i class="fa-solid fa-house"></i>');
$medicinali = new TipoProdotto('Medicinali', '<i class="fa-solid fa-syringe"></i>');
