<?php

// question 1

// $langue = [];
// $langue['Maroc'] = 'Arabe';
// $langue['France'] = 'Francais';
// $langue['Espagne'] = 'Espagnol';
// $langue['Algerie'] = 'Arabe';
// $langue['Bresil'] = 'Portugais';

// print ("<b>resultat pour print_r</b><br>");
// print_r($langue);

// print ("<br><br><b>resultat pour var_dump</b><br>");
// var_dump($langue);

// print ("<br><br><b>resultat pour var_export</b><br>");
// var_export($langue);

// print ("<br><br><b>resultat pour array_values</b><br>");
// print_r(array_values($langue));

// print ("<br><br><b>resultat pour array_keys</b><br>");
// print_r(array_keys($langue));

// question 2
// Le tableau $personne contient pour chaque key un tableau des val indicees
$personne = [
    'FISSOUNE' => ['Rachida', 'Tanger', 37],
    'SAMLALI' => ['Hilal', 'Tetouan', 35],
    'MARZOUKI' => ['Ahmed', 'Rabat', 45]
];

// question 3
// Le tableau $personne_kv contient pour chaque key un tableau associatif
$personne_kv = [
    'FISSOUNE' => ['Prenom' => 'Rachida', 'Ville' => 'Tanger', 'Age' => 37],
    'SAMLALI' => ['Prenom' => 'Hilal', 'Ville' => 'Tetouan', 'Age' => 35],
    'MARZOUKI' => ['Prenom' => 'Ahmed', 'Ville' => 'Rabat', 'Age' => 45]
];

// // question 4
// printf("<br><br><b>Le tableau 1 du question 2</b><br>");
// print_r($personne);

// printf("<br><br><b>Le tableau 2 du question 2</b><br>");
// print_r($personne_kv);
// echo "<br>";

// question 5
// printf("<br><b>Affichage du premier tableau</b><br>");
// foreach ($personne as $key => $value) {
//     printf("<br> key: <b> %s </b>, values: ", $key);
//     foreach ($value as $inner_value) {
//         if (gettype($inner_value) == 'integer')
//             printf("%d  ", $inner_value);
//         else
//             printf("%s  ", $inner_value);
//     }
// }

// printf("<br><br><b>Affichage du deusieme tableau</b><br><br>");
// foreach ($personne_kv as $key => $value) {
//     printf("<b>Element %s :</b><br>", $key);
//     foreach ($value as $inner_key => $inner_value) {
//         echo $inner_key . " :" . $inner_value . "<br>";
//     }
// }

// question 6

printf("<br><br><b>Affichage des deux tableau en utulisant While et Foreach</b>");
printf("<br><br>1- Affichage du <b>premier</b> tableau<br>");
foreach ($personne as $key => $value) {
    echo "__________________________<br>";
    printf("Perssone: %s<br>", $key);
    $num_values = count($value);
    $i = 0;
    while ($i < $num_values) {
        if (gettype($value[$i]) == "integer")
            printf("cle %d valeur %d<br>", $i, $value[$i]);
        else
            printf("cle %d valeur %s<br>", $i, $value[$i]);
        $i++;
    }
}

printf("<br><br>2- Affichage du <b>deusieme</b> tableau<br>");
foreach ($personne_kv as $key => $value) {
    echo "===========================<br>";
    printf("Perssone: %s<br>", $key);
    $keys = array_keys($value);
    $values = array_values($value);
    $num_values = count($values);
    $i = 0;
    while ($i < $num_values) {
        if (gettype($value[$i]) == "integer")
            printf("%s: valeur %d<br>", $keys[$i], $values[$i]);
        else
            printf("%s: valeur %s<br>", $keys[$i], $values[$i]);
        $i++;
    }
}
?>
