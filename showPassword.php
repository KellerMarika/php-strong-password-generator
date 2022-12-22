<?php
session_start();

$passwordLength = $_SESSION["password-lenght"] ?? null;

if (!$passwordLength) {
  header("Location: index.php");
}
?>

