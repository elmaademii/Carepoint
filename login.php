<?php
$page_css = "login.css";
require_once "includes/auth.php";

$error = "";
$selectedRole = $_GET["role"] ?? "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $selectedRole = $_POST["role"] ?? "";

    $user = findUser($username, $password);

    if ($user && $user["role"] === $selectedRole) {
        $_SESSION["user"] = [
            "username" => $user["username"],
            "role" => $user["role"],
            "name" => $user["name"]
        ];

        if ($user["role"] === "admin") {
            header("Location: dashboard.php");
        } else {
            header("Location: ballina.php");
        }

        exit;
    }

    $error = "Username ose password është gabim për rolin e zgjedhur.";
}
?>

<?php require "includes/header.php"; ?>
<?php require "includes/navbar.php"; ?>

<main>
    <?php if ($selectedRole !== "admin" && $selectedRole !== "patient"): ?>

        <section class="role-section">
            <div class="container">
                <div class="role-header">
                    <span class="login-label">CarePoint Access</span>
                    <h1>Zgjidh mënyrën e kyçjes</h1>
                    <p>
                        Zgjidh rolin përkatës për të vazhduar në hapësirën tënde në sistemin CarePoint.
                    </p>
                </div>

                <div class="role-cards">
                    <a href="login.php?role=patient" class="role-card">
                        <i class="fa-solid fa-user"></i>
                        <h2>Login as Patient</h2>
                        <p>Kyçu si pacient për të vazhduar në hapësirën e përdoruesit.</p>
                    </a>

                    <a href="login.php?role=admin" class="role-card">
                        <i class="fa-solid fa-user-shield"></i>
                        <h2>Login as Admin</h2>
                        <p>Kyçu si administrator për të menaxhuar pjesën e mbrojtur të sistemit.</p>
                    </a>
                </div>
            </div>
        </section>

    <?php else: ?>

        <section class="login-hero">
            <div class="container login-hero-content">
                <div class="login-copy">
                    <span class="login-label">CarePoint Access</span>

                    <?php if ($selectedRole === "admin"): ?>
                        <h1>Kyçu si administrator</h1>
                        <p>
                            Përdor llogarinë e administratorit për të hyrë në dashboard dhe për të menaxhuar sistemin.
                        </p>
                    <?php else: ?>
                        <h1>Kyçu si pacient</h1>
                        <p>
                            Përdor llogarinë e pacientit për të vazhduar në hapësirën tënde në CarePoint.
                        </p>
                    <?php endif; ?>
                </div>

                <div class="login-card">
                    <h2>Login</h2>
                    <p class="login-card-text">Shkruaj të dhënat për të vazhduar.</p>

                    <?php if ($error): ?>
                        <div class="login-error"><?php echo htmlspecialchars($error); ?></div>
                    <?php endif; ?>

                    <form method="POST" action="login.php" class="login-form">
                        <input type="hidden" name="role" value="<?php echo htmlspecialchars($selectedRole); ?>">

                        <div class="login-field">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Shëno emrin e përdoruesit" required>
                        </div>

                        <div class="login-field">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Shëno fjalëkalimin" required>
                        </div>

                        <button type="submit">Kyçu</button>
                    </form>

                    <div class="login-info">
                        <h3>Qasja në sistem</h3>
                        <p>Përdoruesi lejohet të vazhdojë vetëm nëse të dhënat përputhen me rolin e zgjedhur.</p>
                    </div>

                    <a href="login.php" class="back-link">Ndrysho rolin</a>
                </div>
            </div>
        </section>

    <?php endif; ?>
</main>

<?php require "includes/footer.php"; ?>
