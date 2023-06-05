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
    $_09 = new Prodotto($gatti, $cibo, 'https://arcaplanet.vtexassets.com/arquivos/ids/266763-1800-1800/felix-cat-le-ghiottonerie-85x44.jpg?v=1772065220&quality=1&width=1800&height=1800', "Felix Le Ghiottonerie Multipack 44X85G", "18.99", "Felix"),
    $_10 = new Prodotto($gatti, $cibo, 'https://arcaplanet.vtexassets.com/arquivos/ids/275291-1800-1800/gourmet-gold--gatto-mix-mousse-multipack.jpg?v=1772065038&quality=1&width=1800&height=1800', "Gourmet Gold Gatto Mix Mousse Multipack", "27.90", "Gourmet"),
    $_11 = new Prodotto($gatti, $giochi, 'https://arcaplanet.vtexassets.com/arquivos/ids/265339-1800-1800/trixie-tiragraffi-livia-rosa-antico-64cm.jpg?v=1772065164&quality=1&width=1800&height=1800', "Tiragraffi Livia Rosa Antico", "22.40", "Trixie"),
    $_12 = new Prodotto($gatti, $giochi, 'https://arcaplanet.vtexassets.com/arquivos/ids/264784-1800-1800/trixie-pesce-guizzante-gioco-gatto.jpg?v=1772065159&quality=1&width=1800&height=1800', "Gioco Pesce Guizzante per Gatto", "8.20", "Trixie"),
    $_13 = new Prodotto($gatti, $cucce, 'https://arcaplanet.vtexassets.com/arquivos/ids/276588-1800-1800/luna-e-teo-cuccia-ratto-royal-blu-con-cuscino.jpg?v=1771978767&quality=1&width=1800&height=1800', "Cuccia Royal Blu", "24.90", "Luna e Teo"),
    $_14 = new Prodotto($gatti, $cucce, 'https://arcaplanet.vtexassets.com/arquivos/ids/226704-1800-1800/ferplast-cane-siesta-deluxe-grigio.jpg?v=1771719330&quality=1&width=1800&height=1800', "Siesta Deluxe Dark Grey", "10.99", "Ferplast"),
    $_15 = new Prodotto($gatti, $medicinali, 'https://arcaplanet.vtexassets.com/arquivos/ids/280336-1800-1800/227154-1200-auto.jpg?v=1772064792&quality=1&width=1800&height=1800', "Combo Antiparassitario Spot On Kitten 1 Pipetta", "8.99", "Frontline"),
    $_16 = new Prodotto($gatti, $medicinali, 'https://arcaplanet.vtexassets.com/arquivos/ids/269686-1800-1800/seresto-antiparassitario-gatto.jpg?v=1772064801&quality=1&width=1800&height=1800', "Seresto Collare Antiparassitario per Gatti", "29.99", "Seresto"),

];

try {
    $_01->applyDiscount(120);
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}
$_04->applyDiscount(10);
$_05->applyDiscount(20);
$_11->applyDiscount(25);
$_12->applyDiscount(5);
$_15->applyDiscount(15);
