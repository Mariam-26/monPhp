<?php
// SWITCH CASE
 $action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)'); /* CONVERSION EN ENTIER */
 switch ($action) {
   case 1:
     echo "j'attaque !";
     break;
   case 2:
     echo "Je me défends";
     break;
   case 3:
     echo "Je ne fais rien";
     break;
   default:
     echo "Commande inconnue";
 }