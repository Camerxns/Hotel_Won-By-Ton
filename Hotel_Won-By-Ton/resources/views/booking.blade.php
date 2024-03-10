<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>payment</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        .contain{
            margin-top: 50px; 
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
        }
    
        form {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
        }
    
        label {
            display: block;
            margin-bottom: 8px;
        }
    
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
    
        .total-price {
            font-weight: bold;
            margin-bottom: 16px;
        }
    
        #pay {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    
        button[type="button"] {
            background-color: #f44336;
        }
    </style>
    <body>
        <!-- Payment start -->
        <div class="contain">
            <form id="paymentForm" action="#" method="post">
                @csrf <!-- CSRF token -->
    
                <label for="reservationId">Reservation ID:</label>
                <input type="text" id="reservationId" name="reservationId" readonly>
    
                <label for="roomId">Rooms:</label>
                    <select name="roomId" id="roomId">
                        @foreach ($rooms as $room)
                            <option value="{{ $room->RoomID }}" data-price="{{ $room->Price }}" data-availability="{{ $room->Availability }}">{{ $room->RoomName }}</option>
                        @endforeach
                    </select>


    
                <label for="checkInDate">Check-in Date:</label>
                <input type="date" id="checkInDate" name="checkInDate" required>
            
                <label for="checkOutDate">Check-out Date:</label>
                <input type="date" id="checkOutDate" name="checkOutDate" required>
    
                <div class="price-per-night">Price per Night: $<span id="displayPricePerNight">0.00</span></div>

                <div class="total-price">Total Price: $<span id="displayTotalPrice">0.00</span></div>
    
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" readonly>
    
                <label for="creditCard">Credit Card:</label>
                <input type="text" id="creditCard" name="creditCard" placeholder="**** **** **** ****" required>
    
                <button type="button" onclick="makePayment()" id="pay" href="http://127.0.0.1:8000/receipt">Make Payment</button>
                <a href="http://127.0.0.1:8000/" class="btn btn-primary">Cancel<i class="fa fa-arrow-right ms-3"></i></a>
            </form>
        </div>
        
        <script>
            function generateRandomReservationId() {
                // Generate a random number as a reservation ID
                let randomNumber = Math.floor(Math.random() * 1000000); // You can adjust the range as needed
                document.getElementById("reservationId").value = randomNumber;
            }
    
            // Call this function when the page loads or when needed
            generateRandomReservationId();
    
            // Function to calculate the total price
            function calculateTotalPrice() {
        // Get the selected room ID
        var roomId = document.getElementById('roomId').value;

        // Find the selected room in the dropdown options
        var selectedRoomOption = document.querySelector('#roomId option[value="' + roomId + '"]');
        
        // Ensure the selected room option is found
        if (!selectedRoomOption) {
            console.error("Selected room option not found.");
            return;
        }

        // Get the price per night of the selected room
        var pricePerNight = parseFloat(selectedRoomOption.getAttribute('data-price'));
        
        // Ensure the price per night is valid
        if (isNaN(pricePerNight)) {
            console.error("Invalid price per night:", selectedRoomOption.getAttribute('data-price'));
            return;
        }

        console.log("Price per night:", pricePerNight); // Debug output

        // Get the check-in and check-out dates
        var checkInDate = new Date(document.getElementById('checkInDate').value);
        var checkOutDate = new Date(document.getElementById('checkOutDate').value);

        // Calculate the number of nights
        var numberOfNights = Math.ceil((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));
        console.log("Number of nights:", numberOfNights); // Debug output

        // Calculate the total price
        var totalPrice = pricePerNight * numberOfNights;
        console.log("Total price:", totalPrice); // Debug output

        // Update the price per night and total price displays
        document.getElementById('displayPricePerNight').textContent = pricePerNight.toFixed(2);
        document.getElementById('displayTotalPrice').textContent = totalPrice.toFixed(2);
    }
    
            // Attach event listeners to the input fields
            document.getElementById('roomId').addEventListener('change', calculateTotalPrice);
            document.getElementById('checkInDate').addEventListener('change', calculateTotalPrice);
            document.getElementById('checkOutDate').addEventListener('change', calculateTotalPrice);
    
            // Call the function initially to calculate the total price with default values
            calculateTotalPrice();
    
            // Function to make payment
            function makePayment() {
                // Gather the data from the form
                let reservationId = document.getElementById("reservationId").value;
                let roomId = document.getElementById("roomId").value;
                let checkinDate = document.getElementById("checkInDate").value;
                let checkoutDate = document.getElementById("checkOutDate").value;
                let totalPrice = document.getElementById("displayTotalPrice").textContent; // Fixed ID here
                let status = document.getElementById("status").value;
                let creditCard = document.getElementById("creditCard").value;
    
                // Implement the logic to send the data to your server for processing (you can use AJAX)
                // Assuming the payment is successful, redirect to the receipt page
                let receiptUrl = `/receipt?reservationId=${reservationId}&roomId=${roomId}&checkinDate=${checkinDate}&checkoutDate=${checkoutDate}&totalPrice=${totalPrice}&status=${status}&creditCard=${creditCard}`;
                
                // Redirect to the receipt page
                window.location.href = receiptUrl; // Fixed redirect URL here
            }

            function updateStatus() {
        // Get the selected room ID
        var roomId = document.getElementById('roomId').value;

        // Find the selected room option in the dropdown
        var selectedRoomOption = document.querySelector('#roomId option[value="' + roomId + '"]');
        
        // Ensure the selected room option is found
        if (!selectedRoomOption) {
            console.error("Selected room option not found.");
            return;
        }

        // Get the availability of the selected room
        var availability = selectedRoomOption.getAttribute('data-availability');

        // Update the status field
        document.getElementById('status').value = availability;
    }

    // Attach event listener to the room selection dropdown
    document.getElementById('roomId').addEventListener('change', updateStatus);

    // Call the function initially to update the status with default values
    updateStatus();
        </script>
    </body>
</x-app-layout>
