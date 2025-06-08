<?php
session_start();
if (!isset($_SESSION['payment_success'])) {
    header("Location: index.php"); // Redirect if accessed directly
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="styles9.css">
</head>
<body>
    <div class="success-container">
        <h2>🎉 Payment Successful!</h2>
        <p><?php echo $_SESSION['payment_success']; ?></p>
        <a href="dashboard.php" class="btn">Go to Dashboard</a>
    </div>
</body>
</html>
<?php unset($_SESSION['payment_success']); ?>