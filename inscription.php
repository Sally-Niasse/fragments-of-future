<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link rel="icon" type="image/png" href="img/logo/fof_logo_final.png"/>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style_start.css">
            
            <title>Inscription</title>
        </head>
        <body>
        <div class="background">
            <?php 
            session_start();
                if(isset($_GET['reg_err'])) //S'il existe
                {
                    $err = htmlspecialchars($_GET['reg_err']);
      //Evite d'utiliser plein de of else
                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'login':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> login non valide
                            </div>
                        <?php
                        break;

                        case 'login_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> login trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
        <div class="container">
        <a href="javascript:history.back()"><button class="retour">&larr;</button><a> 
            <form action="inscription_traitement.php" method="POST">  
                <img src="img/logo/fof_logo_final_long_black.png" alt="">
                <div class="form-group2">
                    <input type="mail" name="mail" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group2">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group2">
                    <input type="password" name="password_retype" class="form-control" placeholder="Retapez votre mot de passe" required autocomplete="off">
                </div>
                <div class="form-group2">
                    <input type="submit" value="Inscription">
                </div>    
            </form>
            </div>
        </div>
        </body>
</html>