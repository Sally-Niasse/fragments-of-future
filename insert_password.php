<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau mot de passe</title>
</head>
<body>
    <form action="insert_password">
    <div class="form-group2">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
    </div>
    <div class="form-group2">
        <input type="password" name="password_retype" class="form-control" placeholder="Retapez votre mot de passe" required autocomplete="off">
    </div>
    <div class="form-group2">
    </form>
    
</body>
</html>
<?php
    session_start();
    include("config.php");
    
    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['password']) && !empty($_POST['password_retype'])){
    if($_POST['password'] === $_POST['password_retype']){ // si les deux mdp saisis sont bons
        $newmdp = password_hash($_POST["password"],PASSWORD_DEFAULT);
        $requete="UPDATE utilisateurs SET passwword=:password WHERE mail={$_SESSION["mail"]}";
        $insert= $bdd->prepare($requete);
        $insert-> bindParam(':password', $newmdp, PDO::PARAM_STR);
        $insert-> execute(array("password"=>$newmdp));
        // On redirige avec le message de succès
        header('Location:accueil.php');
        die();
    
    }

}
?>