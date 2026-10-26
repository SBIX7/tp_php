<?php
// // question 1
// function moyenne(...$arguments): float
// {
//     $total = 0;
//     $arg_count = 0;
//     foreach ($arguments as $arg) {
//         $total += $arg;
//         $arg_count++;
//     }
//     return ($total / $arg_count);
// }

// printf("La moyenne des notes est %.2f<br>", moyenne(13, 7.25, 19.5, 20));

// // question 2
// function array_infos($tableau): void
// {
//     $somme = 0;
//     $produit = 1;
//     foreach ($tableau as $valeur) {
//         $somme += $valeur;
//         $produit *= $valeur;
//     }
//     printf("<br>La somme est %.2f<br>", $somme);
//     printf("Le produit est %.2f<br>", $produit);
//     printf("La moyenne est %.2f<br>", ($somme / count($tableau)));
// }

// array_infos([10, 5.25, 16.75, 20]);

// question 3 4 5
$filiere = array("GSEA", "GINF");
print_r($filiere);
array_push($filiere, "G3E", "GSTR");
echo " <b>apres array_push -> </b>";
print_r($filiere);

echo "<br><br>";

print_r($filiere);
array_unshift($filiere, "DataSc", "GIL");
echo " <b>apres array_unshift -> </b>";
print_r($filiere);

echo "<br><br>";

print_r($filiere);
array_shift($filiere);
echo " </b>apres array_shift -> </b>";
print_r($filiere);
?>
