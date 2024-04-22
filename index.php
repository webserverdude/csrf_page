<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: login.php");
    exit;
}

// Generate CSRF token and store it in session
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          User Details
        </div>
        <div class="card-body">
          <p>Username: <?php echo $_SESSION['username'] ?? 'Not set'; ?></p>
          <p>Password: <?php echo $_SESSION['password'] ?? 'Not set'; ?></p>
          <p>CSRF Token: <?php echo $_SESSION['csrf_token'] ?? 'Not set'; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
