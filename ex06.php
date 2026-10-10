<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $produit = "Clavier";
    $quantite = 3;
    $prix = 120.50;
    $disponible = true;

    echo "produit : $produit<br>";
    echo "quantité : $quantite<br>";
    echo "prix : $prix<br>";
    echo "disponible : $disponible<br><br>";

    var_dump($produit);
    echo "<br>";
    var_dump($quantite);
    echo "<br>";
    var_dump($prix);
    echo "<br>";
    var_dump($disponible);

    ?>
    <p>
        Avec echo, true s'affiche comme 1, tandis que false n'affiche rien.
    </p>
</body>
</html>