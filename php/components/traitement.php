<?php


session_start();

    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      // Ouverture du fichier en écriture, avec l'option "a" pour ajouter le contenu à la fin du fichier existant
      $fichier = fopen('../data/data.txt', 'a');

      // Écriture des données dans le fichier, en les séparant par une virgule
      fwrite($fichier, $nom . ',' . $prenom . ',' . $email . ',' . $message . "\n");

      // Fermeture du fichier
      fclose($fichier);

      // Redirection vers la page de confirmation
      header('Location: ./confirmation.php');
      exit();
    }

    