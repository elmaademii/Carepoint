<?php 
$page_css = "services.css";
require __DIR__ . '/../includes/header.php'; 
require __DIR__ . '/../includes/navbar.php'; 
?>

<!-- HERO -->
<section class="hero hero-services">
    <div class="container">
        <h1>Shërbimet Mjekësore</h1>
        <p>Kujdes i sigurt mjekësor 24/7 me staf profesional dhe teknologji të avancuar.</p>

        <div class="breadcrumb">
            <a href="../Ballina/ballina.php">Ballina</a>
            <span>&gt;</span>
            <span>Shërbimet Mjekësore</span>
        </div>
    </div>
</section>

<!-- GRID E SHËRBIMEVE -->
<main class="container">
    <section class="services-grid">

        <!-- Kardiologji -->
        <a href="kardiologji.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/kardiologji.jpg" alt="Kardiologji">
                </div>
                <h3>Kardiologji</h3>
            </article>
        </a>

        <!-- Pediatri -->
        <a href="pediatri.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/pediatri.jpg" alt="Pediatri">
                </div>
                <h3>Pediatri</h3>
            </article>
        </a>

        <!-- Ortopedi -->
        <a href="ortopedi.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/ortopedi.jpg" alt="Ortopedi">
                </div>
                <h3>Ortopedi</h3>
            </article>
        </a>

        <!-- Gjinekologji -->
        <a href="gjinekologji.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/gjinekologji.jpg" alt="Gjinekologji">
                </div>
                <h3>Gjinekologji</h3>
            </article>
        </a>

        <!-- Laborator analizash -->
        <a href="laborator.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/laborator.jpg" alt="Laborator analizash">
                </div>
                <h3>Laborator analizash</h3>
            </article>
        </a>

        <!-- Radiologji -->
        <a href="radiologji.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/radiologji.jpg" alt="Radiologji">
                </div>
                <h3>Radiologji</h3>
            </article>
        </a>

        <!-- Mjekësi familjare -->
        <a href="mjekesi-familjare.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/mjekesi-familjare.jpg" alt="Mjekësi familjare">
                </div>
                <h3>Mjekësi familjare</h3>
            </article>
        </a>

        <!-- Neurologji -->
        <a href="neurologji.html" class="service-link">
            <article class="service-card">
                <div class="service-image">
                    <img src="../img/neurologji.jpg" alt="Neurologji">
                </div>
                <h3>Neurologji</h3>
            </article>
        </a>

    </section>
</main>

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

<script src="script.js"></script>
<script src="../cookies.js"></script>

<?php require __DIR__ . '/../includes/footer.php'; ?>