<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). */



require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';

$products = [
      new Product('Cuccia Grande', 'Cuccia', 12, 'image', 'Cane'),
      new Product('Crocchette', 'Cibo', 7, 'image', 'Cane'),
      new Product('Palla', 'Gioco', 5, 'image', 'Cane'),
      new Product('Lettiera', 'Accessori', 20, 'image', 'Gatto')
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

      <!-- FONTAWESOME -->
      <link href="https://kit.fontawesome.com/641e4c79bb.js" crossorigin="anonymous">
      </link>
      <title>Movies</title>
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
                                    <h3><?= $product->type ?></h3>
                                    <h5 class="text-danger text-uppercase">Price:</h5>
                                    <h3><?= $product->price ?></h3>
                                    <h5 class="text-danger text-uppercase">Category:</h5>

                                    <h3 v-if=""><?= $product->category ?></h3>

                              </div>
                        </div>
                  <?php endforeach ?>
            </div>
      </div>

</body>

</html>