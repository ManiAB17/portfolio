<?php
session_start();
include "../db.php";

if(isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "❌ Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex align-items-center justify-content-center" style="min-height:100vh;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5">

      <div class="glass-card text-center">
        <h3 class="fw-bold neon-text">Admin Login</h3>
        <p class="text-light opacity-75">Login to view contact messages</p>

        <?php if(isset($error)) { ?>
          <div class="alert alert-danger mt-3"><?php echo $error; ?></div>
        <?php } ?>

        <form method="POST" class="mt-4">
          <input type="text" name="username" class="form-control neon-input mb-3" placeholder="Username" required>
          <input type="password" name="password" class="form-control neon-input mb-3" placeholder="Password" required>

          <button type="submit" name="login" class="neon-btn w-100">
            Login
          </button>
        </form>

      </div>

    </div>
  </div>
</div>

</body>
</html>
