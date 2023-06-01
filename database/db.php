<?php
require_once __DIR__ . '/../models/prodotto.php';
require_once __DIR__ . '/../models/tipoProdotto.php';
require_once __DIR__ . '/../models/categoria.php';


$cibo = new TipoProdotto('Cibo', '<i class="fa-solid fa-bowl-food"></i>');
$giochi = new TipoProdotto('Giochi', '<i class="fa-solid fa-bone"></i>');
$cucce = new TipoProdotto('Cucce', '<i class="fa-solid fa-house"></i>');
$medicinali = new TipoProdotto('Medicinali', '<i class="fa-solid fa-syringe"></i>');

$cani = new Categoria('Cani', '<i class="fa-solid fa-dog"></i>');
$gatti = new Categoria('Gatti', '<i class="fa-solid fa-cat"></i>');

$arrayProdotti = [
    $_01 = new Prodotto($cani, $cibo, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Pollo", "14.99", "Monge"),
    $_02 = new Prodotto($cani, $cibo, 'https://arcaplanet.vtexassets.com/arquivos/ids/210140-1800-1800/https---www.arcaplanet.it-vtex-images-10130157_1.jpg?v=1771978653&quality=1&width=1800&height=1800', "Royal Canin V-Diet Renal Multipack Cane", "16.99", "Royal Canin"),
    $_03 = new Prodotto($cani, $giochi, 'https://arcaplanet.vtexassets.com/arquivos/ids/269820-1800-1800/yes-pallina-da-calcio.jpg?v=1771719629&quality=1&width=1800&height=1800', "Pallina da Calcio per Cane 7CM", "2.99", "Yes"),
    $_04 = new Prodotto($cani, $giochi, 'https://arcaplanet.vtexassets.com/arquivos/ids/273109-1800-1800/LOVEDI-GIOCO-CANE-PELUCHE-TIRA-MOLLA-TIGRE.jpg?v=1771970686&quality=1&width=1800&height=1800', "Gioco Cane Peluche Tira Molla Tigre", "8.68", "Lovedi"),
    $_05 = new Prodotto($cani, $cucce, 'https://arcaplanet.vtexassets.com/arquivos/ids/225622-1800-1800/p-a-y--canile-eco-lodge-medium.jpg?v=1771978525&quality=1&width=1800&height=1800', "Cuccia esterna per Cani Eco Lodge", "62.30", "Pet Around You"),
    $_06 = new Prodotto($cani, $cucce, 'https://arcaplanet.vtexassets.com/arquivos/ids/225719-1800-1800/mast-brandina-alluminio-60-blu.jpg?v=1771978521&quality=1&width=1800&height=1800', "Brandina in Alluminio Blu", "23.99", "Mast"),
    $_07 = new Prodotto($cani, $medicinali, 'https://arcaplanet.vtexassets.com/arquivos/ids/269684-1800-1800/seresto-antiparassitario-cane-grande.jpg?v=1771978399&quality=1&width=1800&height=1800', "Seresto Collare Antiparassitario Cani Grandi", "34.99", "Seresto"),
    $_08 = new Prodotto($cani, $medicinali, 'https://arcaplanet.vtexassets.com/arquivos/ids/269608-1800-1800/advantix-spot-on-25-40-kg.jpg?v=1771978334&quality=1&width=1800&height=1800', "Advantix Spot On Cane 25-40Kg", "26.99", "Advantix"),
    $_09 = new Prodotto($gatti, $cibo, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),
    $_10 = new Prodotto($gatti, $cibo, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),
    $_11 = new Prodotto($gatti, $giochi, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),
    $_12 = new Prodotto($gatti, $giochi, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),
    $_13 = new Prodotto($gatti, $cucce, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),
    $_14 = new Prodotto($gatti, $cucce, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),
    $_15 = new Prodotto($gatti, $medicinali, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),
    $_16 = new Prodotto($gatti, $medicinali, 'https://arcaplanet.vtexassets.com/arquivos/ids/243743-1800-1800/monge-cane-adult-medium.jpg?v=1771978395&quality=1&width=1800&height=1800', "Monge Medium Adult Ricco di Pollo", "14.99", "Monge"),


];
