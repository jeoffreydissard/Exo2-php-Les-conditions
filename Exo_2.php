<?php
$ageexo2 = 23;
$genreexo2 = "Homme";
if($ageexo2 >= 18 && $genreexo2 == "Homme"){
    echo "Vous êtes un homme et vous êtes majeur";
} elseif ($ageexo2 < 18 && $genreexo2 == "Homme"){
    echo "Vous êtes un homme et vous êtes mineur";
} elseif ($ageexo2 >= 18 && $genreexo2 == "Femme") {
    echo "Vous êtes une femme et vous êtes majeur";
} else {
    echo "Vous êtes une femme et vous êtes mineur";
}
?>
