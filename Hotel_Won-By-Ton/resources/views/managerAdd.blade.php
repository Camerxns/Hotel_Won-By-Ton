<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotel Won - Sign Up</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        /* Custom CSS */
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .content-wrap {
            min-height: calc(100vh - 150px); /* Adjust based on your footer height */
        }
        .footer {
            padding: 20px 0;
            font-size: 14px;
        }
        /* Custom CSS for select element */
        select.form-select {
            height: calc(2.5rem + 2px);
            padding: .375rem 1.75rem .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>
</head>

<body>
    

    <!-- Sign Up Form -->
    <div class="content-wrap">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Add Room</h5>
                        </div>
                        <div class="card-body">
                            <form id ="signup" action={{ route('addRoom') }} method="POST" >
                                @csrf
                                <div class="mb-3">
                                    <label for="inputFirstName" class="form-label">Room Name</label>
                                    <input type="text" class="form-control" id="RoomName" name="RoomName" placeholder="Enter the room name">
                                </div>
                                <div class="mb-3">
                                    <label for="inputLastName" class="form-label">Capacity</label>
                                    <input type="text" class="form-control"  name="Capacity"  id="Capacity" placeholder="Enter person limit for room">
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">Room Type</label>
                                    <input type="" class="form-control" name="RoomType" id="RoomType" placeholder="Enter the room type lounge, suite, etc.">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">PricePerNight</label>
                                    <input type="" class="form-control"  name="Price" id="Price" placeholder="Enter the price per night">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Discount - %Off</label>
                                    <input type="" class="form-control"  name="Discount" id="Discount" placeholder="Enter a discount if any for room">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Availability</label>
                                    <input type="" class="form-control"  name="Availability" id="Availability" placeholder="Enter the rooms availability">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Image of Room</label>
                                    <input type="" class="form-control"  name="Image" id="Image" placeholder="Enter the image url for room">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Description of Room</label>
                                    <input type="" class="form-control"  name="Description" id="Description" placeholder="Enter description of room">
                                </div>
                               
                                
                                <button type="submit" class="btn btn-primary">Add Room</button>
                                
                            </form>
                            
                        </div>
                    </div><br><br>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- End Sign Up Form -->

    <!-- Footer -->
    <div class="container-fluid bg-dark text-light footer fixed-bottom">
        <div class="container pb-3">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <br>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Hotel Won</a>, All Right Reserved. Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end" >
                        <div class="footer-menu" >
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
</x-app-layout>
