<?php
    session_start();
    include("config.php");
    $id=$_SESSION['id_utilisateurs'];
    $sql="DELETE FROM utilisateurs WHERE id_utilisateurs=$id";
    $supp=$bdd->query($sql);
    $supp->execute();
    header("Location: index.php?success=supp_account");



?>