<?php

// // question 5.1
// $tableau_int1 = range(0, 180, 10);
// $tableau_int2 = array_map(fn($x) => (float) $x / 10, $tableau_int1);
// foreach ($tableau_int1 as $value) {
//     printf("%d <br>", $value);
// }
// echo "<br><br>";
// foreach ($tableau_int2 as $value) {
//     printf("%3d ", $value);
// }

// question 5.2
$tableau_cos = [];
for ($i = 0; $i <= 18; $i++) {
    $tableau_cos[$i] = cos($i);
}

// question 5.3
echo "<table style='border: 2px solid black; border-collapse: collapse; margin: auto;'>";
echo "<tr>
        <th colspan='2' style='border: 2px solid black;'>calcul des cos</th>
    </tr>";
echo "<tr>
        <th style='border: 2px solid black;'>X</th>
        <th style='border: 2px solid black;'>cos(X)</th>
    </tr>";

foreach ($tableau_cos as $key => $value) {
    echo "<tr>" . "<td style='border: 2px solid black;'>" . $key . "
    </td>" . "<td style='border: 2px solid black;'>" . $value . "</td>" . "</tr>";
}
echo "</table>";
?>
