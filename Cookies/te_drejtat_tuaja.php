<?php
// ============================================================
// Cookies/te_drejtat_tuaja.php
// CarePoint — Të Drejtat e Përdoruesit (GDPR)
// Anëtari 3: Cookies + Personalizimi
// ============================================================

// --- Fshi cookies me kërkesë --- PARA header.php
$message = '';
$msg_type = '';

if (isset($_POST['action'])) {

    if ($_POST['action'] === 'delete_all') {
        $cookies = ['cookie_consent','consent_date','preferred_department','appointment_reminder','preferred_time','receive_news','user_name'];
        $deleted = [];
        foreach ($cookies as $cn) {
            if (isset($_COOKIE[$cn])) {
                setcookie($cn, '', time() - 3600, '/');
                $deleted[] = $cn;
            }
        }
        if (count($deleted)) {
            header('Location: te_drejtat_tuaja.php?deleted=all');
            exit();
        }
        $message  = 'Nuk kishte cookies aktive.';
        $msg_type = 'info';
    }

    if ($_POST['action'] === 'delete_one' && !empty($_POST['cookie_name'])) {
        $cn = $_POST['cookie_name'];
        setcookie($cn, '', time() - 3600, '/');
        header('Location: te_drejtat_tuaja.php?deleted=' . urlencode($cn));
        exit();
    }
}

$page_css = '../Cookies/te_drejtat_tuaja.css';
require __DIR__ . '/../includes/header.php';

// Cookies që CarePoint vendos
$cookies_info = [
    'cookie_consent'       => 'Pëlqimi i dhënë (pranoj / refuzoj)',
    'consent_date'         => 'Data dhe ora e dhënies së pëlqimit',
    'preferred_department' => 'Departamenti mjekësor i preferuar',
    'appointment_reminder' => 'Kujtesa për termin (1h / 24h / 48h)',
    'preferred_time'       => 'Orari i preferuar për termin',
    'receive_news'         => 'Njoftime (1 = po, 0 = jo)',
    'user_name'            => 'Emri i shfrytëzuesit',
];
?>

<?php require __DIR__ . '/../includes/navbar.php'; ?>

<!-- ===================== HERO ===================== -->
<section class="hero td-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="../Ballina/ballina.php">Ballina</a>
            <span>›</span>
            <a href="cookies_consent.php">Cookies</a>
            <span>›</span> Të Drejtat Tuaja
        </p>
        <h1><i class="fa-solid fa-shield-halved"></i> Të Drejtat Tuaja</h1>
        <p>Si pacient dhe vizitor i CarePoint, keni të drejta specifike mbi të dhënat tuaja personale sipas GDPR dhe legjislacionit në fuqi.</p>
    </div>
</section>

