<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 


string $image, string $name, Category $category, string $description, int $price, int $type, string $material-->

<?php
//!  File to include
 include_once __DIR__ .('/classes/product.php');
 include_once __DIR__ .('/classes/category.php');
 include_once __DIR__ .('/classes/toy.php');
 include_once __DIR__ .('/classes/accessories.php');

//! Variabili: class Category
$cat = new Category ("Cat","https://cdn-icons-png.flaticon.com/512/208/208132.png");
$dog = new Category ("Dog","https://cdn-icons-png.flaticon.com/512/194/194279.png");

//! Variabili: class Toy
$piscina = new Toy ("https://arcaplanet.vtexassets.com/arquivos/ids/270541/pet-around-you-piscina-per-cani.jpg?v=637849240709530000", "Piscina per cane", $dog, "Piscina per cane, con 80cm di diametro.",22, "Gioco", "Plastica");

$corda = new Toy ("https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000","Corda osso", $dog, "Corda osso, per cane adulti.", 8,"Gioco","Tessuto");

$paline = new Toy ("https://arcaplanet.vtexassets.com/arquivos/ids/209755/YES--pallina-sport-in-latex-7-cm.jpg?v=637413991292270000", "Paline Sport", $dog, "Paline sport per cane, mix color", 3,"Gioco","Latex");

$peluche = new Toy ("https://arcaplanet.vtexassets.com/arquivos/ids/218050/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-leone-in-peluche-tric79.jpg?v=637454594787270000", "Peluche leone", $dog, "Peluche leone per cane squittio", 5,"Gioco", "Tessuto"); 

$pesciolino = new Toy ("https://arcaplanet.vtexassets.com/arquivos/ids/273143/croci-gioco-gatto-pesciolini.jpg?v=637921877257700000", "Bacchetta pesciolino", $cat, "Giocho bacchetta per gatto con pesciolino", 3,"Gioco","Plastica e tessuto");

$catnip = new Toy ("https://arcaplanet.vtexassets.com/arquivos/ids/271976/GIOCO-GATTO-EUPHORIA-PALLA-CATNIP.jpg?v=637896079269970000", "Catnip", $cat, "Euphoria palla catnip", 4, "gioco", "Vegetale");

$toys = [
    $piscina,
    $corda,
    $paline,
    $peluche,
    $pesciolino,
    $catnip
];

//! Variabili: class Accessories

$fonte = new Accessories ("https://arcaplanet.vtexassets.com/arquivos/ids/287159/680.0010.003--1-.jpg?v=638225063308170000", "Fontana Catit", $cat, "Catit fontana 2,5 litri.", 12, "Unica", "Plastica");

$guinzalio = new Accessories ("https://arcaplanet.vtexassets.com/arquivos/ids/276991/camon-parure-gatti-grandi.jpg?v=638041269996500000","Camon Guinzalio", $cat, "Camon Parure per gatti grandi", 9, "Unica", "Tessuto");

$giubotto = new Accessories ("https://arcaplanet.vtexassets.com/arquivos/ids/295403/Impermeabile-con-Imbottitura-per-Bassotto-Rosso-10110001.jpg?v=638439435180600000", "Giubotto impermeabile",$dog, "Impermeabile con imbottittura per bassoto rosso", 15, "S, M, L", "Poliamida e plastica");

$accessories = [
    $fonte,
    $guinzalio,
    $giubotto
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Shopping</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <img src="img/zampa-logo.png" alt="zampa-logo">
        <h4>Pet-Shopping</h4>
    </header>
    <main class="container">
        <!-- Section Toys -->
        <section>
            <!-- Titolo -->
                <h2>Giochi</h2>

            <!-- Card -->
            <div id="card">
                <?php foreach($toys as $singleToy) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $singleToy -> getImage(); ?>" class="card-img-top" alt="<?= $singleToy -> getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $singleToy -> getName(); ?></h5>
                            <p class="card-text"><?= $singleToy -> getType(); ?></p>
                            <p class="card-text"><?= $singleToy -> getDescription(); ?></p>
                            <p class="card-text"><?= $singleToy -> getMaterial(); ?></p>
                            <h6 class="card-text">€ <?= $singleToy -> getPrice(); ?></h6>               
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Section Accessories -->
        <section>
            <!-- Titolo -->
            <h2>Accessori</h2>
            
            <!-- Card -->
             <div id="card">
                <?php foreach($accessories as $singleAccessorie) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $singleAccessorie -> getImage(); ?>" class="card-img-top" alt="<?= $singleAccessorie -> getName(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $singleAccessorie -> getName(); ?></h5>
                            <p class="card-text">Taglia disponibile: <?= $singleAccessorie -> getSize(); ?></p>
                            <p class="card-text"><?= $singleAccessorie -> getDescription(); ?></p>
                            <p class="card-text"><?= $singleAccessorie -> getMaterial(); ?></p>
                            <h6 class="card-text">€ <?= $singleAccessorie -> getPrice(); ?></h6>               
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>


    
    </main>
</body>
</html>