<?php 
    session_start();
    include("config.php");

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password_retype'])){
    if($_POST['password'] === $_POST['password_retype']){ // si les deux mdp saisis sont bons
        $login = htmlspecialchars($_POST['login']);
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

        $requete="INSERT INTO utilisateurs VALUES(NULL, :login, :password, 1)";
        $insert= $bdd->prepare($requete);
        // $insert-> bindParam(':login', $login, PDO::PARAM_STR);
        // $insert-> bindParam(':password', $password, PDO::PARAM_STR);
        $insert-> execute(array(":login"=> $login, "password"=>$password));
        // On redirige avec le message de succès
        header('Location:acceuil.php');

        die();
        }else{
            header('Location:inscription.php?reg_err=error');
            echo("<script>alert('Veuillez recommencer')</script>");
        }
    
    }