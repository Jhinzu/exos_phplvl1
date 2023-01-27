<?php
//exos 0
// $teste = 5;
// echo $teste;
//exos 1
// $word = "c'est ";
// $word2 = "vie.";
// $word3 = "Simplon";
// $word4 = "la";
// echo ("$word3 $word $word4 $word2");
//exos 2
// $variable1=12;
// $variable2=4;
// echo $variable1 / $variable2;
//Exercice 3 Comment puis-je obtenir 20 en utilisant 1 seule fois ces 2 variables ?
// $var="clement";
// $var1= "extrapolation";
// echo strlen("$var$var1");
//Exercice 4 ComplÃ©tez ce code afin de faire apparaÃ®tre la phrase â€œje maÃ®trise tellement le code maintenantan
// $maitrise_du_code = 1000;
// if ( $maitrise_du_code >= 3 ) {
// echo "je maitrise tellement le code maintenan";
// }
// //Exercice 5 
// $chiffre_fetiche_sandrine = 7;
// $chiffre_fetiche_xavier = 130;
// $chiffre_fetiche_andre = 8;

// $change = $chiffre_fetiche_sandrine;
// $$chiffre_fetiche_xavier = $change;
// $chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
// $chiffre_fetiche_xavier = $change;

// echo "$chiffre_fetiche_xavier $chiffre_fetiche_sandrine";

// $result = $chiffre_fetiche_sandrine - ($chiffre_fetiche_andre + $chiffre_fetiche_xavier);

// if ($result < 50)
// {
//     echo $result;
// }

//exos6
// $compte = -100;

// if ($compte > 0)
// {
//     echo "bravo vous ètes un bon gestionnaire";
// }
// else if ($compte < 0)
// {
//     echo "vous faite vraiment n'importe quoi de votre argents";
// }
//exos 7
// function functionMeteo($v,$h,$c)
// {
//     $vent = $v;
//     $houle = $h;
//     $cadence_vague = $c;
//     if ($vent >= 30 && $houle <= 20 && $cadence_vague >= 10 || $vent < 30 && $houle <= 30 && $cadence_vague <= 8)
//     {
//         echo "on peux aller surfer !";
//     }
//     else
//     {
//         echo "on ne peux pas surfer !";
//     }
// }

// functionMeteo(100,100,2);

//exercice 8
$nombre_1 = 88;
$nombre_2 = 7;
$nombre_3 = 23;
$nombre_4 = 5;
$nombre_5 = 45;
$nombre_6 = 12;

function isMultiple($nbr,$nbr2)
{

    if($nbr % $nbr2 == 0)
    {
        return $nbr * -1;
    }
    else
    {
        return $nbr;
    }
}
$result = isMultiple($nombre_1 , 2) + isMultiple($nombre_2 , 2) + isMultiple($nombre_3 , 2) + isMultiple($nombre_4 , 2) + isMultiple($nombre_5 , 2) + isMultiple($nombre_6 , 2);
echo $result;

?>