<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (!preg_match("/^[a-zA-ZëËçÇ\s]{2,50}$/u", $name)) {
        header("Location: ../Kontakt/kontakt.php?error=Emri nuk eshte valid");
        exit;
    }

    if (!preg_match("/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,}$/", $email)) {
        header("Location: ../Kontakt/kontakt.php?error=Email nuk eshte valid");
        exit;
    }

    if (!preg_match("/^[0-9]{8}$/", $phone)) {
        header("Location: ../Kontakt/kontakt.php?error=Numri duhet te kete 8 shifra pas prefiksit +383");
        exit;
    }

    if (strlen($message) < 5) {
        header("Location: ../Kontakt/kontakt.php?error=Mesazhi eshte shume i shkurter");
        exit;
    }

    header("Location: ../Kontakt/kontakt.php?success=1");
    exit;
}

header("Location: ../Kontakt/kontakt.php");
exit;
