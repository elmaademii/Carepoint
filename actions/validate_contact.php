<?php

// Kontrollon nëse forma është dërguar me POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Marrja e të dhënave nga forma
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    // -------------------------
    // VALIDIMI ME REGEX
    // -------------------------

    // Validimi i emrit (vetëm shkronja dhe hapësira)
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "Emri nuk është valid!";
        exit;
    }

    // Validimi i email-it
    if (!preg_match("/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,}$/", $email)) {
        echo "Email nuk është valid!";
        exit;
    }

    // Validimi i telefonit (format +383XXXXXXXX)
    if (!preg_match("/^\+383[0-9]{8}$/", $phone)) {
        echo "Numri duhet të jetë në format +383XXXXXXXX";
        exit;
    }

    // Validimi i mesazhit (min 5 karaktere)
    if (strlen($message) < 5) {
        echo "Mesazhi është shumë i shkurtër!";
        exit;
    }

    // Nëse gjithçka është OK
    echo "Forma u dërgua me sukses!";
}