<?php
require_once __DIR__ . '/database/db.php';
require_once __DIR__ . '/models/prodotto.php';
require_once __DIR__ . '/models/tipoProdotto.php';
require_once __DIR__ . '/models/categoria.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="d-flex flex-column align-items-center">
    <h1>Animal Shop</h1>

    <div class="container d-flex flex-wrap my-5">
        <?php foreach ($arrayProdotti as $prodotto) { ?>
            <div class="card mb-3" style="width:calc(100% / 4 - 20px); margin: 0px 10px;">
                <img src="<?php echo $prodotto->immagine; ?>" alt="<?php echo $prodotto->titolo; ?>">
                <h2><?php echo $prodotto->titolo; ?></h2>
                <p>Categoria: <?php echo $prodotto->categoria->icona; ?></p>
                <p>Tipo: <?php echo $prodotto->tipo->nome; ?></p>
                <p>Prezzo: <?php echo $prodotto->prezzo; ?>€</p>
                <p>Marca: <?php echo $prodotto->marca; ?></p>
            </div>
        <?php } ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>