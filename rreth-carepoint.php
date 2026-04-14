<?php 
$page_css = "reth-carepoint.css";
require __DIR__ .'includes/header.php'; 
?>
<?php require __DIR__ .'includes/navbar.php'; ?>

<!-- HERO SEKSION PËR ABOUT US -->
<section class="hero-about">
    <div class="container">
        <h1>Rreth CarePoint</h1>
        <p>Më shumë se 15 vjet eksperiencë në ofrimin e kujdesit mjekësor të cilësisë më të lartë në Kosovë. Jemi krenarë që kemi shërbyer mbi 500,000 pacientë me përkushtim dhe profesionalizëm.</p>
    </div>
</section>

<!-- FOTO E SPITALIT PAS TITULLIT -->
<section class="about-section">
    <div class="container">
        <div class="photo-item" style="margin-bottom: 40px;">
            <img src="img/spitali-kendveshtrim-i-ri.jpg" alt="Këndvështrimi i ri i spitalit CarePoint" class="photo-img">
            <div class="photo-caption">
                <h4>Këndvështrimi i ri i spitalit CarePoint</h4>
                <p>Ndërtesa moderne me infrastrukturë të avancuar për kujdes optimal të pacientëve</p>
            </div>
        </div>
    </div>
</section>

<!-- HISTORIKU I SPITALIT -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Historia jonë</h2>

        <div class="history-content">
            <div class="history-text">
                <p>CarePoint u themelua në vitin 2009...</p>
                <p>Nga një klinikë e vogël...</p>
                <p>Gjatë viteve kemi investuar...</p>
                <p>Në vitin 2023 u zgjeruam...</p>
            </div>

            <div class="history-image">
                <img src="img/spitali-brenda.jpg" alt="Brenda spitalit CarePoint">
            </div>
        </div>
    </div>
</section>

<!-- VLERAT -->
<section class="about-section values-section">
    <div class="container">
        <h2 class="section-title">Misioni, Vizioni & Vlerat</h2>

        <div class="values-grid">
            <div class="value-card">
                <i class="fa-solid fa-bullseye"></i>
                <h3>Misioni</h3>
                <p>Kujdes mjekësor i personalizuar...</p>
            </div>

            <div class="value-card">
                <i class="fa-solid fa-eye"></i>
                <h3>Vizioni</h3>
                <p>Spitali referues në rajon...</p>
            </div>

            <div class="value-card">
                <i class="fa-solid fa-heart"></i>
                <h3>Vlerat</h3>
                <p>Besnikëri, integritet, respekt...</p>
            </div>
        </div>
    </div>
</section>

<!-- DREJTIMET -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Drejtimet mjekësore</h2>

        <div class="services-list">
            <!-- shembull -->
            <div class="service-item">
                <i class="fa-solid fa-heart-pulse"></i>
                <div>
                    <h4>Kardiologji</h4>
                    <p>Diagnostikim dhe trajtim...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ACHIEVEMENTS -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Arritjet</h2>

        <div class="achievements-grid">
            <div>15+ Vjet</div>
            <div>500,000+ Pacientë</div>
            <div>50+ Doktorë</div>
            <div>100+ Pajisje</div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title">Çfarë thonë pacientët</h2>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p>Shërbim shumë profesional...</p>
            </div>
        </div>
    </div>
</section>

<!-- LOCATION -->
<section class="location-section">
    <div class="container">
        <h2 class="section-title">Lokacioni</h2>

        <div class="location-cards">
            <div class="location-card">
                <h3>Adresa</h3>
                <p>Prishtinë</p>
            </div>
        </div>
    </div>
</section>

<!-- COOKIE BANNER -->
<div id="cookie-banner" class="cookie-banner" hidden>
    <div class="cookie-banner__content">
        <p>CarePoint përdor cookies...</p>

        <div class="cookie-banner__actions">
            <button id="cookie-accept" class="cookie-btn">Prano</button>
            <button id="cookie-dismiss" class="cookie-btn">Refuzo</button>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="rreth-carepoint.js"></script>
<script src="cookies.js"></script>

<?php require __DIR__ . 'includes/footer.php'; ?>