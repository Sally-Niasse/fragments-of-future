<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="img/logo/fof_logo_final.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style_fof.css">
  <script src="vendors/jquery/jquery-3.4.1.min.js"></script>
  <script src="app.js"></script>
  <title>Fragments of Future</title>
  <meta name="description" content="Page de jeu du visual novel Fragments of Future. Déroulemeent du récit à travers le  clic">
</head>

<body>
  <?php
  include("config.php");
  session_start();
  if (isset($_SESSION["login"])) { ?>


    <div class="container">
      <div class="endgame">
        <div>
          <h2> Vous avez atteint le dernier chapitre, merci de patienter jusque la prochaine mise à jour !</h2>
          <p>Vous serez avertis sur notre compte instagram de l'arrivé des chapitres suivants</p>
          <p><a href="deconnexion.php">Retour à l'accueil</a></p>
        </div>
      </div>
      <button id="open-menu" class="close-button">&equiv;</button>
      <button id="close-menu" class="close-button">&times;</button>
      <nav>
        <div class="user">
          <button class="retour">&larr;</button>
          <div class="info">
            <img src="img/logo/user.png" alt="icone compte utilisateur">
            <p>Votre mail : <?php echo $_SESSION["login"] ?></p>
            <a href="supp_user.php" alt="Button de suppression de compte"> Supprimer mon compte </a>
            <p><strong> Attention :</strong> <br>
              En cliquant sur ce boutton nous supprimerons tout information vous concernant.
              Vous perdrez instantannément votre progression et devrez créer un compte à nouveau afin de recommencer une partie.</p>
          </div>
        </div>
        <img id="logonav" src="img/logo/fof_logo_final_long_black.png" alt="logo du site">
        <div class="charactersCard">
          <h3>Personnages rencontrés</h3>
          <div class="circle">
            <div id="sasha" class="fiche">
              <img class="pnj" src="img/perso/sasha.png" alt="">
              <p>Sasha <br> Meilleur ami</p>
            </div>
            <div id="twan" class="fiche">
              <img class="pnj" src="img/perso/twan.png" alt="">
              <p>Twan <br> Meilleur ami</p>
            </div>
            <div id="professeur" class="fiche">
              <img class="pnj" src="img/perso/professeur.png" alt="">
              <p>Mr.King <br> Professeur</p>
            </div>
            <div id="bloup" class="fiche">
              <img class="pnj" src="img/perso/bloup.png" alt="">
              <p>Bloup <br> Chat liquide</p>
            </div>
            <div id="noona" class="fiche">
              <img class="pnj" src="img/perso/noona.png" alt="">
              <p>Noona <br> Mamie du futur</p>
            </div>
            <div id="eunji" class="fiche">
              <img class="pnj" src="img/perso/eunji.png" alt="">
              <p>Eunji <br> Camarade</p>
            </div>
            <div id="nathan" class="fiche">
              <img class="pnj" src="img/perso/nathan.png" alt="">
              <p>Nathan <br> Camarade</p>
            </div>
            <div id="clay" class="fiche">
              <img class="pnj" src="img/perso/clay.png" alt="">
              <p>Clay <br> Ami du futur</p>
            </div>
            <div id="alice" class="fiche">
              <img class="pnj" src="img/perso/alice.png" alt="">
              <p>Alice <br> Camarade</p>
            </div>
          </div>
        </div>
        <div class="setting">
          <a href="deconnexion.php"><img src="img/logo/log-out.png" alt="Lien de Déconnexion"></a>
          <img id="user" src="img/logo/user.png" alt="icone cliquable compte utilisateur">
          <a href="https://www.instagram.com/fragmentsoffuture/?hl=fr" target="_blank"><img src="img/logo/instagram.png" alt="Lien vers le compte instagram"></a>
        </div>

      </nav>
      <div id="gamespace" class="gamespace">
        <div class="start recit" id="" data-suiv="<?php echo $_SESSION["save"] ?>">
          <p>Pour suivre l'histoire, cliquez sur l'écran et une bulle de dialogue apparaîtra. Lorsque que plusieurs bulles appraissent les unes à côté des autres, ce sont des choix. Sélectionnez-en une pour prendre l'embranchement de votre choix.<br> Amusez vous bien !</p>
        </div>
      </div>

      <div class="vision">
        <div class="delegue">
          <button id="close-btn" class="close-button">&times;</button>
          <img src="img/vision/delegue.jpg" alt="Vision de Liam devant le tableau">
        </div>
        <div class="danseur">
          <button id="close-btn" class="close-button">&times;</button>
          <img src="img/vision/danseur.jpg" alt="Vision Eunji sur scène">
        </div>
        <div class="nanji">
          <button id="close-btn" class="close-button">&times;</button>
          <img src="img/vision/nanji.jpg" alt="Vision de Eunji et Nathan">
        </div>
        <div class="contrat">
          <button id="close-btn" class="close-button">&times;</button>
          <img src="img/vision/eunji-contrat.jpg" alt="Vision de Eunji signant un contrat avec un agent">
        </div>
      </div>
    </div>

    <script>
      var gamespace = document.getElementById("gamespace");
      var compteur = 0;

      function scrollDown() {
        gamespace.scrollTop = gamespace.scrollHeight;

        // gamespace.scrollTop.style.transition="ease-in-out 200ms";

      }
      // Compteur qui efface les premières bulles
      $(".gamespace").on("click", function() {
        compteur = compteur + 1;

        if (compteur >= 10) {
          $(".gamespace div").first().remove();
          scrollDown()
        }
      });

      //Script condition d'apparition des bulles
      var id_suivant = 1;

      $(".gamespace").on("click", function(e) {
        if (e.target.classList.contains("choice")) {
          var idSuivant = e.target.dataset.suiv;
          id_suivant = idSuivant;
          scrollDown();
          console.log(id_suivant);


        } else {
          var lastBubble = document.querySelector(".gamespace").lastElementChild;
          id_suivant = lastBubble.dataset.suiv;
          scrollDown();

          console.log(id_suivant);
        }



        $.get("api_dialogue.php", {
            "id_suivant": id_suivant
          }, "json")
          .done(function(message) {
            let data = JSON.parse(message);
            var contenu = data[0];
            var choix = data[1];
            var id = data[2];
            // console.log(message);
            id_suivant = id;
            $(".gamespace").append(contenu, choix);

            //Apparation des bulles personnages 
            if (id > 9) {
              document.getElementById("twan").style.display = "flex";
            }
            if (id > 17) {
              document.getElementById("sasha").style.display = "flex";
            }
            if (id > 21) {
              document.getElementById("professeur").style.display = "flex";
            }
            if (id > 156) {
              document.getElementById("noona").style.display = "flex";
            }

            //changement des BG en fonction des ids

            if (id <= 5 || id > 278 && id <= 297) {
              document.querySelector(".gamespace").style.backgroundImage = "url('img/bg/chambre.jpg')";
           
            }
            if (id > 5 && id <= 24 || id > 81 && id <= 116 || id > 246 && id <= 252 || id > 335 && id <= 346) {
              document.querySelector(".gamespace").style.backgroundImage = "url('img/bg/classe.jpg')";
            
            }

            if (id > 24 && id <= 43 || id > 346 && id <= 389) {
              document.querySelector(".gamespace").style.backgroundImage = "url('img/bg/lycee.jpg')";
            }

            if (id > 43 && id <= 81 || id > 116 && id <= 137) {
              document.querySelector(".gamespace").style.backgroundImage = "url('img/bg/toilette.jpg')";
            }

            if (id > 137 && id <= 246) {
              document.querySelector(".gamespace").style.backgroundImage = "url('img/bg/appart.jpg')";
              console.log("appartement de noona")
              console.log(id)
            }

            if (id > 252 && id <= 278) {
              document.querySelector(".gamespace").style.backgroundImage = "url('img/bg/gymnase_nuit.jpg')";
              console.log("gymnase de nuit")
              console.log(id)
            }
            if (id > 297 && id <= 335) {
              document.querySelector(".gamespace").style.backgroundImage = "url('img/bg/rue.jpg')";
            
            }


            //Apparition des visions
            if (id == 284) {
              document.querySelector(".vision").style.display = "block";
              document.querySelector(".vision").style.transition = "ease-in 1000ms"
              document.querySelector(".danseur").style.display = "block";
            }

            if (id == 48) {
              document.querySelector(".vision").style.display = "block";
              document.querySelector(".delegue").style.display = "block";

            }

            if (id == 342) {
              document.querySelector(".vision").style.display = "block";
              document.querySelector(".contrat").style.display = "block";

            }

            //Fin de jeu 
            if (id == 377) {
              document.querySelector(".endgame").style.display = "block";
              document.querySelector(".gamespace").style.pointerEvents = "none";

            }

          })

          .fail(function(error) {
            alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
          })
          //Ce code sera exécuté que la requête soit un succès ou un échec
          .always(function() {
            // alert("Requête effectuée");
          });


      });
    </script>

  <?php
  }
  ?>



</body>