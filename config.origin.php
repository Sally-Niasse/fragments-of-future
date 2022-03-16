<?php
    // Connexion à la bdd
    $bdd=  new PDO('mysql:host=localhost;dbname=fragment_future', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //     $bdd=  new PDO('mysql:host=51.83.46.101; dbname=fragment_future', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>