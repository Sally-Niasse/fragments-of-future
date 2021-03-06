<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- General -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo/fof_logo_final.png" />
    <title>Fragments of Future : Accueil</title>

    <meta name="description" content="Page d'accueil du visual novel Fragments of Future. Découvrez le projet Fragments of Future"> 

    <!-- Imports -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_index.css">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js" defer></script>

</head>

<body>
    <?php
    include("config.php");
    if (isset($_GET['login_err'])) //Vérifie si le get existe
    {
        $err = htmlspecialchars($_GET['login_err']);
        // Evite d'utiliser trop de if else
        switch ($err) {
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
    if (isset($_GET["success"])) {
        $success = htmlspecialchars($_GET['success']);
        // Evite d'utiliser trop de if else
        switch ($success) {
            case 'new_account':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe incorrect
                </div>
            <?php
                break;
            case 'supp__account':
            ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> votre compte a bien été supprimé
                </div>
    <?php
        }
    }
    ?>
    <div class="background">
        <div class="container">
            <a href="index.php" alt="Retour vers l'accueil"><button class="retour">&larr;</button></a>
            <form action="connexion.php" method="POST">
                <img src="img/logo/fof_logo_final_long_black.png" alt="">
                <div class="form-group">
                    <input type="email" name="mail" placeholder="Mail" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Mot de passe" required autocomplete="off">
                </div>
                <p>En vous connectant, vous acceptez de vous conformez à la <a href="mentionlegale.html" alt="Lien vers les mentions légales"> Politique de confidentialité</a> et aux <a href="mentionlegale.html" alt="Lien vers les mentions"> Conditions générales</a> de Fragments of Future
                </p>
                <div class="form-group">
                    <input type="submit" value="Connexion">
                </div>
                <p>Vous n’êtes pas encore membre ? <a href="inscription.php" alt="Lien vers l'inscription">Rejoignez-nous</a></p>
            </form>
        </div>
    </div>

    <img id="frag1" class="fragments" src="img/perso/medium/eunji_medium.png" alt="">
    <img id="frag2" class="fragments" src="img/vision/medium/danseur_medium.webp" alt="">
    <img id="frag3" class="fragments" src="img/perso/medium/alice_medium.png" alt="">
    <img id="frag4" class="fragments" src="./img/perso/medium/bloup_medium.png"  alt="">
    <div id="background-img"></div>

    <section class="home">
        <div class="home-containt">
            <img id="logo" src="img/logo/fof_logo_final_long_black.png" alt="">
            <a class="button underline" href="#" id="start">Commencer l'aventure</a>
        </div>
    </section>

    <section class="fof-box">
        <h1>Fragments of Future</h1>
        <h2>Qu'est-ce que c'est ?</h2>

        <div class="fof-gallery">
            <div class="fof-card">
                <img class="fof-bubble" src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png" alt="">
                <h2>Un visual Novel</h2>
                <p>Vous y serez capable de décider du destin des personnages</p>
            </div>

            <div class="fof-card">
                <img class="fof-bubble" src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png" alt="">
                <h2>Une histoire</h2>
                <p> Celle de Liam, un lycéen pas si ordinaire, et de son don de voyance</p>
            </div>

            <div class="fof-card">
                <img class="fof-bubble" src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png" alt="">
                <h2>Des personnages</h2>
                <p>Liam, sa classe, et peut-être même un chat liquide, qui sait ?</p>
            </div>

            <div class="fof-card" alt="">
                <img class="fof-bubble" src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png" alt="">
                <h2>Un projet</h2>
                <p>Le défi de 5 étudiants, réalisé en 6 mois seulement</p>
            </div>

        </div>
    </section>

    <section class="pres-box">
        <div class="pres-gallery">
            <img class="pres-img" src="./img/bg/classe.webp" alt="">
            <div class="pres-rectangle"></div>
        </div>

        <div class="pres-text">
            <h1>Le scénario</h1>
            <p> Se réveiller en retard, devoir courir pour se préparer et arriver en retard à l’école, c’est une
                situation qui est arrivée à tout le monde. Mais, dans la même journée, utiliser sa capacité d’observer
                des bribes du futur pour se faire élire délégué de sa classe, c’est beaucoup moins commun. C’est
                pourtant la journée de Liam, qui doit apprendre à manier son nouveau don de prémonition pour aider ses
                camarades de classe.</p>
            <p>Vous devrez guider Liam dans ses choix. A travers les visions et les interactions que vous avez avec les
                personnages, déduisez la meilleure manière de leur venir en aide dans leur problème du quotidien.</p>
        </div>
    </section>
    <footer>
        Fragments of Future ©
        <div class="foot">

        <div>
            Nos réseaux <br>
            <a target="_blank" href="https://www.instagram.com/fragmentsoffuture/?utm_medium=copy_link" alt="Redirection vers notre Instagram">
                <img src="img/logo/instagram.png" alt="">
            </a>
        </div>
        <div>
            <a target="_blank" href="mentionlegale.html" alt="Lien vers les mentions légales">
                Mention Légale
            </a>

        </div>
        </div>
       


    </footer>

</body>

</html>