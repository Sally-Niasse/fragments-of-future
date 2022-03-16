<?php
  session_start();
    include("config.php");
   $pos="";
   $text="";
   $texte_complet="";
   $didascalie="";
   $choix_complet="";
   $id_suivant=0;

  if (isset($_GET['id_suivant'])){
    //Première requête : récupération des infos concernant l'id +mise en forme
  $sql1 = "SELECT texte, position, pdp, perso, id_recit, suivant.preced AS id_preced, suivant.suiv FROM recit LEFT OUTER JOIN suivant ON recit.id_recit = suivant.preced WHERE id_recit =". $_GET['id_suivant'] . "";

    // On prépare la requête avant l'envoi :
    $req = $bdd -> prepare($sql1);
    $req -> execute();
    // On crée une liste non numérotée avec les résultats
    $data = $req -> fetchAll(PDO::FETCH_ASSOC);
    // Initialisation des variables de texte et photo réutiliser dans les bulles
    $pos=  $data[0]['position'];
    $text= $data[0]['texte'];
    $id= $data[0]['id_recit'];
    $pdp= $data[0]['pdp'];
    $perso= $data[0]['perso'];
    $id_suivant = $_GET['id_suivant'];
    
    if($pos == "didascalie" && $pos == "chapter"){
      $texte_complet="<div class=".$pos." id=".$id." data-suiv=".$data[0]['suiv']."><p>".$text."</p></div>";
    }else{
      $texte_complet= "<div class ='". $pos . "' id='".$id."' data-suiv='".$data[0]['suiv']."'><div class='content'><p>". $text . "</p><img class='". $pdp ."' src='img/perso/". $perso .".png' alt=''></div></div>";
    }
 

 // Deuxième requête : Récupréation des données par rapport à la table des redirections et selon le nombre de résultat afficher des choix
  $reqchoix = "SELECT suivant.suiv, recit.id_recit, recit.texte, recit.type FROM suivant, recit WHERE recit.id_recit = suivant.suiv AND preced=". $id_suivant;
  $reqchoix = $bdd -> query($reqchoix);
  $reqchoix -> execute();
    if($reqchoix->rowcount()>1){ 
      foreach($reqchoix as $choix){
        $choix_complet .= "<div class ='bubbleChoice'><div class='content'><p><a class='choice' href='#'id=".$choix["id_recit"] ." data-suiv='".$choix["suiv"]."'>" . $choix["texte"] . "</a></p></div>";

      }
    
    }
  // var_dump ($texte_complet);
  // var_dump($id_suivant);

  // Troisième reqûete : Mise a jour de la sauvegarde du joueur en implémetant l'id_suivant dans la table 'save'
    $save="UPDATE utilisateurs SET save=".$id_suivant." WHERE id_utilisateurs=".$_SESSION["id_utilisateurs"]."";
    $req= $bdd->query($save);
    $req-> execute();

}
// $return_arr[] = array("texte" => $texte_complet,"choix"=> $choix_complet,"id_suivant"=> $id_suivant);

$_SESSION["save"]=$id_suivant;
$return_arr = array($texte_complet, $choix_complet, $_SESSION["save"]);

// Encoding array in JSON format
echo json_encode($return_arr, JSON_UNESCAPED_SLASHES);
?>