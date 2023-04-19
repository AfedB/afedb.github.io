<?php


$page = 'contact';



?>



<!DOCTYPE html>
<html>

<head>
  <title>Confirmation</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/style.css">
</head>
<style>
  body {
    background-color: #2a2a2a;
  }

  .wrapper {
    margin-top: 1rem;
    color: white;
    display: flex;
    flex-direction: column;

  }

  image {
    max-width: 50rem;
  }

  p {
    padding: 1rem;
  }

  a {
    color: white;
    transition: all .5s ease;
  }

  a:hover {
    font-size: 1.1rem;
  }
</style>

<body>

  <div class="wrapper">


    <?php

    session_start();

    if (isset($_SESSION['nom']) || isset($_SESSION['prenom'])) {
      $nom = $_SESSION['nom'];
      $prenom = $_SESSION['prenom'];

      echo '<h1>Merci '. $prenom . ' ' . $nom . ' pour votre message !</h1>';

    } else {
      echo "Erreur : les informations ne sont pas disponibles.";
    }

    ?>

    <p>Il a visiblement été envoyé avec succès.</p>
    <img src="../../imgs/gif/mail.gif" alt=""> <br>
    <a href="../index.php">revenir à la page d'accueil</a>
  </div>

</body>

</html>