<?php
session_start();
// Valores estáticos para exemplo
$validUsername = "admin";
$validPassword = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["loggedin"] = true;
        echo "success";
    } else {
        echo "error";
    }
}
?>