<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<div style='background: #ddffdd; color: green; padding: 10px; text-align: center; border: 1px solid green; margin: 20px;'>✅ " . $_SESSION['message'] . "</div>";
    unset($_SESSION['message']); // Remove the message after displaying
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INF231 - Car Rental System</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="logo">INF231 - Group<span>10</span></div>
                <input type="checkbox" name="" id="click">
                <label for="click" class="menu-btn">
                    <i class="material-icons">menu</i>
                </label>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row full-screen align-items-center">
                <div class="left">
                    <span class="line"></span>
                    <h2>Hello, Welcome <br> to <span>CarGo Rentals</span></h2>
                    <p>Your trusted rental partner.</p>
                    <a href="#" class="btn">Contact</a>

                    <div class="social-media">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="right">
                    <div class="form">
                        <div class="text-center">
                            <h6><span>Log In</span> <span>Sign Up</span></h6>
                            <input type="checkbox" class="checkbox" id="reg-log">
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap">
                                <div class="card-3d-wrapper">
                                    <!-- LOGIN FORM -->
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <h4 class="heading">Log In</h4>
                                            <form action="login.php" method="POST">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style" placeholder="Your Email" required>
                                                    <i class="input-icon material-icons">alternate_email</i>
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" required>
                                                    <i class="input-icon material-icons">lock</i>
                                                </div>

                                                <button type="submit" class="btn">Submit</button>
                                            </form>
                                            <p class="text-center"><a href="#" class="link">Forgot your password?</a></p>
                                        </div>
                                    </div>

                                    <!-- SIGNUP FORM -->
                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <h4 class="heading">Sign Up</h4>
                                            <form action="signup.php" method="POST">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style" placeholder="Your Name" required>
                                                    <i class="input-icon material-icons">perm_identity</i>
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style" placeholder="Your Email" required>
                                                    <i class="input-icon material-icons">alternate_email</i>
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" required>
                                                    <i class="input-icon material-icons">lock</i>
                                                </div>

                                                <button type="submit" class="btn">Submit</button>
                                            </form>
                                        </div>
                                    </div> <!-- END SIGNUP -->
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get("registered") === "success") {
            document.getElementById("reg-log").checked = false; // Slide to login
            alert("Registration successful! Please log in."); // Show success message
        }
    });
    </script>
</body>
</html>