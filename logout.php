<?php
session_start(); // Memulai sesi

// Menghapus semua data sesi
session_unset();
// Menghancurkan sesi
session_destroy();

header("Location:login.php");
exit;
?>