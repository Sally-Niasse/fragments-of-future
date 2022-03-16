<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo/fof_logo_final.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="app.js"></script>
    <title>Fragments of Future</title>
</head>

<body>
  <?php
    include("config.php");
    session_start();
    // Si j'arrive pour la première fois donc save=0/1
    if(isset($_SESSION["login"])){?>


  <div class="container">
  <nav>
    <h2>Fragments of Future</h2> <!-- a terme une image-->
    <h3>Personnages rencontrés</h3>
    <div class="circle">
      <div>
        <img class="pnj" src="img/perso/sasha.png" alt="">
        <img class="pnj" src="img/perso/twan.png" alt="">
        <img class="pnj" src="img/perso/professeur.png" alt="">
        <img class="pnj" src="img/perso/bloup.png" alt="">
        <img class="pnj" src="img/perso/noona.png" alt="">
        <img class="pnj" src="img/perso/eunji.png" alt="">
        <img class="pnj" src="img/perso/nathan.png" alt="">
        <img class="pnj" src="img/perso/clay.png" alt="">
        <img class="pnj" src="img/perso/alice.png" alt="">
    </div>

    <div class="setting">
        <a href="deconnexion.php"><img src="img/logo/log-out.png" alt=""></a>
        <img src="img/logo/speaker-filled-audio-tool.png" alt="">
        <a href="https://www.instagram.com/fragmentsoffuture/?hl=fr" target="_blank"><img src="img/logo/instagram.png" alt=""></a>
    </div>
  </nav>
  <div id="gamespace" class="gamespace">
      <div class="bubbleLiam recit" id="" data-suiv="<?php echo $_SESSION["save"] ?>" style="display: none;">
        <div class="content">
          <p>hey</p>
          <img class="liam_pdp" src="img/perso/liam.png" alt="">
        </div>
    </div>
    </div> 

    <div class="vision">
     <div class="delegue">
        <button id="close-btn" class="close-button">&times;</button>
        <img src="img/vision/delegue.jpg" alt="">
      </div>
      <div class="danseur">
        <button id="close-btn" class="close-button">&times;</button>
        <img src="img/vision/danseur.jpg" alt="">
      </div>
      <div class="nanji">
        <button id="close-btn" class="close-button">&times;</button>
        <img src="img/vision/nanji.jpg" alt="">
      </div>
    </div>

  <script>

    var gamespace = document.getElementById("gamespace");
    var compteur = 0;
    function scrollDown(){
      gamespace.scrollTop = gamespace.scrollHeight;
      // gamespace.scrollTop.style.transition="ease-in-out 200ms";

    }
    // Compteur qui efface les premières bulles
    $(".gamespace").on("click",function(){
        compteur = compteur +1;

        if(compteur >= 10){
          $(".gamespace div").first().remove();
        }
      });

  //Script condition d'apparition des bulles
  var id_suivant=1;
  
      $(".gamespace").on("click",function(e){
        //récupération de l'id_suivant penser a jouter un bloc en display none avec l'attr data-suiv pour le e.target fonctionne la première fois
        if(e.target.classList.contains("choice")){
         var idSuivant = e.target.dataset.suiv;
         id_suivant = idSuivant;
         console.log(id_suivant);
         scrollDown();

      }else{
        var lastBubble = document.querySelector(".gamespace").lastElementChild;
        id_suivant = lastBubble.dataset.suiv;
        console.log(id_suivant);
        scrollDown();
      }
      

      $.get("affichage.php",{"id_suivant" : id_suivant},"json") //Version réduite de $.ajax(type:get, etc)
    //Ce code sera exécuté en cas de succès - La réponse du serveur est passée à done()
    .done(function(message){
      // ajoute bloc (message){} soit 2.
        let data = JSON.parse(message);
        var contenu = data[0];
        var choix = data[1];
        var id = data[2];
        console.log(message);
        // alert(nbrid);
        id_suivant=id;
        $(".gamespace").append(contenu, choix);

       //changement des BG en fonction des ids
       //Chmabre 
        // if (id == 2){
        //   document.querySelector(".gamespace").style.backgroundImage="url('img/bg/gymnase_jour.jpeg')";
        //   document.querySelector(".gamespace").style.transition="ease-in-out 00ms"
        // }
        // if (id == ?){
        //   document.querySelector(".gamespace").style.backgroundImage="url('img/bg/?.jpeg')";
        //   document.querySelector(".gamespace").style.transition="ease-in-out 200ms"
        // }
        //Apparition des visions

        if(id == 7){
        document.querySelector(".vision").style.display="block";
        document.querySelector(".vision").style.transition="ease-in 1000ms"
        document.querySelector(".nanji").style.display="block";

      }
      if(id == 16){
        console.log("hey");
        document.querySelector(".vision").style.display="block";
        document.querySelector(".delegue").style.display="block";

      }


    })

    .fail(function(error){
        alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
    })
    //Ce code sera exécuté que la requête soit un succès ou un échec
    .always(function(){
        // alert("Requête effectuée");
    });
    // $.get("save.php", {"save": id_suivant});
    // console.log("hey");

    
});

    </script>

<?php
    }
  ?>



    </body>



