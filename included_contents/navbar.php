<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php"> <img src="images/ilYaLogo.png" height="60px" alt="Logo Ilya"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == "index" ? "active" : "")?>" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == "vision" ? "active" : "")?>" href="vision.php">Vision</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == "equipe" ? "active" : "")?>" href="equipe.php">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == "offres" ? "active" : "")?>" href="#">Offres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == "blog" ? "active" : "")?>" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == "actualites" ? "active" : "")?>" href="#">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == "contact" ? "active" : "")?>" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
