<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style_start.css">
        <link rel="icon" type="image/png" href="img/logo/fof_logo_final.png"/>
        <title>Connexion</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="app.js"></script>
    </head>
<body>        
<?php 
include("config.php");
   if(isset($_GET['login_err'])) //Vérifie si le get existe
   {
       $err = htmlspecialchars($_GET['login_err']);
// Evite d'utiliser trop de if else
       switch($err) 
       {
           case 'password':
           ?>
               <div class="alert alert-danger">
                   <strong>Erreur</strong> mot de passe incorrect
               </div>
           <?php
           break;

           case 'login':
           ?>
               <div class="alert alert-danger">
                   <strong>Erreur</strong> login incorrect
               </div>
           <?php
           break;

           case 'already':
           ?>
               <div class="alert alert-danger">
                   <strong>Erreur</strong> compte non existant
               </div>
           <?php
           break;
       }
   }
?> 
<div class="background">
    <div class="container">
    <a href="accueil.php"><button class="retour">&larr;</button><a> 
        <form action="connexion.php" method="POST">
            <img src="img/logo/fof_logo_final_long_black.png" alt="">
        <div class="form-group">
            <input type="mail" name="mail" placeholder="Mail" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Mot de passe" required autocomplete="off">
            <p><a href="reset_password.php">Mot de passe oublié ?</a></p>
        </div>
        <p>En vous connectant, vous acceptez de vous conformez à la <a href="#"> Politique de confidentialité</a> et aux  <a href="#"> Conditions générales</a> de Fragments of Future
        </p>
        <div class="form-group">
            <input type="submit" value="Connexion">
        </div>  
        <p>Vous n’êtes pas encore membre ? <a href="inscription.php">Rejoignez-nous</a></p> 
        </form>
    </div>
</div>
        <header>
                <img src="img/logo/fof_logo_final_long_black.png" alt="">
                <a href="#" id="start">Commencer l'aventure</a>
        </header>
        <aside>
       <p> Se réveiller en retard, devoir courir pour se préparer et arriver en retard à l’école, c’est une situation qui est arrivée à tout le monde. Mais, dans la même journée, utiliser sa capacité d’observer des bribes du futur pour se faire élire délégué de sa classe, c’est beaucoup moins commun. C’est pourtant la journée de Liam, qui doit apprendre à manier son nouveau don de prémonition pour aider ses camarades de classe.</p>
       <p>Vous devrez guider Liam dans ses choix. A travers les visions et les interactions que vous avez avec les personnages, déduisez la meilleure manière de leur venir en aide dans leur problème du quotidien.</p>
        </aside>
</body>
</html>