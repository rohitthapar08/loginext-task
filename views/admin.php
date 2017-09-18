<?php
session_start();

if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
  header('Location: ../index.php');
}
require_once '../model/db.php';

$sql = "SELECT * FROM demo_enquiry";
$r = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="../plugins/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
  <section>
    <div class="container">
      <h3>Admin Panel</h3>
      <span class="" =""><a href="../controller/logout.php">Logout</a></span>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Country</th>
              <th>Subject</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($r->num_rows > 0): ?>
              <tr>
                <?php while ($row = $r->fetch_row()): ?>
                  <td><?php echo $row[0]; ?></td>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                  <td><?php echo $row[3]; ?></td>
                  <td><?php echo $row[4]; ?></td>
                  <td><?php echo $row[5]; ?></td>
                  <td><?php echo $row[6]; ?></td>
                </tr><tr>
                <?php endwhile; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</body>
</html>
