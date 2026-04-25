<?php
$preferred_dept = $_COOKIE['preferred_department'] ?? '';
$user_name      = $_COOKIE['user_name']            ?? '';
$show_cookie    = !isset($_COOKIE['cookie_consent']);

// Trajto POST nga banneri
if (isset($_POST['cookie_action'])) {
    if ($_POST['cookie_action'] === 'pranoj') {
        setcookie('cookie_consent',        'pranoj',      time() + (365*24*60*60), '/');
        setcookie('consent_date',          date('d.m.Y H:i'), time() + (365*24*60*60), '/');
    } elseif ($_POST['cookie_action'] === 'refuzoj') {
        setcookie('cookie_consent', 'refuzoj', time() + (30*24*60*60), '/');
    }
    header('Location: ballina.php');
    exit();
}

// Fshi cookies per testim
if (isset($_GET['reset_cookies'])) {
    setcookie('cookie_consent',        '', time() - 3600, '/');
    setcookie('consent_date',          '', time() - 3600, '/');
    setcookie('preferred_department',  '', time() - 3600, '/');
    header('Location: ballina.php');
    exit();
}

$page_css = "ballina.css";
require __DIR__ . '/../includes/header.php';?>
<?php require __DIR__ . '/../includes/navbar.php'; ?>

<!-- HERO – pjesa kryesore me background -->
<section class="hero">
    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <!-- Teksti kryesor -->
        <div class="hero-text">
            <h1>CarePoint – Kujdes i sigurt mjekësor 24/7</h1>
            <p>Spital modern me staf profesional dhe teknologji të avancuar.</p>

            <div class="hero-buttons">
                <a href="../Sherbimet/services.php" class="btn btn-primary">Shiko shërbimet</a>
                <a href="../Kontakt/kontakt.php" class="btn btn-secondary">Rezervo termin</a>
            </div>
        </div>

        <!-- KARTAT -->
        <div class="hero-cards">

            <div class="hero-card">
                <i class="fa-solid fa-truck-medical"></i>
                <h3>Urgjenca</h3>
                <p>Shërbime emergjente 24/7 për raste urgjente.</p>
            </div>

            <div class="hero-card">
                <i class="fa-solid fa-stethoscope"></i>
                <h3>Konsulta</h3>
                <p>Kontrolle mjekësore të specializuara.</p>
            </div>

            <div class="hero-card">
                <i class="fa-solid fa-flask"></i>
                <h3>Analiza laboratorike</h3>
                <p>Teste me rezultate të shpejta.</p>
            </div>

        </div>

    </div>
</section>

<?php if ($preferred_dept || $user_name): ?>
<div class="welcome-bar">
    <div class="container welcome-bar__inner">
        <i class="fa-solid fa-circle-check"></i>
        <span>
            <?php if ($user_name): ?>
                Mirë se u ktheve, <strong><?= htmlspecialchars($user_name) ?></strong>!
            <?php else: ?>
                Mirë se erdhe në CarePoint!
            <?php endif; ?>
            <?php if ($preferred_dept): ?>
                Departamenti juaj i preferuar: <strong><?= htmlspecialchars($preferred_dept) ?></strong>
            <?php endif; ?>
        </span>
        <a href="../Cookies/te_drejtat_tuaja.php" class="welcome-bar__link">
            <i class="fa-solid fa-cookie-bite"></i> Menaxho Cookies
        </a>
    </div>
</div>
<?php endif; ?>

<!-- ============================================================
     COOKIE POPUP — shfaqet mbi balline nese nuk ka consent
============================================================ -->
<?php if ($show_cookie): ?>

<!-- Overlay i erret mbi hero -->
<div class="ck-overlay"></div>

<!-- Popup ne mes të faqes -->
<div class="ck-popup" role="dialog" aria-modal="true" aria-label="Njoftim për Cookies">

    <div class="ck-logo">CarePoint<span>.</span></div>

    <p class="ck-text">
        Me pëlqimin tuaj, ne dhe partnerët tanë përdorim cookies ose teknologji të ngjashme
        për të ruajtur, aksesuar dhe procesuar të dhëna personale si vizita juaj në këtë faqe,
        adresat IP dhe identifikuesit e pajisjes. Disa partnerë nuk kërkojnë pëlqimin tuaj dhe
        mbështeten në interesin e tyre legjitim. Mund të tërhiqni pëlqimin në çdo kohë në
        <a href="../Cookies/te_drejtat_tuaja.php">Politikën e Privatësisë</a> të CarePoint.
    </p>

    <p class="ck-purposes-title">Ne dhe partnerët tanë përpunojmë të dhëna për qëllimet e mëposhtme:</p>
    <p class="ck-purposes-desc">
        Personalizimi i shërbimeve mjekësore dhe departamentit të preferuar,
        matja e reklamave dhe përmbajtjes, hulumtimi i audiencës dhe zhvillimi i shërbimeve,
        ruajtja dhe/ose aksesi i informacionit në pajisje.
    </p>

    <div class="ck-buttons">
        <!-- Preferencat -->
        <button class="ck-btn ck-btn-drejtat"
                onclick="window.location.href='../Cookies/preferences.php'">
            <i class="fa-solid fa-sliders"></i> Preferencat
        </button>

        <!-- Refuzoj -->
        <form method="POST" style="flex:1;display:flex;">
            <input type="hidden" name="cookie_action" value="refuzoj">
            <button type="submit" class="ck-btn ck-btn-refuzoj" style="width:100%">Refuzoj</button>
        </form>

        <!-- Pranoj -->
        <form method="POST" style="flex:1;display:flex;">
            <input type="hidden" name="cookie_action" value="pranoj">
            <button type="submit" class="ck-btn ck-btn-pranoj" style="width:100%">Pranoj</button>
        </form>
    </div>

</div>

<?php endif; ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>

<script src="ballina.js"></script>