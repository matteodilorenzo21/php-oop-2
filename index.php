<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        img {
            height: 420px;
            width: 250px;
        }
    </style>
    <title>Animal Products Catalog</title>
</head>

<body>
    <div class="container">

        <header class="py-3">
            <h1>Animal Products Catalog</h1>
        </header>

        <div class="row">
            <?php

            require_once 'classes/product.php';
            require_once 'classes/category.php';
            require_once 'classes/dog.php';
            require_once 'classes/cat.php';
            require_once 'classes/bird.php';
            require_once 'classes/fish.php';

            // Istanze di categoria
            $dogCategory = new Category('Cane');
            $catCategory = new Category('Gatto');
            $birdCategory = new Category('Uccelli');
            $fishCategory = new Category('Pesci');

            // Funzione per montare la card in pagina
            function displayProductCard($product)
            {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4">';
                echo '<img src="' . $product->image . '" class="card-img-top" alt="Product Image">';

                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product->name . '</h5>';
                echo '<p class="card-text">' . $product->description . '</p>';
                echo '<p class="card-text">Prezzo: ' . $product->price . '€</p>';
                echo '<p class="card-text">Categoria: ' . $product->category->name . '</p>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            // Istanze di prodotto
            $dogfood1 = new Dog(
                'https://cdn.royalcanin-weshare-online.io/M2nLt2sBG95Xk-RBVPxP/v158/shn18-mini-ageing-s-pouch-85?w=640&auto=compress',
                'Royal Canin Mini Adult',
                'Manzo e Cereali',
                43.99,
                $dogCategory
            );

            $dogfood2 = new Dog(
                'https://objectstorage.eu-milan-1.oraclecloud.com/n/axl3hgtiszxy/b/Bucket-CRAI-IMG-PROD/o/images/catalog/eg-0111820/eg-0111820_5_big.webp',
                'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
                'Tonno e Riso',
                25.99,
                $dogCategory
            );

            $catfood1 = new Cat(
                'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
                'Almo Nature Cat Daily Lattina',
                'Vitello',
                5.99,
                $catCategory
            );

            $fishfood1 = new Fish(
                'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
                'Mangime per Pesci Guppy in Fiocchi',
                'Alghe, Lieviti e Cereali',
                3.50,
                $fishCategory
            );

            $birdcage1 = new Bird(
                'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
                'Voliera Wilma in Legno',
                'Legno di faggio',
                189.99,
                $birdCategory
            );

            // Array che contiene le istanze di prodotto create
            $products = [
                $dogfood1,
                $dogfood2,
                $catfood1,
                $fishfood1,
                $birdcage1
            ];

            // Ciclo che stampa i prodotti in pagina
            foreach ($products as $product) {
                displayProductCard($product);
            }
            ?>
        </div>
    </div>

</body>

</html>