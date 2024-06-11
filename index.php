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
        type="button"
        data-bs-target="#carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
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

      <article class="row my-5 py-5 bg-light">
        <div class="row text-center gap-3 my-3 flex-column flex-md-row">
          <div class="col pt-3">
            <h2>Patinoire de COMPIEGNE</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2597.05130058526!2d2.7800764756264704!3d49.38902157140895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d5410c9edecf%3A0xf7c5eb6ba0c2689f!2sPatinoire!5e0!3m2!1sfr!2sfr!4v1706264081288!5m2!1sfr!2sfr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col pt-3">
            <h2>Réseaux sociaux</h2>
            <img
            src="img/Réseaux sociaux/web.png"
            alt="web"
            class="img-fluid w-25"
            />
            <h3>www.scco.fr</h3>
            <br>
            <img
            src="img/Réseaux sociaux/facebook.png"
            alt="facebook"
            class="img-fluid w-25"
            />
            <br>
            <img
            src="img/Réseaux sociaux/youtube.png"
            alt="youtube"
            class="img-fluid w-25"
            />
            <br>
          </div>
          <div class="col pt-3">
            <h2>Contact SCCO</h2>
            <p>Courriel : contact@scco.fr</p>
            <h3>Président, Mr RAVASIO</h3>
            <p>Téléphone : 06 63 56 31</p>
            <h3>Vice présidente, Cathy TEETEN</h3>
            <p>Téléphone : 07 77 38 87 92</p>
          </div>
        </div>
      </article>
    </div>
    <footer class="row vw-100 bg-black position-absolute">
      <form class="col col-auto m-auto w-75 p-2 text-white">
        <h2 id="contact">Prendre contact avec l'association</h2>
        <label class="form-label pt-2 ps-3" for="Name">Nom :</label>
        <input type="text" class="form-control bg-secondary" />
        <label class="form-label pt-2 ps-3" for="">Email :</label>
        <input type="text" class="form-control bg-secondary" />
        <label class="form-label pt-2 ps-3" for="">Message :</label>
        <textarea
          class="form-control bg-secondary"
          name="message"
          cols="30"
          rows="2"
        ></textarea>
        <p class="text-center">
        <input
          class="btn mt-2 btn-outline-secondary text-white btn-close-white"
          type="Submit"
          value="Submit"
        >
      </p>
        <a class="nav-link active mt-3" aria-current="page" href="#top"
          >Accueil</a
        >
    </form>
    </footer>
  </body>
</html>
