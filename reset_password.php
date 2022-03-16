<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_start.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <title>Document</title>
</head>
<body>

<?php
session_start();
    include("config.php");
    if(isset($_GET["mail"])){
      // Permet d'éviter la faille de sécurité XSS
      $mail = $_GET['mail']; 
      
      // On regarde si l'utilisateur est inscrit dans la table utilisateurs
      $check = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = ?');
      $check->execute(array($mail));
      $data = $check->fetch();
      $row = $check->rowCount();
                // Si le mot de passe est le bon
                if($row > 1){
                    // On créer la session et on redirige sur index.php
                    $to= $mail;
                    $subject= "Réinitialisation mot de passe";
                    $header= "From: fragmentsoffuture@gmail.com". "\r\n". "Reply-to: fragmentsoffuture@gmail.com". "\r\n". "X-Mailer: PHP" .phpversion();
                    $message="Bonjour,". "\r\n"."Vous avez demandez à changer votre mot de passe sur le site Fragments of Future. Afin de réinitialiser votre mot de passe veuillez cliquer sur le lien ci-dessous: <a href='insert_password'>réinitiaisation de mot de passe</a>". "\r\n"."Si vous n'êtes pas à l'origine de cette demande, ignorez  ce mail.". "\r\n"."Merci.";
                    mail($to, $subject, $message, $header);
                
                    echo("le mail est partie normalement");
                }
            }
?>
    <div class="container">
        <a href="accueil.php"><button class="retour">&larr;</button><a> 
            <form action="reset_password.php" method="GET">
                <img src="img/logo/fof_logo_final_long_black.png" alt="">
                <div class="form-group2">
                    <input type="mail" name="mail" placeholder="Votre email" required>
                </div>
                <p>En cliquant, nous enverrons un mail à l'adresse indiqué</p>
                <div class="form-group2">
                    <input type="submit" value="Réinitialiser" id="reinitialiser"> <br>
                    <div class="reset">
                        <p> Votre mail a bien été réinitialiser. Veuillez suivre les instructions inscrite dans le mail</p>
                        <a href="accueil.php">Retour à l'accueil</a>
                    </div>
                </div>  
            </form>
        </div>
     
</body>
</html>
