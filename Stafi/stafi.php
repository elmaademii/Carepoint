<?php 
$page_css = "stafi.css";
require __DIR__ . '/../includes/header.php'; 
require __DIR__ . '/../includes/navbar.php'; 
require_once __DIR__ . '/../classes/Doctor.php';

$doctors = [
    new Doctor("Dr. Arben Hoxha", "arben@carepoint.com", "doctor", "Kardiolog", "+38344111222", "25+ vjet përvojë", "../img/kardiolog.jpg", "kardiolog-1.html"),
    new Doctor("Dr. Dritan Shala", "dritan@carepoint.com", "doctor", "Kardiolog", "+38344111333", "20 vjet përvojë", "../img/kardiologu.jpg", "kardiolog-2.html"),
    new Doctor("Dr. Fatmir Krasniqi", "fatmir@carepoint.com", "doctor", "Neurologjist", "+38344111444", "22 vjet përvojë", "../img/neurologjist.jpg", "neurologjist-1.html"),
    new Doctor("Dr. Liridona Berisha", "liridona@carepoint.com", "doctor", "Neurologjiste", "+38344111555", "15 vjet përvojë", "../img/neurologjiste.jpg", "neurologjiste.html"),
    new Doctor("Dr. Elona Gashi", "elona@carepoint.com", "doctor", "Gjinekologe", "+38344111666", "30 vjet përvojë", "../img/gjinekologia.jpg", "gjinekologe-1.html"),
    new Doctor("Dr. Anisa Bytyqi", "anisa@carepoint.com", "doctor", "Gjinekologe", "+38344111777", "9 vjet përvojë", "../img/gjinekologiaa.jpg", "gjinekologe-2.html"),
    new Doctor("Dr. Shkumbin Rexhepi", "shkumbin@carepoint.com", "doctor", "Laborant", "+38344111888", "10 vjet përvojë", "../img/laboranti.jpg", "laborant.html"),
    new Doctor("Dr. Valmira Jakupi", "valmira@carepoint.com", "doctor", "Laborante", "+38344111999", "9 vjet përvojë", "../img/laborante.jpg", "laborante.html"),
    new Doctor("Dr. Agron Bajrami", "agron@carepoint.com", "doctor", "Radiologjist", "+38344111000", "16 vjet përvojë", "../img/radiologjist.jpg", "radiologjist.html"),
    new Doctor("Dr. Ramadan Luma", "ramadan@carepoint.com", "doctor", "Mjek Familjar", "+38344112121", "35 vjet përvojë", "../img/MjekuFamiljar.jpg", "mjek-familjar.html"),
    new Doctor("Dr. Vlora Morina", "vlora@carepoint.com", "doctor", "Pediatre", "+38344113131", "15 vjet përvojë", "../img/pediatre.jpg", "pediatre.html"),
    new Doctor("Dr. Agim Hoxha", "agim@carepoint.com", "doctor", "Ortoped", "+38344114141", "32 vjet përvojë", "../img/ortopedi - Copy.jpg", "ortoped.html"),
];
?>

<!-- HERO -->
<section class="hero hero-services">
    <div class="container">
        <h1>Stafi Mjekësor</h1>
        <p>Profesionistët mjekësorë me përvojë dhe angazhim për shëndetin tuaj.</p>

        <div class="breadcrumb">
            <a href="../Ballina/ballina.php">Ballina</a>
            <span>&gt;</span>
            <span>Stafi Mjekësor</span>
        </div>
    </div>
</section>

<!-- GRID E STAFIT -->
<main class="container">

    <!-- TOOLS: Search -->
    <section class="staff-tools">
        <input
            type="text"
            id="staffSearch"
            placeholder="Kërko sipas emrit ose specializimit..."
            aria-label="Kërko staf"
        />
        <div class="staff-stats" id="staffStats"></div>
    </section>

   <section class="staff-grid">

    <?php foreach ($doctors as $doctor): ?>
        <a href="<?php echo $doctor->getProfileLink(); ?>" class="staff-link">
            <article class="staff-card">

                <div class="staff-image">
                    <img src="<?php echo $doctor->getImage(); ?>" alt="<?php echo htmlspecialchars($doctor->getName()); ?>">
                </div>

                <h3><?php echo htmlspecialchars($doctor->getName()); ?></h3>
                <p class="staff-specialty"><?php echo htmlspecialchars($doctor->getSpecialty()); ?></p>

            </article>
        </a>
    <?php endforeach; ?>

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

<script src="stafi.js"></script>
<script src="../cookies.js"></script>

<?php require __DIR__ . '/../includes/footer.php'; ?>