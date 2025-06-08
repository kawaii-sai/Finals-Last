<?php
session_start();
include 'db_connection.php'; // Ensure database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if required fields exist in $_POST
    if (
        !isset($_POST['renter_name'], $_POST['renter_email'], $_POST['renter_phone'], 
               $_POST['car_name'], $_POST['total_cost'], $_POST['payment_method'])
    ) {
        die("Error: Missing required form fields.");
    }

    // Get rental details from form
    $renter_name = $_POST['renter_name'];
    $renter_email = $_POST['renter_email'];
    $renter_phone = $_POST['renter_phone'];
    $car_name = $_POST['car_name'];
    $total_cost = $_POST['total_cost'];
    $payment_method = $_POST['payment_method'];
    $payment_status = "Pending"; // Default status

    // Handle different payment methods
    if ($payment_method == "credit_card") {
        if (!isset($_POST['cardholder_name'], $_POST['card_number'], $_POST['expiry_date'], $_POST['cvv'])) {
            die("Error: Please fill in all credit card details.");
        }

        $cardholder_name = $_POST['cardholder_name'];
        $card_number = $_POST['card_number'];
        $expiry_date = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];

        // Mask card number for security
        $masked_card = str_repeat("*", 12) . substr($card_number, -4);
    } elseif ($payment_method == "paypal") {
        if (!isset($_POST['paypal_email'])) {
            die("Error: Please enter your PayPal email.");
        }

        $paypal_email = $_POST['paypal_email'];
    } elseif ($payment_method == "cod") {
        $masked_card = "Cash on Delivery";
    }

    // Insert payment into database
    $stmt = $conn->prepare("INSERT INTO payments (renter_name, renter_email, renter_phone, car_name, payment_method, total_cost, payment_status) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $renter_name, $renter_email, $renter_phone, $car_name, $payment_method, $total_cost, $payment_status);

    if ($stmt->execute()) {
        $_SESSION['payment_success'] = "Payment successful! Your transaction has been recorded.";
        header("Location: payment_success.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: index.php");
    exit();
}
?>