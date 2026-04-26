<?php
require_once __DIR__ . '/auth.php';
$currentPage = basename($_SERVER["PHP_SELF"]);
$user = currentUser();
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
            <a href="../Ballina/ballina.php"
               class="<?php echo $currentPage === 'ballina.php' ? 'active' : ''; ?>">
               Ballina
            </a>

            <a href="../Rreth-CarePoint/rreth-carepoint.php"
               class="<?php echo $currentPage === 'rreth-carepoint.php' ? 'active' : ''; ?>">
               Rreth CarePoint
            </a>

            <a href="../Sherbimet/services.php"
               class="<?php echo $currentPage === 'services.php' ? 'active' : ''; ?>">
               Shërbimet
            </a>

            <a href="../Stafi/stafi.php"
               class="<?php echo $currentPage === 'stafi.php' ? 'active' : ''; ?>">
               Stafi
            </a>

            <a href="../Kontakt/kontakt.php"
               class="<?php echo $currentPage === 'kontakt.php' ? 'active' : ''; ?>">
               Kontakt
            </a>

            <?php if (!isLoggedIn()): ?>
                <a href="/Carepoint/Login-Logout/login.php"
                   class="<?php echo $currentPage === 'login.php' ? 'active' : ''; ?>">
                   Kyçu
                </a>
            <?php elseif ($user && $user['role'] === 'admin'): ?>
                <a href="../Dashboard/dashboard.php"
                   class="<?php echo $currentPage === 'dashboard.php' ? 'active' : ''; ?>">
                   Llogaria
                </a>
            <?php elseif ($user && $user['role'] === 'patient'): ?>
                <a href="../Dashboard/patient.php"
                   class="<?php echo $currentPage === 'patient.php' ? 'active' : ''; ?>">
                   Llogaria
                </a>
            <?php else: ?>
                <a href="../Login-Logout/logout.php">Shkyçu</a>
            <?php endif; ?>
        </nav>
    </div>
</header>

