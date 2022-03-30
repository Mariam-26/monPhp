<?php 
// @$chaine=$_POST["chaine"];
// @$valider=$_POST["valider"];
// $resultat="";
// if(isset($valider)) {
  // $resultat=strlen($chaine); /* LONGUEUR DE CHAINE DE CARACTERE */
  // $resultat=strtoupper($chaine); /* MAJUSCULE CHAINE DE CARACTER */
  // $resultat=strtolower($chaine); /* MINUSCULE CHAINE DE CARACTER */
  // $resultat=ucfirst($chaine); /* MAJUSCULE 1 LETTRE CHAINE DE CARACTER */
  // $resultat=substr($chaine, 0,3); /* EXTRACTION CHAINE DE CARACTER */
  // $resultat=trim($chaine); /* ESPACEMENT CHAINE DE CARACTER */
  // $resultat=str_replace(" " "," "_", trim($chaine)); /* ESPACEMENT CHAINE DE CARACTER */
  // $resultat=strip_tags($chaine); /* RETIRE BALISE HTML CHAINE DE CARACTER */
  // $resultat=htmlentities($chaine); /* AFFICHE BALISE HTML CHAINE DE CARACTER */
  // $resultat=ord($chaine); /* CODE DE LETTRE CHAINE DE CARACTER */
  // $resultat=chr($chaine); /* INVERSE DE CODE LETTRE CHAINE DE CARACTER */

//  
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// FORMULAIRE D'INSCRIPTION
// $nom=$_POST["nom"];
// $prenom=$_POST["prenom"];
// $age=$_POST["age"];
// $valider=$_POST["valider"];
// $erreur="";
// if(isset($valider)) {
//   if(empty($nom)) $erreur= "NOM vide !";
//   if(empty($prenom)) $erreur.= "Prénom vide !";
//   if(!is_numeric($age) or $age < 12) $erreur.= "Âge invalide !";
// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon PHP</title>
</head>
<body>


<!-- AFFICHAGE AVEC LE SELECT -->
<!-- <select name="jdm">
<?php for($i = 1; $i <= 31; $i++){ ?>
    <option><?php echo $i?></option>   
  <?php } ?>
</select> -->

====================================================================================================================================================================

<!-- FORMULAIRE D'INSCRIPTION -->
<!-- <header>inscription</header>
<section>
  <form name="fo" method="post" action="">
    <div class="label">Nom</div>
    <div class="input">
      <input type="text" name="nom" value="<?php echo $nom?>">
    </div>

    <div class="label">Prénom</div>
    <div class="input">
      <input type="text" name="prenom" value="<?php echo $prenom?>">
    </div>
    
    <div class="label">Âge</div>
    <div class="input">
      <input type="number" name="age" min="12" value="<?php echo $age?>">
    </div>
    <div class="input">
      <input type="submit" name="valider" value="M'inscrire">
    </div>
  </form>

  <?php if(!empty($erreur)){ ?>
  <div id="erreur"><?php echo $erreur ?></div>
  <?php } ?>
</section> -->

========================================================================================================================================
  <!-- CHAINE DE CARACTERE -->
<!-- <form name="fo" method="post" action="">
  <div class="label">Votre chaîne de caractères</div>
  <div class="input">
    <input type="text" name="chaine" size="40" value="<?php echo $chaine?>">
    <input type="submit" name="valider" value="Valider">
  </div>
</form>
<div id="res">
   <!-- <?php 
    echo $resultat;
  ?>  -->
</div>

========================================================================================================================================
<br>
<!-- DATE -->
<!-- <?php 
@$str=$_POST["str"];
@$valider=$_POST["valider"];
$message=" ";
$jour=array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
if(isset($valider)){
  $tab=explode("/", $str);
  // if(checkdate($tab[1], $tab[0], $tab[2]))
  //   $message="Date valide";
  // else 
  //   $message="Date invalide";
  echo $jour[date("w", mktime(0,0,0,$tab[1], $tab[0], $tab[2]))];
}
// echo date("d/m/Y");
// echo date("H:i:s");
// echo date("w");
// print_r(getdate());
// echo time();
//  echo mktime(0,0,0,3,4,2022);

?>
<form name="fo" method="post" action="">
  

    <input type="text" name="str" value="<?php echo $str?>">
    <input type="submit" name="valider" value="Valider">
  
</form> -->

========================================================================================================================================

<?php 
// Connection à une base de données avec Mysquli
$id=mysqli_connect("localhost", "root", "", "exosphp") or die("Erreur de CONNEXION");

mysqli_query($id, "INSERT INTO langages(langage,execution) values('PHP','Server')"); 

// mysqli_query($id,"UPDATE langages set langage='JAVASCRIPT' WHERE id=3");



// mysqli_query($id,"SELECT * FROM langages");

?>


</body>
</html>