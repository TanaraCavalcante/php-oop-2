<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
//!  File Product
 include_once __DIR__ .('/classes/product.php');
 include_once __DIR__ .('/classes/category.php');
 include_once __DIR__ .('/classes/toy.php');

//! Variabili con i dadi necessari per collegarsi con la class Category
$cat = new Category ("Cat","https://cdn-icons-png.flaticon.com/512/208/208132.png");
$dog = new Category ("Dog","https://cdn-icons-png.flaticon.com/512/194/194279.png");

$prodotto = new Toy ('', 'ciotola', $cat, '', 0,10)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Shopping</title>
</head>
<body>
    <header>
        <h2>Pet-Shopping</h2>
    </header>
    <main>
    <p>Nome: <?php echo $prodotto->name ?></p>
    <p>Categoria: <?php echo $prodotto->category->name ?></p>
    <p>Peso: <?php echo $prodotto->weight ?></p>
    </main>
    
</body>
</html>