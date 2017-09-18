<?php
// Mysqli Connection
require_once '../model/db.php';

// Escaping post variables
$fnm = mysqli_real_escape_string($conn, $_POST['fnm']);
$lnm = mysqli_real_escape_string($conn, $_POST['lnm']);
$ph = mysqli_real_escape_string($conn, $_POST['ph']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$ml = mysqli_real_escape_string($conn, $_POST['ml']);
$demo_subject = mysqli_real_escape_string($conn, $_POST['demo_subject']);
$demo_msg = mysqli_real_escape_string($conn, $_POST['demo_msg']);


$sql = "INSERT INTO demo_enquiry (name, email, ph_number, last_name, country, subject, message) VALUES ('$fnm', '$ml', '$ph', '$lnm', '$country', '$demo_subject', '$demo_msg')";

if ($conn->query($sql)) {
  echo json_encode(['status'=>'success','msg'=>'Demo Done']);
} else {
  echo json_encode(['status'=>'error','msg'=>'Error!!--'.$conn->error]);
}
?>
