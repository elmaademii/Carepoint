<?php
// ============================================================
// Preferencat e Përdoruesit (ruhen me cookies)
// ============================================================

// --- Ruaj preferencat ---
if (isset($_POST['save_preferences'])) {
    $exp = time() + (365 * 24 * 60 * 60);

    $dept      = $_POST['preferred_department'] ?? '';
    $reminder  = $_POST['appointment_reminder'] ?? '24h';
    $pref_time = $_POST['preferred_time']       ?? '';
    $news      = isset($_POST['receive_news'])  ? '1' : '0';
    $name      = trim($_POST['display_name']    ?? '');

    setcookie('preferred_department', $dept,     $exp, '/');
    setcookie('appointment_reminder', $reminder, $exp, '/');
    setcookie('preferred_time',       $pref_time, $exp, '/');
    setcookie('receive_news',         $news,     $exp, '/');
    if ($name !== '') {
        setcookie('user_name', htmlspecialchars($name), $exp, '/');
    }
    header('Location: preferences.php?saved=1');
    exit();
}

// --- Lexo vlerat aktuale ---
$pref = [
    'preferred_department' => $_COOKIE['preferred_department'] ?? '',
    'appointment_reminder' => $_COOKIE['appointment_reminder'] ?? '24h',
    'preferred_time'       => $_COOKIE['preferred_time']       ?? '',
    'receive_news'         => $_COOKIE['receive_news']         ?? '0',
    'user_name'            => $_COOKIE['user_name']            ?? '',
];

// 8 specializimet nga services.php
$depts = [
    'Kardiologji'        => 'fa-heart-pulse',
    'Neurologji'         => 'fa-brain',
    'Pediatri'           => 'fa-child',
    'Gjinekologji'       => 'fa-venus',
    'Ortopedi'           => 'fa-bone',
    'Laborator analizash'=> 'fa-flask',
    'Radiologji'         => 'fa-x-ray',
    'Mjekësi familjare'  => 'fa-house-medical',
];

$page_css = '../Cookies/preferences.css';
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/navbar.php';
?>

<!-- HERO -->
<section class="hero pref-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="../Ballina/ballina.php">Ballina</a>
            <span>›</span> Preferencat
        </p>
        <h1><i class="fa-solid fa-sliders"></i> Preferencat Tuaja</h1>
        <p>Personalizoni përvojën tuaj në CarePoint — preferencat ruhen automatikisht në shfletuesin tuaj.</p>
    </div>
</section>

