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
            <a href="../Ballina/ballina.php" class="active">Ballina</a>
            <a href="../Rreth-CarePoint/rreth-carepoint.php">Rreth CarePoint</a>
            <a href="../Sherbimet/services.php">Shërbimet</a>
            <a href="../Stafi/stafi.php">Stafi</a>
            <a href="../Kontakt/kontakt.php">Kontakt</a>

            <?php if (isLoggedIn()): ?>
                <a href="../Login-Logout/logout.php">Shkyçu</a>
            <?php else: ?>
                <a href="../Login-Logout/login.php">Kyçu</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
