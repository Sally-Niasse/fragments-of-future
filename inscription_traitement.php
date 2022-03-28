<?php 
    session_start();
    include("config.php");

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['password_retype'])){
    if($_POST['password'] === $_POST['password_retype']){ // si les deux mdp saisis sont bons
        $mail = htmlspecialchars($_POST['mail']);
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

        $requete="INSERT INTO utilisateurs VALUES(NULL, :mail, :password, 1)";
        $insert= $bdd->prepare($requete);
        $insert-> bindParam(':mail', $mail, PDO::PARAM_STR);
        $insert-> bindParam(':password', $password, PDO::PARAM_STR);
        $insert-> execute(array(":mail"=>$mail, "password"=>$password));
        // On redirige avec le message de succès
        header('Location:index.php');

        die();
        }else{
            header('Location:inscription.php?reg_err=error');
            echo("<script>alert('Veuillez recommencer')</script>");
        }
    
    }
    ?>