<main class="container pref-main">

    <!-- TOAST -->
    <?php if (isset($_GET['saved'])): ?>
    <div class="pref-toast" id="toast">
        <i class="fa-solid fa-circle-check"></i> Preferencat u ruajtën me sukses!
    </div>
    <?php endif; ?>

    <form method="POST" class="pref-form">

        <!-- ============ RRESHTI 1: Emri + Departamenti ============ -->
        <div class="pref-row-2">

            <!-- Emri -->
            <div class="pref-card">
                <div class="pref-card-header">
                    <span class="pref-icon"><i class="fa-solid fa-user"></i></span>
                    <div>
                        <h3>Emri Juaj</h3>
                        <p>Si dëshironi të adresoheni në faqe</p>
                    </div>
                </div>
                <input type="text" name="display_name" class="pref-input"
                       placeholder="Shkruani emrin tuaj..."
                       value="<?= htmlspecialchars($pref['user_name']) ?>"
                       maxlength="50">

            </div>

            <!-- Perkujtesa + Njoftime -->
            <div class="pref-card">
                <div class="pref-card-header">
                    <span class="pref-icon"><i class="fa-solid fa-bell"></i></span>
                    <div>
                        <h3>Përkujtesa & Njoftime</h3>
                        <p>Kontrollo si dëshironi të njoftoheni</p>
                    </div>
                </div>

                <label class="pref-field-label">Përkujtesa për termin</label>
                <select name="appointment_reminder" class="pref-select">
                    <?php
                    $opts = ['1h'=>'1 orë para','3h'=>'3 orë para','24h'=>'1 ditë para','48h'=>'2 ditë para','off'=>'Pa kujtesë'];
                    foreach ($opts as $v => $l):
                    ?>
                    <option value="<?= $v ?>" <?= $pref['appointment_reminder'] === $v ? 'selected' : '' ?>><?= $l ?></option>
                    <?php endforeach; ?>
                </select>

                <label class="pref-switch-row">
                    <div class="pref-switch">
                        <input type="checkbox" name="receive_news" <?= $pref['receive_news'] === '1' ? 'checked' : '' ?>>
                        <span class="pref-switch-track"></span>
                    </div>
                    <div>
                        <strong>Merr njoftime</strong>
                        <span>Shërbime të reja, orare dhe lajme</span>
                    </div>
                </label>
            </div>

        </div>

        <!-- ============ DEPARTAMENTI ============ -->
        <div class="pref-card">
            <div class="pref-card-header">
                <span class="pref-icon"><i class="fa-solid fa-hospital"></i></span>
                <div>
                    <h3>Departamenti i Preferuar</h3>
                    <p>Zgjidhni specializimin tuaj — do të shfaqet mesazhi i personalizuar në ballinë herën tjetër që vizitoni faqen</p>
                </div>
            </div>

            <div class="dept-grid">
                <!-- Opsioni: Pa preferencë -->
                <label class="dept-chip <?= $pref['preferred_department'] === '' ? 'active' : '' ?>">
                    <input type="radio" name="preferred_department" value=""
                           <?= $pref['preferred_department'] === '' ? 'checked' : '' ?>>
                    <i class="fa-solid fa-circle-xmark"></i>
                    <span>Pa preferencë</span>
                </label>

                <?php foreach ($depts as $name => $icon):
                    $active = $pref['preferred_department'] === $name ? 'active' : '';
                ?>
                <label class="dept-chip <?= $active ?>">
                    <input type="radio" name="preferred_department"
                           value="<?= htmlspecialchars($name) ?>"
                           <?= $pref['preferred_department'] === $name ? 'checked' : '' ?>>
                    <i class="fa-solid <?= $icon ?>"></i>
                    <span><?= htmlspecialchars($name) ?></span>
                </label>
                <?php endforeach; ?>
            </div>

            <?php if ($pref['preferred_department']): ?>
            <div class="dept-preview">
                <i class="fa-solid fa-eye"></i>
                Në ballinë do të shfaqet: <strong>"Mirë se u ktheve! Departamenti juaj i preferuar: <?= htmlspecialchars($pref['preferred_department']) ?>"</strong>
            </div>
            <?php endif; ?>
        </div>

        <!-- ============ ORARI I PREFERUAR ============ -->
        <div class="pref-card">
            <div class="pref-card-header">
                <span class="pref-icon"><i class="fa-solid fa-clock"></i></span>
                <div>
                    <h3>Orari i Preferuar për Termin</h3>
                    <p>Kur dëshironi zakonisht të caktoni termin mjekësor</p>
                </div>
            </div>
            <div class="time-grid">
                <?php
                $times = [
                    'mengjes-heret' => ['fa-sun',            '07:00 – 09:00', 'Mëngjes herët'],
                    'mengjes'       => ['fa-cloud-sun',      '09:00 – 12:00', 'Paradite'],
                    'pasdite'       => ['fa-cloud',          '12:00 – 15:00', 'Pasdite'],
                    'pasdite-vone'  => ['fa-cloud-moon',     '15:00 – 18:00', 'Pasdite vonë'],
                    'mbremje'       => ['fa-moon',           '18:00 – 20:00', 'Mbrëmje'],
                    'pa-preference' => ['fa-calendar-xmark', '',              'Pa preferencë'],
                ];
                foreach ($times as $val => [$icon, $hours, $label]):
                    $active = $pref['preferred_time'] === $val ? 'active' : '';
                ?>
                <label class="time-chip <?= $active ?>">
                    <input type="radio" name="preferred_time" value="<?= $val ?>"
                           <?= $pref['preferred_time'] === $val ? 'checked' : '' ?>>
                    <i class="fa-solid <?= $icon ?>"></i>
                    <strong><?= $label ?></strong>
                    <?php if ($hours): ?><span><?= $hours ?></span><?php endif; ?>
                </label>
                <?php endforeach; ?>
            </div>
            <span class="pref-hint">
                <i class="fa-solid fa-circle-info"></i>
                Ky informacion do të përdoret kur rezervoni termin nga faqja <a href="../Kontakt/kontakt.php" style="color:var(--primary)">Kontakt</a>
            </span>
        </div>

        <!-- ============ BUTONAT ============ -->
        <div class="pref-actions">
            <button type="submit" name="save_preferences" class="btn-save">
                <i class="fa-solid fa-floppy-disk"></i> Ruaj Preferencat
            </button>
            <a href="../Ballina/ballina.php" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> Kthehu te Ballina
            </a>
            <button type="button" class="btn-reset" onclick="resetPrefs()">
                <i class="fa-solid fa-rotate-left"></i> Pastro Të Gjitha
            </button>
        </div>

    </form>

    <!-- ============ PANELI: Cookies Aktuale ============ -->
    <section class="pref-summary">
        <h2><i class="fa-solid fa-cookie-bite"></i> Preferencat e Ruajtura Aktualisht</h2>
        <div class="summary-grid">
            <?php
            $items = [
                'user_name'            => ['fa-user',               'Emri'],
                'preferred_department' => ['fa-hospital',           'Departamenti'],
                'preferred_time'       => ['fa-clock',              'Orari i Terminit'],
                'appointment_reminder' => ['fa-bell',               'Kujtesa'],
                'receive_news'         => ['fa-newspaper',          'Njoftime'],
                'cookie_consent'       => ['fa-shield-halved',      'Pëlqimi Cookies'],
                'consent_date'         => ['fa-calendar-check',     'Data Pëlqimit'],
            ];
            foreach ($items as $key => [$icon, $label]):
                $val = $_COOKIE[$key] ?? null;
            ?>
            <div class="summary-item <?= $val ? '' : 'empty' ?>">
                <i class="fa-solid <?= $icon ?>"></i>
                <div>
                    <strong><?= $label ?></strong>
                    <span><?= $val ? htmlspecialchars($val) : '—' ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="../Cookies/te_drejtat_tuaja.php" class="summary-link">
            <i class="fa-solid fa-scale-balanced"></i> Shiko Të Drejtat Tuaja & Menaxho Cookies
        </a>
    </section>

