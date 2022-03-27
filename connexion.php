<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclu la connexion à la base de données

    if(!empty($_POST['mail']) && !empty($_POST['password'])) //On vérifie si ces champs existent et s'ils ne sont pas vidents
    {
        // Permet d'éviter la faille de sécurité XSS
        $login = htmlspecialchars($_POST['mail']); 
        $password = htmlspecialchars($_POST['password']);
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = ?');
        $check->execute(array($login));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row > 0){
                // Si le mot de passe est le bon
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur index.php
                    $_SESSION['id_utilisateurs'] = $data['id_utilisateurs'];
                    $_SESSION['login'] = $data['mail'];
                    // $_SESSION['save']=0;
                    $_SESSION['save']=$data["save"];
                    header('Location: fof.php');
                    die();
                }else{ header('Location: index.php?login_err=password'); die(); }
           
        }else{ header('Location: index.php?login_err=already'); die(); }
    }else{ header('Location: index.php'); die();} // si le formulaire est envoyé sans aucune données

    ?>