<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Database connection
$host = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Database password
$database = "kotsi_db"; // Database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve car details from the URL
$car = isset($_GET['car']) ? htmlspecialchars($_GET['car']) : 'Unknown Car';
$price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : 'N/A';
$image = isset($_GET['image']) ? htmlspecialchars($_GET['image']) : 'default.png';
$availability = isset($_GET['availability']) ? htmlspecialchars($_GET['availability']) : 'N/A';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Car - <?php echo $car; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #000; /* Black background */
            padding: 15px 0;
            color: white;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: 600;
            color: white; /* White text */
        }

        .navbar .logo span {
            color:rgb(0, 89, 255);
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .navbar ul li a {
            color: white; /* White text */
            text-decoration: none;
            font-weight: 500;
        }

        .navbar ul li a:hover {
            color:rgb(0, 89, 255); /* Yellow accent on hover */
        }

        .rent-section {
            padding: 40px 20px;
            text-align: center;
        }

        .rent-section h1 {
            font-size: 32px;
            color: #063da5;
            margin-bottom: 20px;
        }

        .car-details {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto 30px;
        }

        .car-image {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .details p {
            font-size: 18px;
            margin: 10px 0;
        }

        .rental-form {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn {
            background-color: #063da5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background-color: #052b7a;
        }

        footer {
            background-color: #000; /* Black background */
            color: white; /* White text */
            text-align: center;
            padding: 10px 0;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="logo">RideMy<span> Kotsi</span></div>
                <ul>
                    <li><a href="index.php">  Home | </a></li>
                    <li><a href="dashboard.php">Dashboard | </a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="rent-section">
        <div class="container">
            <h1>Rent <?php echo $car; ?></h1>
            <div class="car-details">
                <img src="assets/<?php echo $image; ?>" alt="<?php echo $car; ?>" class="car-image">
                <div class="details">
                    <p><strong>Price:</strong> $<?php echo $price; ?> per hour</p>
                    <p><strong>Availability:</strong> <?php echo $availability; ?> cars left</p>
                </div>
            </div>

            <!-- Rental Form -->
            <form action="process_rental.php" method="POST" class="rental-form">
                <input type="hidden" name="car" value="<?php echo $car; ?>">
                <input type="hidden" name="price" value="<?php echo $price; ?>">

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
        </div>
    </section>

    <footer>
        <p>&copy; 2025 RideMyKotsi. All rights reserved.</p>
    </footer>
</body>
</html>