</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>

<script>
// Dept chips
document.querySelectorAll('.dept-chip input').forEach(inp => {
    inp.addEventListener('change', () => {
        document.querySelectorAll('.dept-chip').forEach(c => c.classList.remove('active'));
        inp.closest('.dept-chip').classList.add('active');

        // Update preview
        const preview = document.querySelector('.dept-preview');
        const val = inp.value;
        if (val && preview) {
            preview.querySelector('strong').textContent =
                '"Mirë se u ktheve! Departamenti juaj i preferuar: ' + val + '"';
            preview.style.display = 'flex';
        } else if (preview) {
            preview.style.display = 'none';
        }
    });
});

// Time chips
document.querySelectorAll('.time-chip input').forEach(inp => {
    inp.addEventListener('change', () => {
        document.querySelectorAll('.time-chip').forEach(c => c.classList.remove('active'));
        inp.closest('.time-chip').classList.add('active');
    });
});

// Toast auto-fshih
const toast = document.getElementById('toast');
if (toast) {
    setTimeout(() => { toast.style.opacity = '0'; toast.style.transform = 'translateY(-16px)'; }, 3000);
    setTimeout(() => toast.remove(), 3400);
}

// Reset cookies
function resetPrefs() {
    if (!confirm('A jeni i sigurt? Të gjitha preferencat do të fshihen.')) return;
    ['preferred_department','appointment_reminder','preferred_time','receive_news','user_name']
        .forEach(n => document.cookie = n + '=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;');
    location.reload();
}
</script>