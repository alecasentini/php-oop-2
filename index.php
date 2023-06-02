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

<body class="d-flex flex-column align-items-center" style="background-color: #ffd500;">
    <div class="w-100 py-2" style="background-color: black;">
        <h1 class="py-3 text-center" style="color: #ffd500;">Animal Shop</h1>
    </div>


    <div class="container d-flex flex-wrap my-5">
        <?php foreach ($arrayProdotti as $prodotto) { ?>
            <div class="card mb-3" style="width:calc(100% / 4 - 20px); margin: 0px 10px; cursor:pointer; border: 1px solid lightgray; background-color:#F2F2F2">
                <div class="position-relative p-3" style="background-color: white;">
                    <img class="w-100" src="<?php echo $prodotto->immagine; ?>" alt="<?php echo $prodotto->titolo; ?>">
                    <p class="position-absolute" style="right: 10px; top: 5px; font-size: 25px" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="<?php echo $prodotto->categoria->nome; ?>"><?php echo $prodotto->categoria->icona; ?></p>
                    <p class="position-absolute" style="right: 10px; top: 50px; font-size: 25px" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="<?php echo $prodotto->tipo->nome; ?>"><?php echo $prodotto->tipo->icona; ?></p>
                    <i class="fa-regular fa-heart position-absolute" style="left: 10px; top: 10px; font-size: 25px"></i>
                </div>
                <div class="p-3" style="background-color:#F2F2F2">
                    <h3 class="my-3"><?php echo $prodotto->titolo; ?></h3>
                    <p class="text-uppercase" style="color: gray;"><?php echo $prodotto->marca; ?></p>
                    <p class="fw-bolder" style="font-size: 20px;"><?php echo $prodotto->prezzo; ?>€</p>
                    <div class="w-100 d-flex justify-content-center">
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i> Aggiungi al carrello</button>
                    </div>

                </div>
            </div>
        <?php } ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>