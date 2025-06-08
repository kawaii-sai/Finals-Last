<?php
session_start();

if (!isset($_SESSION['rental'])) {
    header("Location: index.php"); // Redirect if no rental info is found
    exit();
}

$rental = $_SESSION['rental'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="styles9.css"> <!-- Link to your CSS file -->
    <script>
        function togglePaymentFields() {
            var method = document.getElementById("payment-method").value;
            
            document.getElementById("credit-card-fields").style.display = method === "credit_card" ? "block" : "none";
            document.getElementById("paypal-fields").style.display = method === "paypal" ? "block" : "none";
            document.getElementById("cod-fields").style.display = method === "cod" ? "block" : "none";
        }
    </script>
</head>
<body>
    <div class="payment-container">
        <h2>Payment</h2>
        <p><strong>Car:</strong> <?php echo htmlspecialchars($rental['car']); ?></p>
        <p><strong>Total Cost:</strong> $<?php echo number_format($rental['total_cost'], 2); ?></p>

        <form class="payment-form" action="process_payment.php" method="POST">
    <!-- Renter Information (Ensure these fields exist) -->
    <input type="hidden" name="renter_name" value="<?php echo htmlspecialchars($rental['renter_name'] ?? ''); ?>">
<input type="hidden" name="renter_email" value="<?php echo htmlspecialchars($rental['renter_email'] ?? ''); ?>">
<input type="hidden" name="renter_phone" value="<?php echo htmlspecialchars($rental['renter_phone'] ?? ''); ?>">
<input type="hidden" name="car_name" value="<?php echo htmlspecialchars($rental['car'] ?? ''); ?>">
<input type="hidden" name="total_cost" value="<?php echo isset($rental['total_cost']) ? floatval($rental['total_cost']) : 0; ?>">

    <input type="hidden" name="car_name" value="<?php echo htmlspecialchars($rental['car']); ?>">
    <input type="hidden" name="total_cost" value="<?php echo number_format($rental['total_cost'], 2); ?>">

    <div class="form-group">
        <label for="payment-method">Select Payment Method</label>
        <select name="payment_method" id="payment-method" onchange="togglePaymentFields()" required>
            <option value="credit_card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="cod">Cash on Delivery</option>
        </select>
    </div>

    <!-- Credit Card Fields -->
    <div id="credit-card-fields" style="display: block;">
        <div class="form-group">
            <label for="cardholder-name">Cardholder Name</label>
            <input type="text" id="cardholder-name" name="cardholder_name" required>
        </div>

        <div class="form-group">
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card_number" required>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="expiry-date">Expiry Date</label>
                <input type="text" id="expiry-date" name="expiry_date" required>
            </div>

            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
        </div>
    </div>

    <!-- PayPal Fields -->
    <div id="paypal-fields" style="display: none;">
        <div class="form-group">
            <label for="paypal-email">PayPal Email</label>
            <input type="email" id="paypal-email" name="paypal_email">
        </div>
    </div>

    <!-- Cash on Delivery -->
    <div id="cod-fields" style="display: none;">
        <p><strong>Note:</strong> You will pay the total amount in cash upon car pickup.</p>
    </div>

    <button type="submit" class="checkout-btn">Proceed to Payment</button>
</form>

    </div>
</body>
</html>
