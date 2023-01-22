<?php
$pdo = new PDO('mysql:dbname=portfolio;host=127.0.0.1;charset=utf8', 'root', '');
$idp = $_GET["idp"];
$stmt = $pdo->prepare("SELECT * FROM projet WHERE idp=?");
$stmt->execute([$idp]);
$ligne = $stmt->fetch();
$titre = $ligne["nom"];
$soust = $ligne["soust"];
$desc = $ligne["descr"];
$annee = $ligne["annee"];
$lang = $ligne["langage"];
$git = $ligne["git"];
$photo1 = $ligne["photo1"];
$photo2 = $ligne["photo2"];
$photo3 = $ligne["photo3"];
$photo4 = $ligne["photo4"];
$photo5 = $ligne["photo5"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PORTFOLIO NN - Projet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="portfolio.php">Nathan NOVIER</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="portfolio.php#accueil">Accueil</a></li>
          <li><a class="nav-link scrollto" href="portfolio.php#about">A propos de moi</a></li>
          <li><a class="nav-link scrollto" href="portfolio.php#cursus">Mon Parcours</a></li>
          <li><a class="nav-link scrollto " href="portfolio.php#comp">Mes Compétences</a></li>
          <li><a class="nav-link scrollto " href="portfolio.php#projet">Mes Projets</a></li>
          <li><a class="nav-link scrollto " href="CV-NN.pdf">Mon CV</a></li>
          <li><a class="nav-link scrollto" href="portfolio.php#contact">Mes Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="portfolio-details" class="portfolio-details">
    <div class="hero hero-single route bg-image haut" style="background-image: url(img/back.jpg);">
      <div class="hero-content display-table">
        <div class="table-cell">
          <div class="container">
            <h2 class="hero-title mb-4">Portfolio Details</h2>
            <ol class="breadcrumb d-flex justify-content-center">
              <li class="breadcrumb-item">
                <a href="portfolio.php#projet">Projets</a>
              </li>
              <li class="breadcrumb-item active">Projet : <?php echo $titre ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-12">  
          <div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade portfolio-details-slider swiper" data-bs-ride="carousel" style="border: 4px solid black;">
            <div class="carousel-inner swiper-wrapper align-items-center">
              <div class="carousel-item active">
                <img src="<?= $photo1 ?>" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="<?= $photo2 ?>" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="<?= $photo3 ?>" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="<?= $photo4 ?>" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="<?= $photo5 ?>" class="d-block w-100">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col-6">
          <div class="portfolio-info">
            <h3>Informations</h3>
            <ul>
              <li><strong>Projet</strong>: <?=$titre?></li>
              <li><strong>Etude</strong>: <?=$soust?></li>
              <li><strong>Langage(s)</strong>: <?=$lang?></li>
              <li><strong>Année</strong>: <?=$annee?></a></li>
              <li><strong>Code source</strong>: <a class="lien" href="<?=$git?>" target="_blank"><?=$git?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-6">
          <div class="portfolio-description">
          <h3>Description</h3>
            <p>
              <?=nl2br($desc);?>
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>