<?php
$richterScale = rand(1,9);
 switch ($richterScale) {
     case 1:
         echo $richterScale . " Micro-séisme impossible à ressentir.";
         break;
     case 2:
         echo $richterScale . " Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
         break;
     case 3:
         echo $richterScale . " Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
         break;
     case 4:
         echo $richterScale . " Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
         break;
     case 5:
         echo $richterScale . " Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
         break;
     case 6:
         echo $richterScale . " Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
         break;
     case 7:
         echo $richterScale . " Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
         break;
     case 8:
        echo $richterScale . " Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
     case 9:
         echo $richterScale . " Séisme capable de tout détruire sur une très vaste zone.";
         break;
     default:
     echo "Valeur inconnue";
}
?>
