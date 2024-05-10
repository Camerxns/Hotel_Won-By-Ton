<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <title>Hotel Won - Spa & Fitness</title>
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
        <style>
            #spafitnessimg {
                height: 400px;
                width: 100%;
            }
        </style>
    </head>
    
    <body>
        <div>
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->
    
            <!-- Spa & Fitness Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <h6 class="section-title text-start text-primary text-uppercase">Our Spa & Fitness</h6>
                            <h1 class="mb-4" style="color: white">Relax and Rejuvenate at <span class="text-primary text-uppercase">Hotel Won's Spa & Fitness Center</span></h1>
                            <p class="mb-4">Embark on a journey of wellness and vitality at Hotel Won. Our spa and fitness facilities offer a sanctuary for relaxation and a space for revitalization.</p>
                            <div class="row g-3 pb-4">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="border rounded p-1">
                                        <div class="border rounded text-center p-4">
                                            <i class="bi bi-heart fa-2x text-primary mb-2"></i>
                                            <h2 class="mb-1" data-toggle="counter-up" style="color: white">23,435</h2>
                                            <p class="mb-0">Happy Guests</p>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="border rounded p-1">
                                            <div class="border rounded text-center p-4">
                                                <i class="bi bi-people fa-2x text-primary mb-2"></i>
                                                <h2 class="mb-1" data-toggle="counter-up" style="color: white">23</h2>
                                                <p class="mb-0">Executive spa dirctors </p>
                                            </div>
                                        </div>
                                 </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/mainspa.jpg" id="spafitnessimg">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="/img/Lake-George-Spa.jpg">
                                    <br>
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="/img/nail-room.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="book-now" class="container-xxl py-5 text-center">
                <h2 class="mb-4" style="color: white">Ready to rejuvenate your body and mind?</h2>
                
                    <button class="btn btn-primary btn-lg py-3 px-5" onclick="window.location.href='/room2'">Book A Room With The Spa Of Your Dreams!</button>
                
            </div>
    
            <div class=" text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">Hotel Won by Ton</a>, All Right Reserved. Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="#">Home</a>
                                    <a href="#">Privacy Policy</a>
                                    <a href="#">Terms of Service</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
    
    </html>
</x-app-layout>
