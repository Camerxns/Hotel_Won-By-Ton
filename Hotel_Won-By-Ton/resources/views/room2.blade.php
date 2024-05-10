<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Rooms</title>
        <!-- Bootstrap CSS link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome CSS link -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <!-- Your custom CSS -->
        <style>
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }
    
            .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between; /* Distribute items evenly along the main axis */
            }
    
            .vehicleCon {
                width: calc(33.33% - 20px); /* Adjusted width */
                margin-bottom: 20px; /* Added margin bottom */
                border: 3px solid #fff; /* Thicker border */
                border-radius: 5px;
                overflow: hidden;
                color: #fff; /* White text */
            }
    
            .vehicleImage {
                width: 100%;
                height: 200px;
                overflow: hidden;
            }
    
            .vehicleImage img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 5px;
            }
    
            .desc-item {
                padding: 10px;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
                font-size: 18px;
            }
    
            .button-container {
                padding: 10px;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
            }
    
            .book-now-btn {
                display: inline-block;
                text-decoration: none;
                background-color: #007bff;
                color: #fff;
                border: 1px solid transparent;
                border-radius: 5px;
                padding: 10px 20px;
                transition: background-color 0.3s ease;
            }
    
            .book-now-btn:hover {
                background-color: #0056b3; 
                border-color: #0056b3; 
            }
    
            .btn{
                padding-top: 15px;
                padding-bottom: 15px;
                padding-left: 30px;
                padding-right: 30px;
                border-radius: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container" id="roomContainer">
            <div class="dropdown" >
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter by Room Type
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#" data-room-type="all">All</a></li>
                    <li><a class="dropdown-item" href="#" data-room-type="Suite">Suite</a></li>
                    <li><a class="dropdown-item" href="#" data-room-type="Single">Single</a></li>
                    <li><a class="dropdown-item" href="#" data-room-type="Double">Double</a></li>
                    <li><a class="dropdown-item" href="#" data-room-type="Double+">Double+</a></li>
                    <li><a class="dropdown-item" href="#" data-room-type="GameRoom">Tournament Room</a></li>
                    <li><a class="dropdown-item" href="#" data-room-type="PartyRoom">Party Rooms</a></li>
                </ul>
            </div>
           <br>
            
            <!-- Dynamic rooms display -->
            <div class="row">
                @foreach($rooms as $room)
                @if ($room->Availability == 'Available')
                    <div class="vehicleCon"> 
                        <div class="border-end">
                            <div class="vehicleImage">
                                <img src="{{ $room->Image }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="desc-item"> {{ $room->RoomName }}</div>
                            <div class="desc-item"> {{ $room->RoomType }}</div>
                            <div class="desc-item"> {{ $room->Description }}</div>
                            <div class="desc-item"> {{ $room->Availability }}</div>
                            <div class="desc-item"> <i class='fas fa-male' style='font-size:24px'></i> : {{ $room->Capacity }} </div>
                            <div class="desc-item">Price Per Night: ${{ $room->Price }}</div>
                            <div class="button-container">
                                <a class="btn btn-sm btn-dark rounded" href="/booking">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
    
        </div>
    
        
        
       
        
    
    
        <!-- Bootstrap JS and Font Awesome JS links -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Script for filtering rooms -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const roomItems = document.querySelectorAll(".vehicleCon");
    
                function filterRooms(roomType) {
                    roomItems.forEach(function(item) {
                        const roomTypeElement = item.querySelector(".desc-item:nth-child(2)");
                        if (roomTypeElement.textContent.trim() === roomType || roomType === "all") {
                            item.style.display = "block";
                        } else {
                            item.style.display = "none";
                        }
                    });
                }
    
                const dropdownItems = document.querySelectorAll(".dropdown-item");
                dropdownItems.forEach(function(item) {
                    item.addEventListener("click", function(event) {
                        event.preventDefault();
                        const roomType = this.getAttribute("data-room-type");
                        filterRooms(roomType);
                    });
                });
            });
        </script>
       
    </body>
    </html>
</x-app-layout>
