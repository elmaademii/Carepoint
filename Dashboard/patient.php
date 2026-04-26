<?php
$page_css = "dashboard.css";
require_once __DIR__ . '/../includes/auth.php';

requireRole("patient");

$user = currentUser();
?>

<?php require __DIR__ . '/../includes/header.php'; ?>
<?php require __DIR__ . '/../includes/navbar.php'; ?>

<main>
    <section class="dashboard-hero">
        <div class="container dashboard-content">
            <div class="dashboard-welcome">
                <span class="dashboard-label">Paneli i pacientit</span>
                <h1>Mirë se erdhe në CarePoint</h1>

                <a href="../Login-Logout/logout.php" class="logout-btn">Shkyçu</a>
            </div>

            <div class="dashboard-card">
                <h2>Informata të përdoruesit</h2>

                <div class="info-row">
                    <span>Emri i përdoruesit</span>
                    <strong><?php echo htmlspecialchars($user["username"]); ?></strong>
                </div>

                <div class="info-row">
                    <span>Roli</span>
                    <strong><?php echo htmlspecialchars($user["role"]); ?></strong>
                </div>

                <div class="info-row">
                    <span>Statusi</span>
                    <strong>Kyçur me sukses</strong>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>
