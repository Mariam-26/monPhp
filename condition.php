<?php
// LES CONDITIONS


// IF - ELSE
// $note = 12;
// $note = readline('Entrez votre note :'); /* SANS CONVERSION EN ENTIER */
// IF - ELSE
// if($note >= 10){
//   echo 'Dit donc vous avez la moyenne !';
// }else {
//   echo "Domage vous n'avez pas la moyenne";
// }



// SOUS CONDITIONS
// if($note >= 10){
//   if($note == 10){
//     echo "Vous avez juste la moyenne";
//   }else {
//     echo 'Dit donc vous avez la moyenne !';
//   }
// }else {
//   echo "Domage vous n'avez pas la moyenne";
// }



 $note = (int)readline('Entrez votre note :'); /* CONVERSION EN ENTIER */
 
//  IF - ELSE IF - ESLSE
 if($note > 10){
   echo 'Bravo vous avez la moyenne';
 }elseif ($note === 10){
   echo "vous avez juste la moyenne";
 }else {
   echo "Dommage vous n'avez pas la moyenne";
 }




