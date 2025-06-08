<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Car Rental Service</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap'>
  <link rel="stylesheet" href="./style.css">
  <style>
    body {
      background-color:rgb(255, 255, 255);
      color: #ffffff;
      font-family: 'Montserrat', sans-serif;
      text-align: center;
      padding: 20px;
    }
    .card {
      background:rgb(0, 0, 0);
      border-radius: 12px;
      padding: 20px;
      margin: 20px auto;
      width: 90%;
      max-width: 400px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }
    .card h2 {
      font-size: 24px;
      color:rgb(0, 89, 255);
      margin-bottom: 10px;
    }
    .card p {
      font-size: 16px;
      color: #cfcfcf;
    }
    .card-button {
      display: inline-block;
      background: rgb(0, 89, 255);
      color: #fff;
      padding: 10px 20px;
      margin-top: 15px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 600;
    }
    .card-button:hover {
      background:rgb(0, 89, 255);
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Find Your Perfect Ride</h2>
    <p>Choose from a wide range of vehicles for any occasion. Whether it's a business trip or a family getaway, we have the right car for you.</p>
    <a class="card-button" href="#">View Cars</a>
  </div>

  <div class="card">
    <h2>Affordable Rental Prices</h2>
    <p>We offer competitive pricing with no hidden fees. Enjoy the best deals and flexible rental plans tailored to your needs.</p>
    <a class="card-button" href="#">Check Prices</a>
  </div>

  <div class="card">
    <h2>Easy & Fast Booking</h2>
    <p>Book your car in just a few clicks. Our seamless online process ensures a hassle-free experience.</p>
    <a class="card-button" href="#">Book Now</a>
  </div>
</body>
</html>
