<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Marrja dhe pastrimi i të dhënave
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // -------------------------
    // VALIDIMI
    // -------------------------

    // Emri
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "Emri nuk është valid!";
        exit;
    }

    // Email
    if (!preg_match("/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,}$/", $email)) {
        echo "Email nuk është valid!";
        exit;
    }

    // Telefoni
    if (!preg_match("/^[0-9]{8}$/", $phone)) {
    echo "Numri duhet të ketë 8 shifra!";
    exit;
}

$phone = "+383" . $phone;

    // Mesazhi
    if (mb_strlen($message) < 5) {
        echo "Mesazhi është shumë i shkurtër!";
        exit;
    }

    // -------------------------
    // SUKSESI
    // -------------------------
    echo "Mesazhi u dërgua me sukses!";
}