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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary text-uppercase">Hotel Won</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
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
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="navbar-nav">
                    <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                        <i class="fa fa-envelope text-primary me-2"></i>
                        <p class="mb-0">HotelWon@gmail.com</p>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2">
                        <i class="fa fa-phone-alt text-primary me-2"></i>
                        <p class="mb-0">1 610 345 6789</p>
                    </div>
                    <div class="d-inline-flex align-items-center py-2">
                        <a class="me-3" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="me-3" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                        <a class="me-3" href="https://twitter.com/?lang=en"><i class="fab fa-linkedin-in"></i></a>
                        <a class="me-3" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a class="" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Sign Up Form -->
    <div class="content-wrap">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Sign Up</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="inputFirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Enter your first name">
                                </div>
                                <div class="mb-3">
                                    <label for="inputLastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="inputLastName" placeholder="Enter your last name">
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password">
                                </div>
                                <div class="mb-3">
                                    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm your password">
                                </div>
                                <div class="mb-3">
                                    <label for="inputUserType" class="form-label">User Type</label>
                                    <select class="form-select" id="inputUserType">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                        <option value="manager">Hotel Manager</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <a href="http://127.0.0.1:8000/login" class="btn btn-primary ">Login<i class="fa fa-arrow-right ms-3"></i></a>
                            </form>
                        </div>
                    </div>
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
