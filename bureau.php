<!DOCTYPE html>
<html lang="fr">
<?php
    require_once '_inc/header.php';
?>
  <body>
  <?php
    require_once '_inc/navbar.php';
?>
    
    <div class="container" >
      <main class="row my-2 align-items-md-center">
        <div >
          <h1>Histoire du Skating Club de Compiègne Oise</h1>
          <p>
            Association sportive crée en ...., elle a depuis formé de nombreux patineurs et patineuses en patinage artistique et patinage synchronisé.
          </p>
          <p>
            Son bureau exécutif est exclusivement composé de personnes bénévoles qui oeuvrent au bon fonctionnement de l'association sportive.
          </p>
        </div>
            <div class="row text-center gap-3 my-3 flex-column flex-md-row">
              <div class="col col-3 pt-5">
                <h3>Président</h3> <br> Mr RAVASIO Michel
              </div>
              <div class="col col-3 pt-5">
                <h3>Vice présidente</h3> <br> Mme TEETEN Cathy
              </div>
              <div class="col col-3 pt-5">
                <h3>Trésorière</h3> <br> Mme VOYNEAU Nassima
              </div>
              <div class="col col-3 pt-5">
                <h3>Trésorière adjointe & chargée de communication</h3> <br> Mme MARRAUD DES GROTTES Céline
              </div>
              <div class="col col-3 pt-5">
                <h3>Secrétaire</h3> <br> Mme BOULAIS Karine
              </div>
              <div class="col col-3 pt-5">
                <h3>Secrétaire adjointe</h3> <br> Mme MENUGE Nathalie
              </div>
              <div class="col col-3 pt-5">
                <h3>Responsable section artistique</h3> <br> Mme BAZILE Kelly
              </div>
              <div class="col col-3 pt-5">
                <h3>Responsable section synchro</h3> <br> Mme MUSCEDERE-SNOECK Coralie
              </div>
              <div class="col col-3 pt-5">
                <h3>Chargé des réseaux sociaux</h3> <br> Mr DA SILVA José
              </div>
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
