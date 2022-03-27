<?php
include("config.php");
session_start();
if(isset($_GET["save"])){

    $newId =$_POST["save"];
    $save="UPDATE utilisateurs SET save=".$newId." WHERE id_utilisateurs=".$_SESSION["id_utilisateurs"]."";
    $req= $bdd->query($save);
    $req-> execute();
    $_SESSION["save"]=$id_suivant;
    echo $_SESSION["save"];

}
