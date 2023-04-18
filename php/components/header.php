<nav id="navbar">
  <span class="nav-span">Afedb.</span>


  <ul class="nav-ul">
    <li>
      <a <?php if ($page == 'accueil') {
            echo 'class="active"';
          } ?> href="../php/index.php">Accueil</a>
    </li>
    <li>
      <a <?php if ($page == 'blog') {
            echo 'class="active"';
          } ?> href="../php/blog.php">Blog</a>

    </li>
    <li>
      <a <?php if ($page == 'contact') {
            echo 'class="active"';
          } ?> href="../php/contact.php">Contact</a>

    </li>
</nav>