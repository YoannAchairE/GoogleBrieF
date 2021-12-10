<?php
    //Données de connexion
    $serveur = "localhost";
    $login = "root";
    $mdp = "";
    $bdd = "googlebrief";

    // Connexion à la base de données
    $conn = mysqli_connect($serveur, $login, $mdp, $bdd);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

?>