<?php
require_once __DIR__ . '../models/prodotto.php';
require_once __DIR__ . '../models/tipoProdotto.php';
require_once __DIR__ . '../models/categoria.php';

$arrayProdotti = [
    $_01 = new Prodotto(new Categoria('Cani', '<i class="fa-solid fa-dog"></i>'), new TipoProdotto('Cibo', '<i class="fa-solid fa-bowl-food"></i>'), 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),

];
