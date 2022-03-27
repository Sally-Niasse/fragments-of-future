<html lang="fr">

<head>
    <!-- General -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo/fof_logo_final.png" />
    <title>Fragments of Future : Accueil</title>

    <!-- Imports -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_index.css">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/e6c960569c.js" crossorigin="anonymous"></script>
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
            <a href="index.php"><button class="retour">&larr;</button></a>
            <form action="connexion.php" method="POST">
                <img src="img/logo/fof_logo_final_long_black.png" alt="">
                <div class="form-group">
                    <input type="mail" name="mail" placeholder="Mail" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Mot de passe" required autocomplete="off">
                    <p><a href="reset_password.php">Mot de passe oublié ?</a></p>
                </div>
                <p>En vous connectant, vous acceptez de vous conformez à la <a href="#"> Politique de confidentialité</a> et aux <a href="#"> Conditions générales</a> de Fragments of Future
                </p>
                <div class="form-group">
                    <input type="submit" value="Connexion">
                </div>
                <p>Vous n’êtes pas encore membre ? <a href="inscription.php">Rejoignez-nous</a></p>
            </form>
        </div>
    </div>

    <img id="frag1" class="fragments" src="img/perso/eunji.png">
    <img id="frag2" class="fragments" src="img/vision/danseur_vision.jpeg">
    <img id="frag3" class="fragments" src="img/perso/alice.png">
    <img id="frag4" class="fragments" src="img/perso/bloup.png">
    <img id="background-img" src="/img/logo/cracks.png">

    <section class="home">
        <div class="home-containt">
            <img id="logo" src="img/logo/fof_logo_final_long_black.png" alt="">
            <a class="button underline" href="#" id="start">Commencer l'aventure</a>
        </div>
    </section>

    <section class="fof-box">
        <h1>Fragments of Future</h1>
        <h3>Qu'est-ce que c'est ?</h3>

        <div class="fof-gallery">
            <div class="fof-card">
                <img class="fof-bubble"
                    src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png">
                <h3>Un visual Novel</h3>
                <p>Vous y serez capable de décider du destin des personnages</p>
            </div>

            <div class="fof-card">
                <img class="fof-bubble"
                    src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png">
                <h3>Une histoire</h3>
                <p> Celle de Liam, un lycéen pas si ordinaire, et de son don de voyance</p>
            </div>

            <div class="fof-card">
                <img class="fof-bubble"
                    src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png">
                <h3>Des personnages</h3>
                <p>Liam, sa classe, et peut-être même un chat liquide, qui sait ?</p>
            </div>

            <div class="fof-card">
                <img class="fof-bubble"
                    src="https://cdn.discordapp.com/attachments/863043594951720995/957718413046857808/unknown.png">
                <h3>Un projet</h3>
                <p>Le défi de 5 étudiants, réalisé en 6 mois seulement</p>
            </div>

        </div>
    </section>

    <section class="pres-box">
        <div class="pres-gallery">
            <img class="pres-img" src="./img/bg/classe.jpg" alt="">
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

</body>

</html>