<<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        header("Location: ../kontakt.php?error=Emri nuk është valid!");
        exit;
    }

    if (!preg_match("/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,}$/", $email)) {
        header("Location: ../kontakt.php?error=Email nuk është valid!");
        exit;
    }

    if (!preg_match("/^[0-9]{8}$/", $phone)) {
        header("Location: ../kontakt.php?error=Numri duhet të ketë 8 shifra pas prefiksit +383");
        exit;
    }

    if (mb_strlen($message) < 5) {
        header("Location: ../kontakt.php?error=Mesazhi është shumë i shkurtër!");
        exit;
    }

    header("Location: ../kontakt.php?success=1");
    exit;
}