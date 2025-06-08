<?php
session_start();
include 'db_connection.php';

$conn->select_db("car_rental_db");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['car']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['days'])) {
        die("Error: Missing required fields.");
    }

    $car = trim($_POST['car']);
    $price = isset($_POST['price']) ? floatval($_POST['price']) : 0;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $days = isset($_POST['days']) ? intval($_POST['days']) : 1;
    $total_cost = $price * $days;

    $sql = "INSERT INTO rentals (car, price, name, email, phone, days, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sdsssid", $car, $price, $name, $email, $phone, $days, $total_cost);

    if ($stmt->execute()) {
        // Store rental details in session for payment page
        $_SESSION['rental'] = [
            'car' => $car,
            'price' => $price,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'days' => $days,
            'total_cost' => $total_cost
        ];

        // Redirect to payment.php
        header("Location: payment.php");
        exit();
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Car - <?php echo htmlspecialchars($car); ?></title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
    <style>
        /* Global Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Navbar */
        .navbar {
            background: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        .navbar ul {
            list-style: none;
            padding: 0;
        }
        .navbar ul li {
            display: inline;
            margin: 0 15px;
        }
        .navbar ul li a {
            color: white;
            text-decoration: none;
        }

        /* Rent Section */
        .rent-section {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .car-details {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .car-image {
            width: 200px;
            height: auto;
            border-radius: 10px;
        }
        .details p {
            font-size: 18px;
            margin: 5px 0;
        }
        .rental-form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background: #0056b3;
        }

        /* Footer */
        footer {
            background: black;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="container">
        <section class="rent-section">
            <h1>Rent <strong><?php echo htmlspecialchars($car); ?></strong></h1>
            <div class="car-details">
                <img src="assets/<?php echo isset($image) ? htmlspecialchars($image) : 'default.jpg'; ?>" alt="<?php echo htmlspecialchars($car); ?>" class="car-image">
                <div class="details">
                    <p><strong>Price:</strong> $<?php echo number_format($price, 2); ?> per hour</p>
                    <p><strong>Availability:</strong> <?php echo isset($availability) ? $availability : 'Unknown'; ?> cars left</p>
                </div>
            </div>

            <!-- Rental Form -->
            <form action="process_rental.php" method="POST" class="rental-form">
                <input type="hidden" name="car" value="<?php echo htmlspecialchars($car); ?>">
                <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="days">Number of Days to Rent</label>
                    <input type="number" id="days" name="days" min="1" required>
                </div>

                <button type="submit" class="btn">Confirm Rental</button>
            </form>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Group 10. All rights reserved.</p>
    </footer>
</body>
</html>