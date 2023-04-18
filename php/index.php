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
        <h1>Bienvenue, je suis Afed, développeur web junior.</h1>
        <p>Actuellement en formation développeur web avec <a href="https://oclock.io/formations/developpeur-web" target="_blank">O'Clock</a> ! Je suis fier de présenter mes projets et de montrer comment mes compétences en développement web peuvent être mises à votre disposition.</p>
        <div class="main__buttons-container">
          <ul class="buttons-container__ul">
            <li>
              <a class="buttons-container__contact" href="#">Contactez-moi</a>
            </li>
            <li class="buttons-container__icon-position">
              <a href="#">
                <img class="icon" src="../imgs/in_dropshadow.png" alt="linkedin icon ">
              </a>
            </li>
            <li class="buttons-container__icon-position">
              <a href="#">
                <img class="icon" src="../imgs/github_dropshadow.png" alt="github icon">
              </a>
            </li>
            <li class="buttons-container__icon-position">
              <a href="#">
                <img class="icon" src="../imgs/twitter_dropshadow.png" alt="twitter icon">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="section-vulcain">
        <img src="../imgs/Working_Vulcains.png" alt="photo of working's vulcain">
      </div>
      <div class="section_blog">
        <h1>Le blog</h1>
        <p>Explorez le monde fascinant du développement web avec nos articles dédiés à PHP, les tendances actuelles de conception de sites web, les bonnes pratiques en matière de sécurité web, l'intelligence artificielle et le machine learning, les technologies blockchain, les Progressive Web Apps, les CMS, le référencement (SEO), les APIs, la réalité virtuelle et augmentée, les outils de développement basés sur l'IA, et les applications web sans serveur.</p>
        <div class="main__buttons-container">
          <ul class="buttons-container__ul">
            <li>
              <a class="buttons-container__contact" href="./blog.php">Découvrir les articles</a>
            </li>
            
          </ul>
        </div>
        <div class="red"></div>

    </section>
  </div>
  <script src="../javascript/app.js"></script>

</body>