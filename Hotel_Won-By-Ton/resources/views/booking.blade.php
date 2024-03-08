<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
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
    
        
         <!-- Header Start -->
        
        <!-- Header End -->
    
        <!-- Payment start -->
        <div class="contain">
            <form id="paymentForm" action="#" method="post">
                @csrf <!-- CSRF token -->
    
                <label for="reservationId">Reservation ID:</label>
                <input type="text" id="reservationId" name="reservationId" readonly>
    
                <label for="roomId">Rooms:</label>
                <select name="roomId" id="roomId">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->RoomID }}" data-price="{{ $room->PricePerNight }}">{{ $room->RoomName }}</option>
                    @endforeach
                </select>
    
                <label for="checkInDate">Check-in Date:</label>
                <input type="date" id="checkInDate" name="checkInDate" required>
            
                <label for="checkOutDate">Check-out Date:</label>
                <input type="date" id="checkOutDate" name="checkOutDate" required>
    
                <div class="total-price">Total Price: $<span id="totalPrice">0.00</span></div>
                <label for="pricePerNight">Price per Night:</label>
                
                    @foreach ( $rooms as $room)
                    <div class="total-price">Total Price: $<span id="totalPrice">{{$room->price}}</span></div>
        
                    @endforeach
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
    
    
          // Get references to the date inputs
        var checkInDateInput = document.getElementById('checkInDate');
        var checkOutDateInput = document.getElementById('checkOutDate');
    
        // Attach the input event listeners
        checkInDateInput.addEventListener('input', calculateStay);
        checkOutDateInput.addEventListener('input', calculateStay);
    
        function calculateStay() {
          // Get the check-in and check-out date values
          var checkInDate = new Date(checkInDateInput.value);
          var checkOutDate = new Date(checkOutDateInput.value);
    
          // Check if both dates are selected
          if (!checkInDate || !checkOutDate) {
            alert("Please select both check-in and check-out dates.");
            return;
          }
    
          // Calculate the duration of stay in milliseconds
          var durationInMs = checkOutDate - checkInDate;
    
          // Convert the duration to days
          var durationInDays = durationInMs / (1000 * 60 * 60 * 24);
    
          // Display the result (you can customize this part according to your needs)
          alert("You have selected a stay of " + durationInDays + " days.");
        }
        function makePayment() {
        // Gather the data from the form
        let reservationId = document.getElementById("reservationId").value;
        let roomId = document.getElementById("roomId").value;
        let checkinDate = document.getElementById("checkinDate").value;
        let checkoutDate = document.getElementById("checkoutDate").value;
        let totalPrice = document.getElementById("totalPrice").textContent;
        let status = document.getElementById("status").value;
        let creditCard = document.getElementById("creditCard").value;
    
        // Implement the logic to send the data to your server for processing (you can use AJAX)
        // Assuming the payment is successful, redirect to the receipt page
        let receiptUrl = `/receipt?reservationId=${reservationId}&roomId=${roomId}&checkinDate=${checkinDate}&checkoutDate=${checkoutDate}&totalPrice=${totalPrice}&status=${status}&creditCard=${creditCard}`;
        
        // Redirect to the receipt page
        window.location.href = "http://127.0.0.1:8000/receipt";
    }
    
        function cancelPayment() {
            alert("Payment canceled");
    
            // Clear the form
            document.getElementById("username").value = "";
            document.getElementById("lengthOfStay").value = "0";
            document.getElementById("location").value = "";
            document.getElementById("creditCard").value = "";
            document.getElementById("expiryDate").value = "";
            document.getElementById("cvv").value = "";
            document.getElementById("totalPrice").textContent = "0.00";
    
            // Redirect to the "/welcome" page
            
        }
      
        // Function to generate a random reservation ID
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

            // Get the price per night of the selected room
            var pricePerNight = parseFloat(selectedRoomOption.getAttribute('data-price'));

            // Get the check-in and check-out dates
            var checkInDate = new Date(document.getElementById('checkInDate').value);
            var checkOutDate = new Date(document.getElementById('checkOutDate').value);

            // Calculate the number of nights
            var numberOfNights = Math.ceil((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));

            // Calculate the total price
            var totalPrice = pricePerNight * numberOfNights;

            // Update the total price field
            document.getElementById('totalPrice').textContent = totalPrice.toFixed(2);
        }

        // Attach event listeners to the input fields
        document.getElementById('roomId').addEventListener('change', calculateTotalPrice);
        document.getElementById('checkInDate').addEventListener('change', calculateTotalPrice);
        document.getElementById('checkOutDate').addEventListener('change', calculateTotalPrice);
    </script>
      </script>
  
</x-app-layout>