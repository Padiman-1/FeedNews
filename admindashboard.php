<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
?>

<h2>Selamat datang, <?= $_SESSION['admin'] ?>!</h2>
<a href="tambah_berita.php">Tambah Berita</a> |
<a href="logout.php">Logout</a>
