<?php 
// LES OPERATEURS LOGIQUES
/*
VRAI && VRAI = VRAI
VRAI && FAUX = FAUX
FAUX && FAUX = FAUX

VRAI || VRAI = VRAI
VRAI || FAUX = VRAI
FAUX || FAUX = FAUX
*/

 $heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
 if((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
   echo "Le magasin sera ouvert";
 }else {
   echo "Le magasin sera fermé";
 }


// INVERSER UNE CONDITION AVEC OPERATEUR LOGIQUE
// $heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
// if((9 > $heure || $heure > 12) && (14 > $heure || $heure > 17)) {
//   echo "Le magasin sera fermé";
// }else {
//   echo "Le magasin sera ouvert";
// } 


// INVERSER UNE CONDITION AVEC !
// $heure = (int)readline('Entrez une heure : '); /* CONVERSION EN ENTIER */
// if(!((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17))) {
//   echo "Le magasin sera fermé";
// }else {
//   echo "Le magasin sera ouvert"; 
// }