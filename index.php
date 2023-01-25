<?php
$array = array(1, 2, 3, 4, 5);

// Boucle "foreach" pour parcourir chaque élément du tableau
foreach ($array as $value) {
    echo $value . "\n";
}

// Boucle "for" pour parcourir chaque élément du tableau en utilisant l'index
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "\n";
}

// Utilisation de la fonction "array_map" pour appliquer une fonction à chaque élément du tableau
$squaredArray = array_map(function($value) {
    return $value * $value;
}, $array);

print_r($squaredArray);

// Utilisation de la fonction "array_filter" pour filtrer les éléments du tableau en fonction d'une condition
$evenArray = array_filter($array, function($value) {
    return $value % 2 == 0;
});

print_r($evenArray);
?>
