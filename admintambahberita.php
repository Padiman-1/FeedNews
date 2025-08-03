<?php
session_start();
include '../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];

  $sql = "INSERT INTO berita (judul, isi) VALUES ('$judul', '$isi')";
  $conn->query($sql);
  echo "Berita berhasil ditambahkan!";
}
?>

<form method="POST">
  <input type="text" name="judul" placeholder="Judul Berita" required><br>
  <textarea name="isi" placeholder="Isi Berita" required></textarea><br>
  <button type="submit">Simpan</button>
</form>
