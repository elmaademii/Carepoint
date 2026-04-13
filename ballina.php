<?php require 'includes/header.php'; ?>
<?php require 'includes/navbar.php'; ?>

   <!-- HERO – pjesa kryesore me background -->
<section class="hero">
    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <!-- Teksti kryesor -->
        <div class="hero-text">
            <h1>CarePoint – Kujdes i sigurt mjekësor 24/7</h1>
            <p>Spital modern me staf profesional dhe teknologji të avancuar.</p>

            <div class="hero-buttons">
                <a href="services.html" class="btn btn-primary">Shiko shërbimet</a>
                <a href="kontakt.html" class="btn btn-secondary">Rezervo termin</a>
            </div>
        </div>

        <!-- KARTAT MODERNE -->
        <div class="hero-cards">

            <div class="hero-card">
                <i class="fa-solid fa-truck-medical"></i>
                <h3>Urgjenca</h3>
                <p>Shërbime emergjente 24/7 për raste urgjente.</p>
            </div>

            <div class="hero-card">
                <i class="fa-solid fa-stethoscope"></i>
                <h3>Konsulta</h3>
                <p>Kontrolle mjekësore të specializuara nga mjekët tanë.</p>
            </div>

            <div class="hero-card">
                <i class="fa-solid fa-flask"></i>
                <h3>Analiza laboratorike</h3>
                <p>Teste laboratorike me rezultate të shpejta.</p>
            </div>

        </div>

    </div>
</section>


      <?php require 'includes/footer.php'; ?>

<!-- COOKIE BANNER -->
<div id="cookie-banner" class="cookie-banner" hidden>
  <div class="cookie-banner__content">
    <p class="cookie-banner__text">
      CarePoint përdor cookies për të përmirësuar funksionalitetin e faqes dhe për të analizuar përdorimin e saj.
      Duke klikuar “Prano”, ju pajtoheni me përdorimin e cookies.
    </p>

    <div class="cookie-banner__actions">
      <button id="cookie-accept" class="cookie-btn cookie-btn--primary" type="button">
        Prano
      </button>
      <button id="cookie-dismiss" class="cookie-btn cookie-btn--secondary" type="button">
        Refuzo
      </button>
    </div>
  </div>
</div>
    
<script src="ballina.js"></script>
<script src="cookies.js"></script>

   
</body>
</html>