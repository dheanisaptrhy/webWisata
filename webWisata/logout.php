<?php
session_start();
session_destroy(); // Menghapus Sessions
    header("Location: home.php"); // mengarahkan ke login.php
?>
