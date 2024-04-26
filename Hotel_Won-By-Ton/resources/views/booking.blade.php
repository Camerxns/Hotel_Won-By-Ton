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
        #hidden-form{
            display: none;
        }
    </style>
    <body>
      
       
        <div class="contain">
            <form id="paymentForm" action="{{ route('reservation') }}" method="post">
                @csrf 
                <div id="errorMessage" style="color: red; margin-top: 10px; display: none;">This room is booked. Please select another room.</div>
                <label for="ReservationID">Reservation ID:</label>
                <input type="text" id="ReservationID" name="ReservationID" readonly>
            
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
            
                <label for="RoomID">Room:</label>
                <select name="RoomID" id="RoomID">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->RoomID }}" data-price="{{ $room->Price }}" data-availability="{{ $room->Availability }}">{{ $room->RoomName }}</option>
                    @endforeach
                </select>
            
                <label for="CheckinDate">Check-in Date:</label>
                <input type="date" id="CheckinDate" name="CheckinDate" required>
            
                <label for="CheckoutDate">Check-out Date:</label>
                <input type="date" id="CheckoutDate" name="CheckoutDate" required>
            
                <div class="price-per-night">Price per Night: $<span id="displayPricePerNight">0.00</span></div>
            
                <div class="total-price">Total Price: $<span name ="Price" id="displayTotalPrice">0.00</span></div>
                <input type="hidden" name="Price" id="Price">
                <div  type="hidden" style="display: none;"><span name ="Price" id="displayDiscount"></span></div>
               
                <p>You Will be Rewarded 100 points every purchase !</p>
            
                <label for="Status">Status:</label>
                <input type="text" id="Status" name="Status" readonly>
            
                <label for="CreditCard">Credit Card Number:</label>
                <input type="text" id="CreditCard" name="CreditCard" required>
            
                <label for="ExpirationDate">Expiration Date:</label>
                <input type="date" id="ExpirationDate" name="ExpirationDate" required>
            
                <label for="CVV">CVV:</label>
                <input type="text" id="CVV" name="CVV" placeholder="***" required>
                <div>Current Points: {{ Auth::user()->points }}</div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <label for="applyPointsCheckbox">Apply Points</label>
                    </div>
                    <div class="col-auto">
                        <input type="checkbox" id="applyPointsCheckbox" name="applyPointsCheckbox">
                    </div>
                </div>
                <button id="paymentButton" type="submit" class="btn btn-primary">Make Payment</button>
                <a href="http://127.0.0.1:8000/" class="btn btn-primary">Cancel<i class="fa fa-arrow-right ms-3"></i></a>

            </form>
            <form id="hidden-form" method="POST" action="{{ route('deductPoints') }}">
                @csrf
                <input type="hidden" id="deductedPoints" name="deductedPoints" value="">
            </form>
        </div>
       
        
        <script>
            function generateRandomReservationId() {
                let randomNumber = Math.floor(Math.random() * 1000000); 
                document.getElementById("ReservationID").value = randomNumber;
            }
        
            generateRandomReservationId();
        
            function calculateTotalPrice() {
                console.log("calculateTotalPrice function is running");
                var roomId = document.getElementById('RoomID').value;
                var selectedRoomOption = document.querySelector('#RoomID option[value="' + roomId + '"]');
                
                if (!selectedRoomOption) {
                    console.error("Selected room option not found.");
                    return;
                }
        
                var pricePerNight = parseFloat(selectedRoomOption.getAttribute('data-price'));
                
                if (isNaN(pricePerNight)) {
                    console.error("Invalid price per night:", selectedRoomOption.getAttribute('data-price'));
                    return;
                }
        
                var checkInDate = new Date(document.getElementById('CheckinDate').value);
                var checkOutDate = new Date(document.getElementById('CheckoutDate').value);
                
                var numberOfNights = Math.ceil((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));
                var totalPrice = pricePerNight * numberOfNights;
        
                var applyPoints = document.getElementById('applyPointsCheckbox').checked;
                var discountAmount = applyPoints ? Math.min(totalPrice, {{ Auth::user()->points }} * 0.01) : 0;
                var finalPrice = totalPrice - discountAmount;
        
                // Deduct points if they are applied
                if (applyPoints) {
    var deductedPoints = Math.floor(discountAmount * 100); 
    document.getElementById('deductedPoints').value = deductedPoints;
    
}

        
                document.getElementById('Price').value = finalPrice.toFixed(2);
                
                document.getElementById('displayPricePerNight').textContent = pricePerNight.toFixed(2);
                document.getElementById('displayTotalPrice').textContent = finalPrice.toFixed(2);
                document.getElementById('displayDiscount').textContent = discountAmount.toFixed(2);
        
                updateStatus();
            }
        
            document.getElementById('RoomID').addEventListener('change', calculateTotalPrice);
            document.getElementById('CheckinDate').addEventListener('change', calculateTotalPrice);
            document.getElementById('CheckoutDate').addEventListener('change', calculateTotalPrice);
            document.getElementById('applyPointsCheckbox').addEventListener('change', calculateTotalPrice);
        
            calculateTotalPrice();
        
            function updateStatus() {
                console.log("Update Status running");
                var roomId = document.getElementById('RoomID').value;
                var selectedRoomOption = document.querySelector('#RoomID option[value="' + roomId + '"]');
               
                if (!selectedRoomOption) {
                    console.error("Selected room option not found.");
                    return;
                }
        
                var availability = selectedRoomOption.getAttribute('data-availability');
                var errorMessage = document.getElementById('errorMessage');
        
                var paymentButton = document.getElementById('paymentButton');
        
                console.log(availability);
        
                if (availability === 'Unavailable') {
                    errorMessage.style.display = 'block';
                    paymentButton.style.display = 'none';
                } else {
                    errorMessage.style.display = 'none';
                    paymentButton.style.display = 'block';
                }
                
                document.getElementById('Status').value = availability;
            }
        
            document.getElementById('RoomID').addEventListener('change', updateStatus);
        
            updateStatus();
        </script>
        
    </body>
</x-app-layout>
