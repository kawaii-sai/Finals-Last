<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>RideMy Kotsi</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            text-align: center;
        }

        .modal-content input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .modal-content button {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            border: none;
            background-color: #063da5;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .close {
            color: red;
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav>
        <a href="#" class="logo">RideMyKotsi</a>
        <div class="links">
            
        <a href="features.php">Features</a>

            
        </div>
        <div class="login">
            <a href="index.php">Log-out</a>


        </div>
    </nav>

    <header>
        <div class="left">
            <h1>RideMy<span> Kotsi</span></h1>
            <p> Find the car that best suits your needs!</p>
            <a href="#">
                <i class='bx bx-car'></i>
                <span>Rent Car</span>
            </a>
        </div>
        <img src="assets/rental.png">
    </header>

    <h2 class="separator">Car Renting Service</h2>

    <div class="sell-nft">
        <div class="item">
            <div class="header">
                <i class='bx bx-wallet-alt'></i>
                <h5>About Us</h5>
            </div>
            <p></p>We are dedicated to providing a seamless car rental experience tailored to meet your travel needs. With a diverse fleet of reliable vehicles and exceptional customer service, we ensure that your journey is comfortable and hassle-free.</p>
        </div>
    </div>

    <h2 class="separator">
        Car Renting Service
    </h2>

    <div class="sell-nft">
        <div class="item">
            <div class="header">
                <i class='bx bx-wallet-alt'></i>
                <h5>Connect E-Wallet</h5>
            </div>
            <p>Our platform allows customers to securely connect their digital wallets, enabling a seamless online rental experience. Enjoy hassle-free transactions and instant booking of your desired vehicle, all at your fingertips.</p>
        </div>
        <div class="item">
            <div class="header">
                <i class='bx bx-cart-alt'></i>
                <h5>Marketplace</h5>
            </div>
            <p>Our marketplace connects customers with a wide variety of rental options, offering competitive rates and flexible choices. Explore our diverse listings and find the perfect vehicle to fit your needs.</p>
        </div>
        <div class="item">
            <div class="header">
                <i class='bx bx-grid-alt'></i>
                <h5>Dealers</h5>
            </div>
            <p>We partner with top manufacturers to offer a diverse range of high-quality vehicles. Our commitment ensures that every car meets strict safety and performance standards for your peace of mind.</p>
        </div>
    </div>

    <h2 class="separator">
        Hot Car Deals!
    </h2>

    <div class="nft-shop">
        <div class="category">
            <a href="#">Sedan</a>
            <a href="#">Hatchback</a>
            <a href="#">SUV</a>
            <a href="#">Sports</a>
            <a href="#">Crossover</a>
        </div>

        <div class="nft-list">
    <!-- Mercedes-Benz -->
    <div class="item">
        <img src="assets/benz.png">
        <div class="info">
            <div>
                <h5>Mercedez-Benz</h5>
                <div class="btc">
                    <i class='bx bxl-bitcoin'></i>
                    <p>3.50$/hr</p>
                </div>
            </div>
            <p>5 of 33</p>
        </div>
        <div class="bid">
            <p>2h 28m 1s</p>
            <a href="rent.php?car=Mercedez-Benz&price=3.50&image=benz.png&availability=5">Rent</a>
        </div>
    </div>

    <!-- Range Rover -->
    <div class="item">
        <img src="assets/black.png">
        <div class="info">
            <div>
                <h5>Range Rover</h5>
                <div class="btc">
                    <i class='bx bxl-bitcoin'></i>
                    <p>4$/hr</p>
                </div>
            </div>
            <p>7 of 12</p>
        </div>
        <div class="bid">
            <p>1h 28m 1s</p>
            <a href="rent.php?car=Range Rover&price=4&image=black.png&availability=7">Rent</a>
        </div>
    </div>

    <!-- Porsche -->
    <div class="item">
        <img src="assets/red.png">
        <div class="info">
            <div>
                <h5>Porsche</h5>
                <div class="btc">
                    <i class='bx bxl-bitcoin'></i>
                    <p>8$/hr</p>
                </div>
            </div>
            <p>9 of 23</p>
        </div>
        <div class="bid">
            <p>4h 21m 1s</p>
            <a href="rent.php?car=Porsche&price=8&image=red.png&availability=9">Rent</a>
        </div>
    </div>

    <!-- Chevrolet -->
    <div class="item">
        <img src="assets/camaro.png">
        <div class="info">
            <div>
                <h5>Chevrolet</h5>
                <div class="btc">
                    <i class='bx bxl-bitcoin'></i>
                    <p>5.50$/hr</p>
                </div>
            </div>
            <p>5 of 33</p>
        </div>
        <div class="bid">
            <p>0h 28m 1s</p>
            <a href="rent.php?car=Chevrolet&price=5.50&image=camaro.png&availability=1">Rent</a>
        </div>
    </div>
</div>

    <h2 class="separator">
        Best Sellers
    </h2>

    <div class="sellers">
        <div class="item">
            <img src="assets/vios.png">
            <div class="info">
                <h4>Toyota Vios</h4>
                <p>15.2Km</p>
            </div>
        </div>
        <div class="item">
            <img src="assets/tuner.png">
            <div class="info">
                <h4>Toyota Fortuner</h4>
                <p>12.7Km</p>
            </div>
        </div>
        <div class="item">
            <img src="assets/mirage.png">
            <div class="info">
                <h4>Mitsubishi Mirage</h4>
                <p>75.9Km</p>
            </div>
        </div>
        <div class="item">
            <img src="assets/verest.png">
            <div class="info">
                <h4>Ford Everest</h4>
                <p>44.2Km</p>
            </div>
        </div>
    </div>

    <footer>
        <h3>Find the car that suits you best!</h3>
        <div class="right">
            <div class="links">
                <a href="#">Privacy Policy</a>
                <a href="#">Cooperation</a>
                <a href="#">Sponsorship</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="social">
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-facebook-square'></i>
                <i class='bx bxl-github'></i>
<img src="assets/PH.png" alt="Philippine Flag" style="width: 30px; height: auto;">
            </div>
            <p>Laforteza, Ortega, Arbes, Balibado</p>
        </div>
    </footer>
    

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h3>Login</h3>
            <input type="text" placeholder="Full Name" required>
            <input type="text" placeholder="Car to Rent" required>
            <input type="email" placeholder="Email Address" required>
            <input type="text" placeholder="Contact Number" required>
            <button>Create Account</button>
        </div>
    </div>

    <!-- Rental Form Modal -->
<div id="rentalModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeRentalModal">&times;</span>
        <h3>Rent a Car</h3>
        <input type="text" id="customerName" placeholder="Customer Name" required>
        <input type="text" id="contactNumber" placeholder="Contact Number" required>
        <input type="text" id="carToBorrow" placeholder="Car to Borrow" required>
        <input type="number" id="daysToRent" placeholder="Days to Rent" required>
        <input type="text" id="idToLeave" placeholder="ID to Leave" required>
        <button id="submitRental">Submit Rental</button>
    </div>
</div>

<script>
    document.querySelector(".signup").addEventListener("click", function () {
        document.getElementById("rentalModal").style.display = "flex";
    });

    document.getElementById("closeRentalModal").addEventListener("click", function () {
        document.getElementById("rentalModal").style.display = "none";
    });

    window.onclick = function (event) {
        if (event.target === document.getElementById("rentalModal")) {
            document.getElementById("rentalModal").style.display = "none";
        }
    };
</script>

    <script>
        document.getElementById("loginBtn").addEventListener("click", function () {
            document.getElementById("loginModal").style.display = "flex";
        });

        document.getElementById("closeModal").addEventListener("click", function () {
            document.getElementById("loginModal").style.display = "none";
        });

        window.onclick = function (event) {
            if (event.target === document.getElementById("loginModal")) {
                document.getElementById("loginModal").style.display = "none";
            }
        };
    </script>
    <script>
        // Show rental modal when clicking "Rent a Car"
        document.querySelector(".signup").addEventListener("click", function () {
            document.getElementById("rentalModal").style.display = "flex";
        });
    
        // Close rental modal when clicking "×"
        document.getElementById("closeRentalModal").addEventListener("click", function () {
            document.getElementById("rentalModal").style.display = "none";
        });
    
        // Close rental modal when clicking "Submit Rental"
        document.getElementById("submitRental").addEventListener("click", function () {
            document.getElementById("rentalModal").style.display = "none";
        });
    
        // Close rental modal when clicking outside
        window.onclick = function (event) {
            if (event.target === document.getElementById("rentalModal")) {
                document.getElementById("rentalModal").style.display = "none";
            }
        };
    </script>
    
    <script>
        // Show login modal when clicking "Login"
        document.getElementById("loginBtn").addEventListener("click", function () {
            document.getElementById("loginModal").style.display = "flex";
        });
    
        // Close login modal when clicking "×"
        document.getElementById("closeModal").addEventListener("click", function () {
            document.getElementById("loginModal").style.display = "none";
        });
    
        // Close login modal when clicking "Create Account"
        document.querySelector("#loginModal button").addEventListener("click", function () {
            document.getElementById("loginModal").style.display = "none";
        });
    
        // Close login modal when clicking outside
        window.onclick = function (event) {
            if (event.target === document.getElementById("loginModal")) {
                document.getElementById("loginModal").style.display = "none";
            }
        };
    </script>
    
</body>

</html>
