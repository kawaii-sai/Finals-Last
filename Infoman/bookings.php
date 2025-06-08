<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING FORM </title>
    <link rel="stylesheet" href="styles8.css">
</head>
<body>

    <header>
        <h1>Car rental</h1>
        <nav>
            <ul>
                <li><a href="#rooms">Cars</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>BOOK YOUR CAR NOW!</h2>
            <p>Experience luxury and comfort like never before.</p>
            <form id="booking-form">
                <input type="date" id="check-in" required>
                <input type="date" id="check-out" required>
                <select id="guests">
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4+ Guests</option>
                </select>
                <button type="submit">Check Availability</button>
            </form>
        </div>
    </section>

    <section id="rooms">
        <h2>Our Best Choice</h2>
        <div class="room-list">
            <div class="room">
                <img src="room1.jpg" alt="Deluxe Room">
                <h3>Vios</h3>
                <p>$200 per night</p>
            </div>
            <div class="room">
                <img src="room2.jpg" alt="Suite">
                <h3>Mirage</h3>
                <p>$350 per night</p>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <h2>Guest Reviews</h2>
        <div class="testimonial">
            <p>"Best car rental experience ever!" - John D.</p>
        </div>
        <div class="testimonial">
            <p>"Absolutely loved the car and service." - Sarah M.</p>
        </div>
    </section>

    <footer id="contact">
        <h2>Contact Us</h2>
        <p>Email: carremtalkoto@gmail.com | Phone: +123 456 7890</p>
        <p>© 2025 Bherliane & Kaye Car Rentaly. All rights reserved.</p>
    </footer>

    <script src="script1.js"></script>

</body>
</html>
 
            