document.getElementById("booking-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const checkIn = document.getElementById("check-in").value;
    const checkOut = document.getElementById("check-out").value;
    const guests = document.getElementById("guests").value;

    if (!checkIn || !checkOut) {
        alert("Please select check-in and check-out dates.");
        return;
    }

    alert(`Booking confirmed!\nCheck-in: ${checkIn}\nCheck-out: ${checkOut}\nGuests: ${guests}`);
});
 
            