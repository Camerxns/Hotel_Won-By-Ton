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
       <form action="process_payment.php" method="post">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="lengthOfStay">Length of Stay (days):</label>
        <input type="number" id="lengthOfStay" name="lengthOfStay" value="0" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>

        <label for="creditCard">Credit Card:</label>
        <input type="text" id="creditCard" name="creditCard" placeholder="**** **** **** ****" required>

        <label for="expiryDate">Expiry Date:</label>
        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" placeholder="***" required>

        <div class="total-price">Total Price: $<span id="totalPrice">0.00</span></div>

        <button type="button" onclick="makePayment()" id="pay">Make Payment</button>
        <a href="http://127.0.0.1:8000/" class="btn btn-primary ">Cancel<i class="fa fa-arrow-right ms-3"></i></a>
    </form> 
    </div>
    

    <script>
       function makePayment() {
    console.log('makePayment function called');

    // Gather form data
    let username = document.getElementById("username").value;
    let lengthOfStay = document.getElementById("lengthOfStay").value;
    let location = document.getElementById("location").value;
    let creditCard = document.getElementById("creditCard").value;
    let expiryDate = document.getElementById("expiryDate").value;
    let cvv = document.getElementById("cvv").value;
    let totalPrice = document.getElementById("totalPrice").textContent;

    // Make an AJAX request to send form data to the server
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "process_payment.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Prepare the data to send
    let data = `username=${username}&lengthOfStay=${lengthOfStay}&location=${location}&creditCard=${creditCard}&expiryDate=${expiryDate}&cvv=${cvv}&totalPrice=${totalPrice}`;

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // If the server responds successfully, redirect to the receipt page
            let response = xhr.responseText;
            if (response === "success") {
                window.location.href = `/receipt?username=${username}&lengthOfStay=${lengthOfStay}&location=${location}&creditCard=${creditCard}&expiryDate=${expiryDate}&cvv=${cvv}&totalPrice=${totalPrice}`;
            } else {
                console.error("Payment processing failed.");
                // Handle the error or display a message to the user
            }
        }
    };

    // Send the AJAX request with form data
    xhr.send(data);
}


        function calculateTotalPrice() {
            let lengthOfStay = parseFloat(document.getElementById("lengthOfStay").value);

            // Ensure lengthOfStay is not below 0
            lengthOfStay = Math.max(0, lengthOfStay);

            const nightlyRate = 100; // literally just add the priceid from the database to change this
            const totalPrice = lengthOfStay * nightlyRate;
            document.getElementById("lengthOfStay").value = lengthOfStay; // Update the input value
            document.getElementById("totalPrice").textContent = totalPrice.toFixed(2);
        }

        document.getElementById("lengthOfStay").addEventListener("input", calculateTotalPrice);

        function cancelPayment() {
            alert("Payment canceled");
        }

        document.getElementById("lengthOfStay").addEventListener("input", calculateTotalPrice);

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
</html>