<!-- Exercice 7 : Affichage de formes avec des ´etoiles
Enonc´e ´
Ecrivez un script PHP qui affiche les formes suivantes en utilisant des boucles : ´
1. Un triangle d’´etoiles.
2. Un triangle rempli d’´etoiles.
3. Un rectangle d’´etoiles vide.
4. Un rectangle rempli d’´etoiles.
Correction
Voici le code PHP pour chaque forme : -->
<?php
// 1. Triangle d’´etoiles
echo "Triangle d’´etoiles :\n";
for ($i = 1; $i <= 5; $i++) {
for ($j = 1; $j <= $i; $j++) {
echo "* ";
}
echo "\n";
}

// 2. Triangle rempli d’´etoiles
echo "\nTriangle rempli d’´etoiles :\n";
for ($i = 1; $i <= 5; $i++) {
for ($j = 1; $j <= $i; $j++) {
echo "* ";
}
echo "\n";
}


// 3. Rectangle d’´etoiles vide
echo "\nRectangle d’´etoiles vide :\n";
$rows = 5;
$cols = 10;
for ($i = 1; $i <= $rows; $i++) {
for ($j = 1; $j <= $cols; $j++) {
if ($i == 1 || $i == $rows || $j == 1 || $j == $cols) {
echo "* ";
} else {
echo " ";
}
}
echo "\n";
}


// 4. Rectangle rempli d’´etoiles
echo "\nRectangle rempli d’´etoiles :\n";
for ($i = 1; $i <= $rows; $i++) {
for ($j = 1; $j <= $cols; $j++) {
echo "* ";
}
echo "\n";
}
?>
<!-- Explication
— Triangle d’´etoiles : On utilise deux boucles for. La premi`ere boucle contrˆole le nombre
de lignes, et la seconde boucle imprime les ´etoiles pour chaque ligne.
— Triangle rempli d’´etoiles : Identique au triangle d’´etoiles, car un triangle est toujours
rempli.
— Rectangle d’´etoiles vide : On v´erifie si on est sur la premi`ere ou la derni`ere ligne, ou
sur la premi`ere ou la derni`ere colonne pour afficher une ´etoile. Sinon, on affiche un espace.
— Rectangle rempli d’´etoiles : On imprime simplement une ´etoile pour chaque colonne
et chaque ligne. -->