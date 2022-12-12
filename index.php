<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). */
/* BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. */



require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Type.php';

$products = [
      new Product('Cuccia Grande', new Type('Cuccia'), 12, 'image', new Category('Cane')),
      new Product('Crocchette', new Type('Cibo'), 7, 'image', new Category('Cane')),
      new Product('Palla', new Type('Gioco'), 5, 'image', new Category('Cane')),
      new Product('Lettiera', new Type('Accessori'), 20, 'image', new Category('Gatto'))
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS -->
      <link rel="stylesheet" href="/assets/style.css">
      <!-- BOOTSTRAP -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


      <title>Animals Products</title>
</head>

<body>
      <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
                  <?php foreach ($products as $product) : ?>
                        <div class="col p-5">
                              <div class="card py-3 px-5 h-100">
                                    <h5 class="text-danger text-uppercase">Name</h5>
                                    <h3><?= $product->name ?></h3>
                                    <h5 class="text-danger text-uppercase">Type:</h5>
                                    <h3><?= $product->type->type ?></h3>
                                    <h5 class="text-danger text-uppercase">Price:</h5>
                                    <h3><?= $product->price ?></h3>
                                    <h5 class="text-danger text-uppercase">Category:</h5>
                                    <h3><?= $product->category->name ?></h3>

                              </div>
                        </div>
                  <?php endforeach ?>
            </div>
      </div>

      <!-- FONTAWESOME -->
      <script src="https://kit.fontawesome.com/641e4c79bb.js" crossorigin="anonymous">
      </script>
</body>

</html>