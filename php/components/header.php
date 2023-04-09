<nav>
  <span class="nav-span">Afedb.</span>


  <ul class="nav-ul">
    <li>
      <a <?php if ($page == 'accueil') {
            echo 'class="active"';
          } ?> href="../php/index.php">Accueil</a>
    </li>
    <li>
      <a <?php if ($page == 'about') {
            echo 'class="active"';
          } ?> href="../php/about.php">A propos</a>

    </li>
    <li>
      <a <?php if ($page == 'contact') {
            echo 'class="active"';
          } ?> href="../php/contact.php">Contact</a>

    </li>
</nav>