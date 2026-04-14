<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$users = [
    [
        "username" => "admin.carepoint",
        "password" => "AdminCare2026",
        "role" => "admin",
        "name" => "CarePoint Admin"
    ],
    [
        "username" => "patient.demo",
        "password" => "PatientCare2026",
        "role" => "patient",
        "name" => "Demo Patient"
    ]
];

function findUser($username, $password)
{
    global $users;

    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            return $user;
        }
    }

    return null;
}

function isLoggedIn()
{
    return isset($_SESSION["user"]);
}

function currentUser()
{
    if (isLoggedIn()) {
        return $_SESSION["user"];
    }

    return null;
}

function requireLogin()
{
    if (!isLoggedIn()) {
        header("Location: ../Login-Logout/login.php");
        exit;
    }
}

function requireRole($role)
{
    requireLogin();

    if ($_SESSION["user"]["role"] !== $role) {
        header("Location: ../Ballina/ballina.php");
        exit;
    }
}
