<?php


$page = 'contact';



?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/form.css">
</head>

<body>

  <div class="wrapper">
    <?php

    include '../php/components/header.php';
    ?>



    <form class="form" method="POST" action="./components/traitement.php">
      <div class="form__group">
        <div class="form__group">
          <label class="form__label" for="prenom">Prénom :</label>
          <input class="form__input" type="text" id="prenom" name="prenom" required>
        </div>
        <label class="form__label" for="nom">Nom :</label>
        <input class="form__input" type="text" id="nom" name="nom" required>
      </div>
      <div class="form__group">
        <label class="form__label" for="email">Adresse email :</label>
        <input class="form__input" type="email" id="email" name="email" required>
      </div>
      <div class="form__group">
        <label class="form__label" for="message">Message :</label>
        <textarea class="form__input" id="message" name="message" rows="5" required></textarea>
      </div>
      <div class="form__group">
        <button class="form__button" type="submit">Envoyer</button>
      </div>
    </form>
  </div>

</body>