<?php


$page = 'blog';



?>



<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon blog</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <style>
    .ui-accordion-header {
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div class="wrapper">
    <?php
    include '../php/components/header.php';
    ?>
    <div class="wrapper_sections-blog flex column row justifyCenter">

      <div class="section-blog-wrapper">
        <h1 class="Blog-titre">Le blog</h1>
        <h2 class="Blog-titre">Découvrez quelques articles sur le développement web et les nouvelles technologies</h2>
        <div class="articles-wrapper">
          <?php
          include("./components/articles-stock.php");
          ?>
          <?php
          foreach ($articles as $article) {
          ?>
            <li class="accordion-header"><?php echo $article["title"]; ?></li>
            <div class="accordion-content">
              <p><?php echo $article["content"]; ?></p>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="blue">
        <?php

        $rss = simplexml_load_file('http://frenchweb.fr/feed'); // Charge le flux RSS
        echo "<h2>Derniers articles de Frenchweb :</h2>";
        echo "<ul class='ul-rss'>";
        foreach ($rss->channel->item as $item) { // Boucle à travers chaque élément du flux RSS
          $title = $item->title;
          $link = $item->link;
          $description = $item->description;
          $pubDate = date('j F Y à H:i', strtotime($item->pubDate)); // Formate la date de publication
          echo "<li class='li-rss'><a href='$link' target='_blank'><strong>$title</strong></a> <div  class ='date-publi'>(publié le $pubDate)<br>$description</div></li>";
        }
        echo "</ul>";


        ?>
      </div>
      <div class="blue2">
        <img src="../imgs/gif/webdev_section.gif" alt="">
      </div>
    </div>

  </div>


  <script>
    $(function() {
      $(".accordion-header").click(function() {
        // Fermer tous les autres panneaux d'accordéon
        $(".accordion-content").not($(this).next(".accordion-content")).slideUp();
        // Ouvrir / fermer le panneau courant
        $(this).next(".accordion-content").slideToggle();
        // Ajouter / supprimer la classe active à l'en-tête courant
        $(this).toggleClass("active-title");
        // Supprimer la classe active de tous les autres en-têtes
        $(".accordion-header").not($(this)).removeClass("active-title");
      }).next(".accordion-content").hide();

    });
  </script>
</body>