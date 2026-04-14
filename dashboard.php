<?php
$page_css = "dashboard.css";
require_once "includes/auth.php";

requireRole("admin");

$user = currentUser();
?>

<?php require "includes/header.php"; ?>
<?php require "includes/navbar.php"; ?>

<main>
    <section class="dashboard-hero">
        <div class="container dashboard-content">
            <div class="dashboard-welcome">
                <span class="dashboard-label">Paneli i administratorit</span>
                <h1>Mirë se erdhe në CarePoint, Admin</h1>

                <a href="logout.php" class="logout-btn">Shkyçu</a>
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

<?php require "includes/footer.php"; ?>
