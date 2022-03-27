<?php 
    session_start(); 
    require_once 'config.php';

    if(!empty($_POST['mail']) && !empty($_POST['password']))
    {
        $login = htmlspecialchars($_POST['mail']); 
        $password = htmlspecialchars($_POST['password']);
        
        $check = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = ?');
        $check->execute(array($login));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row > 0){
                
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur sur l'espace utilisateur
                    $_SESSION['id_utilisateurs'] = $data['id_utilisateurs'];
                    $_SESSION['login'] = $data['mail'];
                    $_SESSION['save']=$data["save"];
                    header('Location: fof.php');
                    die();
                }else{ header('Location: index.php?login_err=password'); die(); }
           
        }else{ header('Location: index.php?login_err=already'); die(); }
    }else{ header('Location: index.php'); die();} 