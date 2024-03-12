{{-- <!DOCTYPE html>
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
     <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase">Hotel Won</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">HotelWon@gmail.com</p>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">1 610 345 6789</p>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="me-3" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                            <a class="me-3" href="https://twitter.com/?lang=en"><i class="fab fa-linkedin-in"></i></a>
                            <a class="me-3" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a class="" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase">Hotel Won</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="http://127.0.0.1:8000/" class="nav-item nav-link active">Home</a>
                            <a href="http://127.0.0.1:8000/about" class="nav-item nav-link">About</a>
                            <a href="http://127.0.0.1:8000/service" class="nav-item nav-link">Services</a>
                            <a href="http://127.0.0.1:8000/room" class="nav-item nav-link">Rooms</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="http://127.0.0.1:8000/booking" class="dropdown-item">Booking</a>
                                    <a href="http://127.0.0.1:8000/team" class="dropdown-item">Our Team</a>
                                    <a href="http://127.0.0.1:8000/testimonial" class="dropdown-item">Testimonial</a>
                                    <a href="http://127.0.0.1:8000/managerAdd" class="dropdown-item">Add Room</a>
                                    <a href="http://127.0.0.1:8000/managerDelete" class="dropdown-item">Delete Room </a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Login/Register<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Payment start -->
    <div class="contain">
        <form id="paymentForm" action="#" method="post">
            @csrf <!-- Add this line to include CSRF token -->

            <label for="reservationId">Reservation ID:</label>
            <input type="text" id="reservationId" name="reservationId" readonly>


            <label for="roomId">Room ID:</label>
            <input type="text" id="roomId" name="roomId" required>

            <label for="checkInDate">Check-in Date:</label>
            <input type="date" id="checkInDate" required>
        
            <label for="checkOutDate">Check-out Date:</label>
            <input type="date" id="checkOutDate" required>


            <div class="total-price"> $<span class="room-price">{{$room->Price}}</span></div>

            <label for="status">Status:</label>
            <input type="text" id="status" name="status" readonly>

            <label for="creditCard">Credit Card:</label>
            <input type="text" id="creditCard" name="creditCard" placeholder="**** **** **** ****" required>

        
            <button type="button" onclick="makePayment()"id="pay" href="http://127.0.0.1:8000/receipt">Make Payment</button>
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
    let status = document.getElementById("status").value;
    let creditCard = document.getElementById("creditCard").value;

    // Calculate the total price by summing up all the room prices
    // let totalPrice = 0;
    // document.querySelectorAll('.room-price').forEach(priceSpan => {
    //     totalPrice += parseFloat(priceSpan.textContent);
    // });

    // Redirect to the receipt page with all the data
    // let receiptUrl = `/receipt?reservationId=${reservationId}&roomId=${roomId}&checkinDate=${checkinDate}&checkoutDate=${checkoutDate}&totalPrice=${totalPrice}&status=${status}&creditCard=${creditCard}`;

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
    </script>
    <!-- Payment end -->
</body>
</html> --}}



{{-- THIS PAGE IS NOT BEING USED. DELETE AFTER VERIFYING WE HAVE EVERYTHING FROM THIS PAGE --}}