<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/rooms.css" rel="stylesheet">
    <title>Rooms</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<style>
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-4 {
        flex: 0 0 calc(33.33% - 20px);
        max-width: calc(33.33% - 20px);
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .vehicleCon {
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
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
        background-color: #007bff; /* Change button color */
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

<body>
    <div class="container" id="roomContainer">
        @foreach($rooms as $room)
        @if ($room->Availability == 'Available')
            <div class="vehicleCon"> 
                <div class="border-end">
                    <div class="vehicleImage" data-bs-toggle="modal" data-bs-target="#{{ $room->RoomName }}{{ $room->RoomType }}{{ $room->Description }}Image">
                        <img src="{{ $room->Image }}" alt="">
                    </div>
                </div>
                <div data-bs-toggle="modal" data-bs-target="#{{ $room->RoomName }}{{ $room->RoomType }}{{ $room->Description }}">
                    <div class="desc-item"> {{ $room->RoomName }}</div>
                    <div class="desc-item"> {{ $room->RoomType }}</div>
                    <div class="desc-item"> {{ $room->Description }}</div>
                    <div class="desc-item"> {{ $room->Availability }}</div>
                    <div class="desc-item">Price Per Night: ${{ $room->Price }}</div>
                    <div class="button-container">
                        <a class="btn btn-sm btn-dark rounded" href="http://127.0.0.1:8000/booking">Book Now</a>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
    </div>

    <div><br><br><br><br></div>

    <!-- Footer Section -->
    <!-- Your footer HTML goes here -->
</body>
</html>
</x-app-layout>
    
