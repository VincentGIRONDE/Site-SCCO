<!DOCTYPE html>
<html lang="fr">
<?php
    require_once '_inc/header.php';
?>
  <body>
  <?php
    require_once '_inc/navbar.php';
?>
    <div id="carousel" class="carousel slide carousel-fade position-relative p-3">

      <div
        id="titre"
        class="position-absolute text-white top-50 start-50 translate-middle align-items-center"
      >
        <h1 id="title" class="text-center">Skating Club Compiègne Oise</h1>
        <p class="text-center">Patinage artistique et synchronisé</p>
        <p class="text-center">
<!--         <a
          id="rs"
          class="btn btn-outline-secondary text-black mx-auto"
          style="--bs-btn-border-color: white"
          href="#rooms2"
          role="button"
        >
          Rooms & Suite
        </a> -->
      </p>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Patinage/Tout SCCO.jpg" class="d-block w-75 h-75 mx-auto" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/Patinage/MC.jpg" class="d-block w-75 h-75 mx-auto" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/Patinage/Aline.jpg" class="d-block w-75 h-75 mx-auto" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        style="--carousel-control-color: black"
        type="button"
        data-bs-target="#carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        style="--carousel-control-color: black"
        type="button"
        data-bs-target="#carousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    
    <div class="container" >
      <main class="row my-2 align-items-md-center">
        <div class="col col-md-6">
          <h1 id="about">Bienvenue au sein du Skating Club de Compiègne Oise</h1>
          <p>
            Que vous soyez confirmé(e) ou débutant(e), vous avez entre 3 ans et 90 ans (ou plus), le SCCO est prêt à vous accueillir sur la glace pour vous perfectionner et vous amuser.
          </p>
          <br/>
          <p>
            Vous pouvez venir découvrir le patinage ou simplement prendre des renseignements, lors de nos cours pour débutants:
            <br>
            le mardi de 17h15 à 18h15 (7 ans et plus) <br>
            le mercredi de 17h45 à 18h30 (moins de 7 ans) <br>
            le samedi de 11h à 11h45 (7 ans et plus) <br>
            le samedi de 11h45 à 13h30 (moins de 7 ans) <br>
          </p>
        </div>
        <div class="row col-md-6">
          <div class="col col-6 p-1 mt-3">
            <img src="img/Patinage/Débutants.jpg" alt="patins" class="img-fluid" />
          </div>
          <div class="col col-6 p-1 mt-3">
            <img src="img/Patinage/BDJ.jpg" alt="patineuse" class="img-fluid" />
          </div>
        </div>
      </main>
<?php
  require_once '_inc/footer.php';
?>

  </body>
</html>
