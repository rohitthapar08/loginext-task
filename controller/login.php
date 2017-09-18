<?php
session_start();
// Mysqli Connection
require_once '../model/db.php';

// echo json_encode($_POST);
// exit;

// Escaping post variables
$usr = mysqli_real_escape_string($conn, $_POST['usr']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

// query
$sql = "SELECT * FROM login WHERE username='$usr' AND password='$pwd'";
$r = $conn->query($sql);
if ($r->num_rows > 0) {
  echo json_encode(['status'=>'success','msg'=>'User Logged in']);
} else {
  echo json_encode(['status'=>'error','msg'=>'Username And Password is Incorrect']);
}

$_SESSION['username'] = $usr;
$_SESSION['password'] = $pwd;
?>
