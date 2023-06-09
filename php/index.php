<?php


$page = 'accueil';



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
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div class="wrapper">
    <?php

    include '../php/components/header.php';
    ?>

    <section>
      <div class="section__main">
        <h1>Bienvenue, je suis Afed, développeur web front-end.</h1>
        <p>Bienvenue sur mon portfolio de développeur web ! Je suis fier de présenter mes projets et de montrer comment mes compétences en développement web peuvent être mises à votre disposition.</p>
        <div class="main__buttons-container">
          <ul class="buttons-container__ul">
            <li>
              <a class="buttons-container__contact" href="#">Contactez-moi</a>
            </li>
            <li class="buttons-container__icon-position">
              <a href="#">
                <img class="icon" src="../imgs/icon_linkedin.png" alt="linkedin icon ">
              </a>
            </li>
            <li class="buttons-container__icon-position">
              <a href="#">
                <img class="icon" src="../imgs/icon_github.png" alt="github icon">
              </a>
            </li>
            <li class="buttons-container__icon-position">
              <a href="#">
                <img class="icon" src="../imgs/icon_twitter.png" alt="twitter icon">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="section-vulcain">
        <img src="../imgs/Working_Vulcains.png" alt="photo of working's vulcain">
      </div>
      <div class="blue">
        
      </div>
      <div class="red"></div>

    </section>
  </div>

</body>