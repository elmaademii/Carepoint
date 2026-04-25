<?php 
$page_css = "stafi.css";
require __DIR__ . '/../includes/header.php'; 
require __DIR__ . '/../includes/navbar.php'; 
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

        <!-- Kardiolog 1 -->
        <a href="kardiolog-1.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/kardiolog.jpg" alt="Kardiolog 1">
                </div>
                <h3>Dr. Arben Hoxha</h3>
                <p class="staff-specialty">Kardiolog</p>
            </article>
        </a>

        <!-- Kardiolog 2 -->
        <a href="kardiolog-2.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/kardiologu.jpg" alt="Kardiolog 2">
                </div>
                <h3>Dr. Dritan Shala</h3>
                <p class="staff-specialty">Kardiolog</p>
            </article>
        </a>

        <!-- Neurologjist (mashkull) -->
        <a href="neurologjist-1.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/neurologjist.jpg" alt="Neurologjist">
                </div>
                <h3>Dr. Fatmir Krasniqi</h3>
                <p class="staff-specialty">Neurologjist</p>
            </article>
        </a>

        <!-- Neurologjiste (femer) -->
        <a href="neurologjiste.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/neurologjiste.jpg" alt="Neurologjiste">
                </div>
                <h3>Dr. Liridona Berisha</h3>
                <p class="staff-specialty">Neurologjiste</p>
            </article>
        </a>

        <!-- Gjinekologe 1 -->
        <a href="gjinekologe-1.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/gjinekologia.jpg" alt="Gjinekologe 1">
                </div>
                <h3>Dr. Elona Gashi</h3>
                <p class="staff-specialty">Gjinekologe</p>
            </article>
        </a>

        <!-- Gjinekologe 2 -->
        <a href="gjinekologe-2.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/gjinekologiaa.jpg" alt="Gjinekologe 2">
                </div>
                <h3>Dr. Anisa Bytyqi</h3>
                <p class="staff-specialty">Gjinekologe</p>
            </article>
        </a>

        <!-- Laborant (mashkull) -->
        <a href="laborant.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/laboranti.jpg" alt="Laborant">
                </div>
                <h3>Dr. Shkumbin Rexhepi</h3>
                <p class="staff-specialty">Laborant</p>
            </article>
        </a>

        <!-- Laborante (femer) -->
        <a href="laborante.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/laborante.jpg" alt="Laborante">
                </div>
                <h3>Dr. Valmira Jakupi</h3>
                <p class="staff-specialty">Laborante</p>
            </article>
        </a>

        <!-- Radiologjist -->
        <a href="radiologjist.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/radiologjist.jpg" alt="Radiologjist">
                </div>
                <h3>Dr. Agron Bajrami</h3>
                <p class="staff-specialty">Radiologjist</p>
            </article>
        </a>

        <!-- Mjek Familjar -->
        <a href="mjek-familjar.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/MjekuFamiljar.jpg" alt="Mjek Familjar">
                </div>
                <h3>Dr. Ramadan Luma</h3>
                <p class="staff-specialty">Mjek Familjar</p>
            </article>
        </a>

        <!-- Pediatër -->
        <a href="pediatre.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/pediatre.jpg" alt="Pediatër">
                </div>
                <h3>Dr. Vlora Morina</h3>
                <p class="staff-specialty">Pediatre</p>
            </article>
        </a>

        <!-- Ortoped -->
        <a href="ortoped.html" class="staff-link">
            <article class="staff-card">
                <div class="staff-image">
                    <img src="../img/ortopedi - Copy.jpg" alt="Ortoped">
                </div>
                <h3>Dr. Agim Hoxha</h3>
                <p class="staff-specialty">Ortoped</p>
            </article>
        </a>

    </section>

</main>

<script src="stafi.js"></script>
<?php require __DIR__ . '/../includes/footer.php'; ?>