<!-- ===================== CONTENT ===================== -->
<main class="container td-main">

    <?php
    if (isset($_GET['deleted'])) {
        $del = $_GET['deleted'];
        $msg = $del === 'all' ? 'Të gjitha cookies u fshinë me sukses.' : 'Cookie "' . htmlspecialchars($del) . '" u fshi me sukses.';
        echo '<div class="td-alert td-alert--success"><i class="fa-solid fa-circle-check"></i> ' . $msg . '</div>';
    } elseif ($message) {
        echo '<div class="td-alert td-alert--' . $msg_type . '"><i class="fa-solid fa-circle-info"></i> ' . $message . '</div>';
    }
    ?>


    <!-- ===== 1. TË DREJTAT SIPAS GDPR ===== -->
    <section class="td-section">
        <h2 class="td-section-title">
            <i class="fa-solid fa-scale-balanced"></i>
            Të Drejtat Tuaja Sipas GDPR
        </h2>

        <div class="td-rights-grid">

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                <h3>E Drejta e Aksesit</h3>
                <p>Keni të drejtë të kërkoni kopje të të dhënave tuaja që CarePoint ruan. Do t'ju kthejmë përgjigje brenda 30 ditëve.</p>
            </div>

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-pen-to-square"></i></div>
                <h3>E Drejta e Korrigjimit</h3>
                <p>Nëse të dhënat tuaja janë të pasakta ose jo të plota, keni të drejtë të kërkoni korrigjimin e tyre pa vonesë.</p>
            </div>

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-trash-can"></i></div>
                <h3>E Drejta e Fshirjes</h3>
                <p>Keni të drejtë të kërkoni fshirjen e të dhënave tuaja personale ("e drejta për t'u harruar"), me përjashtim kur ligji e detyron ruajtjen.</p>
            </div>

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-ban"></i></div>
                <h3>E Drejta e Kundërshtimit</h3>
                <p>Mund të kundërshtoni përpunimin e të dhënave tuaja për qëllime marketingu ose kur bazohemi në interesin legjitim të biznesit.</p>
            </div>

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-box-archive"></i></div>
                <h3>E Drejta e Portabilitetit</h3>
                <p>Keni të drejtë të merrni të dhënat tuaja në format të lexueshëm dhe t'i transferoni tek ofrues tjerë shëndetësorë.</p>
            </div>

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-pause"></i></div>
                <h3>E Drejta e Kufizimit</h3>
                <p>Keni të drejtë të kërkoni kufizimin e përpunimit të të dhënave tuaja gjatë shqyrtimit të ankesës ose kontestit.</p>
            </div>

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-robot"></i></div>
                <h3>Vendimet Automatike</h3>
                <p>Keni të drejtë të mos jeni subjekt i vendimeve të marra vetëm nga sisteme automatike me efekt ligjor mbi ju.</p>
            </div>

            <div class="td-card">
                <div class="td-card-icon"><i class="fa-solid fa-flag"></i></div>
                <h3>E Drejta e Ankesës</h3>
                <p>Nëse besoni se të drejtat tuaja janë shkelur, keni të drejtë të parashtroni ankesë pranë Autoritetit për Mbrojtjen e të Dhënave.</p>
            </div>

        </div><!-- /.td-rights-grid -->
    </section>


    <!-- ===== 2. COOKIES AKTUALE ===== -->
    <section class="td-section">
        <h2 class="td-section-title">
            <i class="fa-solid fa-cookie-bite"></i>
            Cookies Aktuale në Shfletuesin Tuaj
        </h2>

        <p class="td-desc">Këto janë cookies që CarePoint ka vendosur aktualisht. Mund t'i fshini individualisht ose të gjitha menjëherë.</p>

        <div class="td-table-wrap">
        <table class="td-table">
            <thead>
                <tr>
                    <th>Cookie</th>
                    <th>Përshkrimi</th>
                    <th>Vlera Aktuale</th>
                    <th>Veprim</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cookies_info as $cname => $cdesc): ?>
                <tr>
                    <td><code><?= htmlspecialchars($cname) ?></code></td>
                    <td><?= htmlspecialchars($cdesc) ?></td>
                    <td>
                        <?php if (isset($_COOKIE[$cname])): ?>
                            <span class="td-val"><?= htmlspecialchars($_COOKIE[$cname]) ?></span>
                        <?php else: ?>
                            <span class="td-empty">— e papërcaktuar —</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (isset($_COOKIE[$cname])): ?>
                        <form method="POST">
                            <input type="hidden" name="action"      value="delete_one">
                            <input type="hidden" name="cookie_name" value="<?= htmlspecialchars($cname) ?>">
                            <button type="submit" class="td-btn-del">
                                <i class="fa-solid fa-trash"></i> Fshi
                            </button>
                        </form>
                        <?php else: ?>
                            <span class="td-empty">—</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>

        <div class="td-actions">
            <form method="POST">
                <input type="hidden" name="action" value="delete_all">
                <button type="submit" class="btn-carepoint btn-danger">
                    <i class="fa-solid fa-trash-can"></i> Fshi Të Gjitha Cookies
                </button>
            </form>
            <a href="cookies_consent.php" class="btn-carepoint btn-secondary">
                <i class="fa-solid fa-rotate-left"></i> Ndrysho Pëlqimin
            </a>
        </div>
    </section>


    <!-- ===== 3. KONTAKTI ===== -->
    <section class="td-section td-contact">
        <h2 class="td-section-title">
            <i class="fa-solid fa-envelope"></i>
            Na Kontaktoni për Privatësinë
        </h2>
        <p class="td-desc">Për çdo kërkesë lidhur me të drejtat tuaja mbi të dhënat personale:</p>

        <div class="td-contact-grid">
            <div class="td-contact-item">
                <i class="fa-solid fa-envelope"></i>
                <div>
                    <strong>Email</strong>
                    <span>privacy@carepoint.com</span>
                </div>
            </div>
            <div class="td-contact-item">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <strong>Telefon</strong>
                    <span>+383 (0) 49 513 513</span>
                </div>
            </div>
            <div class="td-contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <strong>Adresa</strong>
                    <span>Lagjja e Spitaleve, Prishtinë</span>
                </div>
            </div>
            <div class="td-contact-item">
                <i class="fa-solid fa-clock"></i>
                <div>
                    <strong>Orari</strong>
                    <span>E hënë – E diel: 24/7</span>
                </div>
            </div>
        </div>

        <div class="td-actions">
            <a href="../Kontakt/kontakt.php" class="btn-carepoint btn-primary">
                <i class="fa-solid fa-paper-plane"></i> Dërgo Kërkesë
            </a>
            <a href="../Ballina/ballina.php" class="btn-carepoint btn-secondary">
                <i class="fa-solid fa-house"></i> Kthehu te Ballina
            </a>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>