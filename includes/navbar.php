<?php
require_once __DIR__ . '/auth.php';
$currentPage = basename($_SERVER["PHP_SELF"]);
?>

<div class="top-bar">
    <div class="container top-bar-content">
        <div class="top-left">
            <span><i class="fa-solid fa-phone"></i> +383 (0) 49 513 513</span>
            <span><i class="fa-solid fa-envelope"></i> info@carepoint.com</span>
        </div>
        <div class="top-right">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
</div>

<header class="main-header">
    <div class="container header-content">
        <div class="logo">CarePoint</div>

    <nav class="main-nav">
    <a href="ballina.php" class="<?php echo $currentPage === 'ballina.php' ? 'active' : ''; ?>">Ballina</a>
    <a href="rreth-carepoint.php" class="<?php echo $currentPage === 'rreth-carepoint.php' ? 'active' : ''; ?>">Rreth CarePoint</a>
    <a href="services.php" class="<?php echo $currentPage === 'services.php' ? 'active' : ''; ?>">Shërbimet</a>
    <a href="stafi.php" class="<?php echo $currentPage === 'stafi.php' ? 'active' : ''; ?>">Stafi</a>
    <a href="kontakt.php" class="<?php echo $currentPage === 'kontakt.php' ? 'active' : ''; ?>">Kontakt</a>

    <?php if (isLoggedIn()): ?>
        <a href="logout.php">Shkyçu</a>
    <?php else: ?>
        <a href="login.php" class="<?php echo $currentPage === 'login.php' ? 'active' : ''; ?>">Kyçu</a>
    <?php endif; ?>
    </nav>
  </div>
</header>
