<?php
$pdo = new PDO('mysql:dbname=id19806984_portfolio;host=localhost;charset=utf8', 'id19806984_nqthqn', 'gsp683aQ>bd}@vmL');
//$pdo = new PDO('mysql:dbname=portfolio;host=localhost;charset=utf8', 'root', '');
$tab = $pdo->query("SELECT * FROM projet ORDER BY idp DESC")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PORTFOLIO NN - Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php">Nathan NOVIER</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">A propos de moi</a></li>
          <li><a class="nav-link scrollto" href="#cursus">Mon Parcours</a></li>
          <li><a class="nav-link scrollto " href="#comp">Mes Compétences</a></li>
          <li><a class="nav-link scrollto " href="#projet">Mes Projets</a></li>
          <li><a class="nav-link scrollto " href="CV-NN.pdf">Mon CV</a></li>
          <li><a class="nav-link scrollto" href="#contact">Mes Contacts</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="accueil">
    <div class="hero route bg-image fade-in" style="background-image: url(img/accueil-bg.jpg)">
      <div class="overlay-itro"></div>
      <div class="hero-content display-table">
        <div class="table-cell">
          <h1 class="hero-title mb-4">Bienvenue sur mon Portfolio</h1>
          <p class="hero-subtitle">Nathan NOVIER, étudiant à l'ECE Paris</p>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="about" class="about-mf sect-pt4" style="background-image: url(img/back.jpg);padding: 6rem;">
      <div class="container box-shadow-full">
        <div class="row">

          <div class="col-md-3">
            <div class="about-img">
              <img src="img/pp-1.jpg" class="img-fluid rounded b-shadow-a" height="300px">
            </div>
          </div>

          <div class="col-md-3">
            <div class="about-info">
              <p><span class="title-s">Nom : </span> <span class="title-r">NOVIER</span></p>
              <p><span class="title-s">Prénom : </span> <span class="title-r">Nathan</span></p>
              <p><span class="title-s">Statut : </span> <span class="title-r">Etudiant à l'ECE Paris</span></p>
              <p><span class="title-s">Email: </span> <span class="title-r">nathannovier@gmail.com</span></p>
              <p><span class="title-s">Numéro : </span> <span class="title-r">06.37.89.21.08</span></p>
              <p><span class="title-s">CV : </span> <span><a href="CV-NN.pdf"><button type="button" class="btn btn-dark">Consulter mon CV</button></a></span></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="title-box-2">
              <h5 class="title-left" style="text-align: center; font-weight: 600; font-size: 26px;">
                A propos de moi
              </h5>
            </div>
            <p class="lead" style="text-align: center; font-weight: 500;">
              Bienvenue sur mon Portfolio.
              Je suis Nathan Novier, étudiant en 2ème année de Bachelor Numérique à l'ECE Paris.
            </p>
            <p class="lead" style="text-align: center; font-weight: 500;">
              Je m'intéresse principalement au développement (frontend / backend) ainsi qu'à la data
            </p>
            <p class="lead" style="text-align: center; font-weight: 500;">
              Ce portfolio numérique permet de visualiser en profondeur mon parcours ainsi que les divers projets que j'ai réalisés ainsi que mes compétences.  
            </p>
          </div>

        </div>
      </div>
    </section>

    <section id="cursus" class="about-mf sect-pt4 route">
      <div class="title-box text-center">
        <h3 class="title-a">
          Mon Parcours
        </h3>
        <p class="subtitle-a">
          Toutes mes formations pédagogiques et mes expériences professionnelles
        </p>
        <div class="line-mf"></div>
      </div>
      <div class="container py-5">

        <div class="main-timeline">

          <div class="timeline right">
            <div class="card">
              <div class="card-body p-4">
                <span class="titre">STAGE DEVELOPPEMENT | RGDH HYDRAULICS</span><br>
                <span class="date">Juin 2022 - Juillet 2022 (2 mois)</span><br><br>
                <p class="mb-0">Stage de 2 mois chez RGDH Hydraulics dans le cadre de ma formation.
                  J'ai été chargé de développer un banc de test pour le contrôle de pupitre de frabrication électronique, et de programmer divers calculateurs Can-Bus.
                </p>
              </div>
            </div>
          </div>

          <div class="timeline left">
            <div class="card">
              <div class="card-body p-4">
                <span class="titre">BACHELOR NUMÉRIQUE | ECE PARIS</span><br>
                <span class="date">Depuis Septembre 2021</span><br><br>
                <p class="mb-0">Changement de filière en me spécialisant dans le domaine du numérique et de l'informatique,
                  où j'étudie de nouveaux domaines comme le développement WEB, la programmation ainsi que des cours de réseaux et
                  de base de données.</p>
              </div>
            </div>
          </div>

          <div class="timeline right">
            <div class="card">
              <div class="card-body p-4">
                <span class="titre">MAGASINIER | RGDH HYDRAULICS</span><br>
                <span class="date">Eté 2021 (2 mois)</span><br><br>
                <p class="mb-0">2e année où je travaille chez RGDH Hydraulics pour l'été en tant que magasinier ainsi que pour aider à fabriquer des composants électroniques.</p>
              </div>
            </div>
          </div>

          <div class="timeline left">
            <div class="card">
              <div class="card-body p-4">
                <span class="titre">PREPA INTEGRÉE | ECE PARIS</span><br>
                <span class="date">Septembre 2020 - Juin 2021</span><br><br>
                <p class="mb-0">1ère année de classe préparatoire intégrée au programme d'ingénieur à l'école centrale électronique
                  où j'ai pu apprendre des notions de bases dans l'informatique, l'électronique ainsi que la mécanique.</p>
              </div>
            </div>
          </div>

          <div class="timeline right">
            <div class="card">
              <div class="card-body p-4">
                <span class="titre">MAGASINIER | RGDH HYDRAULICS</span><br>
                <span class="date">Été 2020 (2 mois)</span><br><br>
                <p class="mb-0">Travail d'été chez RGDH Hydraulics en tant que magasinier. Dans ce job d'été j'ai pu aider l'entreprise à réaménager une partie de leur atelier ainsi qu'aider à la fabraication de composants électroniques.</p>
              </div>
            </div>
          </div>

          <div class="timeline left">
            <div class="card">
              <div class="card-body p-4">
                <span class="titre">BAC S | LYCÉE SIMONE SIGNORET</span><br>
                <span class="date">Juin 2020</span><br><br>
                <p class="mb-0">Obtention de mon baccalauréat scientifique option mathématiques avec mention assez bien au lycée Simone Signoret à Vaux-le-Pénil.</p>
              </div>
            </div>
          </div>

          <div class="timeline right">
            <div class="card">
              <div class="card-body p-4">
                <span class="titre">BENEVOLAT AU LION'S CLUB</span><br>
                <span class="date">Depuis 2018</span><br><br>
                <p class="mb-0">Participation à plusieurs missions bénévoles de collecte de dons tel que la vente annuelle de roses ou encore l'organisation de lotos.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="comp" class="about-mf sect-pt4 route" style="background-image: url(img/back.jpg);padding: 4rem;">
      <div class="title-box text-center">
        <h3 class="title-a" style="color: white;">
          Mes Compétences
        </h3>
        <p class="subtitle-a" style="color: white;">
          Les langages de programmation et de développement que je maîtrise
        </p>
        <div class="line-mf" style="background-color: white;"></div>
      </div><br>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full" style="background-color: rgb(158,115,204);">
              <div class="row">

                <div class="col-md-6">
                  <div class="skill-mf">
                    <span>HTML</span> <span class="pull-right">3 ans | 75%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS</span> <span class="">3 ans | 65%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">2 ans | 75%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">1 an | 50%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="skill-mf">
                    <span>PYTHON</span> <span class="pull-right">2 ans | 65%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>C</span> <span class="pull-right">2 ans | 65%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>SQL</span> <span class="pull-right">2 ans | 70%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Java</span> <span class="pull-right">< 1 ans | 40%</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="title-box text-center">
        <h3 style="color: white; padding: 2rem; padding-top: 5rem;">
          Compétences diverses
        </h3>
      </div><br>
      <div class="container">
        <div class="row">
          <div class="col-3 box-shadow-full" style="background-color: rgb(158,115,204);">
            <img class="" src="img/github.png" width="100px">
            <span class="divers">Github</span>
            <span class="divers2">Projet en groupe</span>
          </div>
          <div class="col-3 box-shadow-full" style="background-color: rgb(158,115,204);">
            <img class="" src="img/bootstrap.png" height="100px">
            <span class="divers">Bootstrap</span>
            <span class="divers2">Edition de code HTML</span>
          </div>
          <div class="col-3 box-shadow-full" style="background-color: rgb(158,115,204);">
            <img class="" src="img/photoshop.png" width="100px">
            <span class="divers">Photoshop</span>
            <span class="divers2">Edition d'images</span>
          </div>
          <div class="col-3 box-shadow-full" style="background-color: rgb(158,115,204);">
            <img class="" src="img/mysql.png" height="100px">
            <span class="divers">MySql</span>
            <span class="divers2">Gestion de base de données</span>
          </div>
        </div>
      </div>
    </section>

    <section id="projet" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Mes Projets
              </h3>
              <p class="subtitle-a">
                Liste de tous mes projets réalisés
              </p>
              <div class="line-mf"></div>
            </div><br><br>
          </div>
        </div>

        <div class="row"  >
          <?php foreach ($tab as $proj) { ?>
            <div class="col-4">
              <div class="card">
                <div class="work-img">
                  <a href="portfolio-projet.php?idp=<?php echo $proj["idp"] ?>"><img src="<?php echo $proj["photo1"] ?>" class="card-img-top"></a>
                </div>
                <div class="work-content">
                  <div class="gauche">
                    <h5 class="card-title"><?php echo $proj["nom"] ?></h5>
                    <span class="card-title"><?php echo $proj["soust"] ?></span><br><br><br><br>
                    <span class="w-more"><?php echo $proj["langage"] ?>
                  </div>
                  <div class="droite">
                    <span class="w-more"><?php echo $proj["annee"] ?></span>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <section id="contact" class="about-mf sect-pt4 route" style="background-color: black;padding: 4rem;">
      <div class="title-box text-center">
        <h3 style="color: white;">
          Mes réseaux sociaux
        </h3>
      </div>
      <div class="wrapper">
        <a href="https://www.linkedin.com/in/nathan-novier-524586230/" class="icon linkedin">
          <div class="tooltip">Linkedin</div>
          <span><i class="fab fa-linkedin"></i></span>
        </a>
        <a href="https://github.com/nqhtqn" class="icon github">
          <div class="tooltip">Github</div>
          <span><i class="fab fa-github"></i></span>
        </a>
        <a href="https://www.instagram.com/nath.nvr/" class="icon instagram">
          <div class="tooltip">Instagram</div>
          <span><i class="fab fa-instagram"></i></span>
        </a>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>