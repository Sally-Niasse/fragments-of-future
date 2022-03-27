<?php
session_start();
include("config.php");

if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {

    $mail = htmlspecialchars($_POST['mail']);

    $check = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = ?');
    $check->execute(array($login));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row = 0){
        if ($_POST['password'] === $_POST['password_retype']) {
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
            $requete = "INSERT INTO utilisateurs VALUES(NULL, :mail, :password, 1)";
            $insert = $bdd->prepare($requete);
            $insert->bindParam(':mail', $mail, PDO::PARAM_STR);
            $insert->bindParam(':password', $password, PDO::PARAM_STR);
            $insert->execute(array(":mail" => $mail, "password" => $password));

            // On redirige avec le message de succès
            echo ("inscription");
            header('Location:index.php?success=new_account');
    
            die();
        } else {
            header('Location:inscription.php?reg_err=password');
        }
 
    } else{
        header('Location:inscription.php?reg_err=already');
    }

   
}
