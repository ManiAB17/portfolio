<?php
session_start();
include "../db.php";

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM contact_messages ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body style="padding-top:40px;">

<div class="container">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold neon-text">Admin Dashboard</h2>
    <a href="logout.php" class="btn btn-outline-light rounded-pill px-4">
      <i class="bi bi-box-arrow-right"></i> Logout
    </a>
  </div>

  <div class="glass-card">
    <h4 class="fw-bold text-light">Contact Messages</h4>
    <p class="text-light opacity-75 small">All messages received from contact page</p>

    <div class="table-responsive mt-4">
      <table class="table table-dark table-hover align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php 
          $i=1;
          while($row = mysqli_fetch_assoc($result)) { 
          ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td style="max-width:250px;">
              <?php echo substr($row['message'], 0, 80); ?>...
            </td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="delete_message.php?id=<?php echo $row['id']; ?>" 
                 class="btn btn-danger btn-sm rounded-pill"
                 onclick="return confirm('Are you sure you want to delete this message?');">
                <i class="bi bi-trash"></i> Delete
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>

  </div>

</div>

</body>
</html>
