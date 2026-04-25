<?php
// ============================================================
// CarePoint — Cookie Consent Banner (PHP version)
// ============================================================

// --- Trajto veprimet e butonave ---
if (isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'pranoj') {
        setcookie('cookie_consent',          'pranoj',      time() + (365*24*60*60), '/');
        setcookie('consent_date',            date('d.m.Y H:i'), time() + (365*24*60*60), '/');
        header('Location: ../Ballina/ballina.php');
        exit();

    } elseif ($action === 'refuzoj') {
        setcookie('cookie_consent', 'refuzoj', time() + (30*24*60*60), '/');
        header('Location: ../Ballina/ballina.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePoint – Cookies</title>

    <!-- Stili global i projektit -->
    <link rel="stylesheet" href="../style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="cookies_consent.css">
</head>
<body>

<?php require __DIR__ . '/../includes/navbar.php'; ?>

<!-- ============================================================
     STATUS BOX — shfaqet vetem kur banneri eshte fshehur
============================================================ -->
<?php if (isset($_COOKIE['cookie_consent'])): ?>
<div class="status-box">
    <h2>Statusi i Cookies — CarePoint</h2>
    <?php
    $c    = $_COOKIE['cookie_consent'];
    $date = $_COOKIE['consent_date'] ?? '';
    $dept = $_COOKIE['preferred_department'] ?? '';
    ?>

    <?php if ($c === 'pranoj'): ?>
        <p>Ju keni <span class="tag-ok">pranuar</span> përdorimin e cookies.</p>
        <?php if ($date): ?><p style="font-size:.84rem;color:#888">Data: <?= htmlspecialchars($date) ?></p><?php endif; ?>
        <?php if ($dept): ?><p style="margin-top:8px">Departamenti i preferuar: <strong><?= htmlspecialchars($dept) ?></strong></p><?php endif; ?>
    <?php else: ?>
        <p>Ju keni <span class="tag-no">refuzuar</span> cookies jo-esenciale.</p>
    <?php endif; ?>

    <a class="reset-a" href="#" onclick="
        ['cookie_consent','consent_date','preferred_department']
          .forEach(n => document.cookie = n+'=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;');
        location.reload(); return false;
    ">↺ Rivendos (testim)</a>
    &nbsp;&nbsp;
    <a class="reset-a" href="../Ballina/ballina.php">← Kthehu te Ballina</a>
</div>

<?php else: ?>

<!-- ============================================================
     COOKIE OVERLAY + PANEL
============================================================ -->
<div class="cookie-overlay" role="dialog" aria-modal="true" aria-label="Njoftim për Cookies">
<div class="cookie-panel">

    <!-- LOGO -->
    <div class="cp-logo">
        <span class="cp-logo-text">CarePoint<span class="cp-logo-dot">.</span></span>
    </div>

    <!-- TEKSTI -->
    <p class="cp-text">
        Me pëlqimin tuaj, ne dhe partnerët tanë përdorim cookies ose teknologji të ngjashme
        për të ruajtur, aksesuar dhe procesuar të dhëna personale si vizita juaj në këtë faqe,
        adresat IP dhe identifikuesit e pajisjes. Disa partnerë nuk kërkojnë pëlqimin tuaj dhe
        mbështeten në interesin e tyre legjitim të biznesit. Mund të tërhiqni pëlqimin ose të
        kundërshtoni përpunimin e të dhënave në çdo kohë në
        <a href="te_drejtat_tuaja.php">Politikën e Privatësisë</a> të CarePoint.
    </p>

    <!-- QELLIMET -->
    <p class="cp-purposes-title">Ne dhe partnerët tanë përpunojmë të dhëna për qëllimet e mëposhtme:</p>
    <p class="cp-purposes-desc">
        Personalizimi i shërbimeve mjekësore dhe departamentit të preferuar,
        matja e reklamave dhe përmbajtjes, hulumtimi i audiencës dhe
        zhvillimi i shërbimeve, ruajtja dhe/ose aksesi i informacionit në pajisje.
    </p>

    <!-- LINKU TE DREJTAT TUAJA -->
    <p class="cp-rights-link">
        <a href="te_drejtat_tuaja.php">Shiko Të Drejtat Tuaja →</a>
    </p>

    <!-- BUTONAT -->
    <div class="cp-buttons">

        <!-- Butoni 1: Preferencat -->
        <button class="cp-btn cp-btn-drejtat"
                onclick="window.location.href='preferences.php'">
            <i class="fa-solid fa-sliders"></i> Preferencat
        </button>

        <!-- Butoni 2: Refuzoj -->
        <form method="POST" style="flex:1;display:flex;">
            <input type="hidden" name="action" value="refuzoj">
            <button type="submit" class="cp-btn cp-btn-refuzoj" style="width:100%">
                Refuzoj
            </button>
        </form>

        <!-- Butoni 3: Pranoj -->
        <form method="POST" style="flex:1;display:flex;">
            <input type="hidden" name="action" value="pranoj">
            <button type="submit" class="cp-btn cp-btn-pranoj" style="width:100%">
                Pranoj
            </button>
        </form>

    </div>

</div><!-- /.cookie-panel -->
</div><!-- /.cookie-overlay -->

<?php endif; ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>