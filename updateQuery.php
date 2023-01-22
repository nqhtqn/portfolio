<?php

$pdo = new PDO('mysql:dbname=portfolio;host=localhost;charset=utf8', 'root', '');
$searchTerm = $_GET['q'];
if ($searchTerm == 'all') {

  $tab = $pdo->query("SELECT * FROM projet ORDER BY idp DESC")->fetchAll();
  foreach ($tab as $proj) { ?>
    <div class="col-4">
      <a href="portfolio-projet.php?idp=<?php echo $proj["idp"] ?>">
        <div class="card">
          <div class="work-img">
            <img src="<?php echo $proj["photo1"] ?>" class="card-img-top">
          </div>
          <div class="work-content">
            <div class="gauche">
              <h5 class="card-title"><?php echo $proj["nom"] ?></h5>
              <span class="card-title"><?php echo $proj["soust"] ?></span><br><br>
              <span class="w-more"><?php echo $proj["langage"] ?>
            </div>
            <div class="droite">
              <span class="w-more"><?php echo $proj["annee"] ?></span>
            </div>
          </div>
        </div>
      </a>
    </div>
  <?php }
} else {


  $tab = $pdo->query("SELECT * FROM projet WHERE langage LIKE '$searchTerm' ORDER BY idp DESC")->fetchAll();
  foreach ($tab as $proj) { ?>
    <div class="col-4">
      <a href="portfolio-projet.php?idp=<?php echo $proj["idp"] ?>">
        <div class="card">
          <div class="work-img">
            <img src="<?php echo $proj["photo1"] ?>" class="card-img-top">
          </div>
          <div class="work-content">
            <div class="gauche">
              <h5 class="card-title"><?php echo $proj["nom"] ?></h5>
              <span class="card-title"><?php echo $proj["soust"] ?></span><br><br>
              <span class="w-more"><?php echo $proj["langage"] ?>
            </div>
            <div class="droite">
              <span class="w-more"><?php echo $proj["annee"] ?></span>
            </div>
          </div>
        </div>
      </a>
    </div>
<?php }
} ?>