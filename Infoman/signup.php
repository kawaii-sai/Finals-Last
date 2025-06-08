<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encrypt password

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        // Display error in a styled alert box
        echo "<div style='
                background: #ffdddd; 
                color: red; 
                padding: 10px; 
                text-align: center;
                border: 1px solid red;
                margin: 20px;'>
                ❌ Error: Email already registered! 
                <br><a href='index.php' style='color: blue;'>Go back</a>
              </div>";
        exit();
    }

    // Insert new user
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Store success message in session and redirect
        session_start();
        $_SESSION['message'] = "Registration successful!";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>