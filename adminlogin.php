<?php
session_start();
include '../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = $conn->query($query);

  if ($result->num_rows == 1) {
    $_SESSION['admin'] = $username;
    header("Location: dashboard.php");
  } else {
    echo "Login gagal!";
  }
}
?>

<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>
