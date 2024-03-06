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
    <body>
        <div class="container">
            <div class="row p-3">
                @foreach($rooms as $room)
                    <div class="col-lg-4 mb-3"> 
                        <div class="vehicleCon">
                            <div class="border-end">
                                <div class="vehicleImage" data-bs-toggle="modal" data-bs-target="#{{ $room->RoomName }}{{ $room->RoomType }}{{ $room->Description }}Image">
                                    <img src="{{ $room->Image }}" alt="">
                                </div>
                            </div>
                            <div data-bs-toggle="modal" data-bs-target="#{{ $room->RoomName }}{{ $room->RoomType }}{{ $room->Description }}">
                                <div class="desc-item">RoomName: {{ $room->RoomName }}</div>
                                <div class="desc-item">RoomType: {{ $room->RoomType }}</div>
                                <div class="desc-item">Description: {{ $room->Description }}</div>
                                <div class="desc-item">Availability: {{ $room->Availability }}</div>
                                <div class="button-container">
                                    <button class="book-now-btn">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($loop->iteration % 3 == 0 || $loop->last)
                        </div>
                        @if(!$loop->last)
                            <div class="row p-3">
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </body>
    </html>
</x-app-layout>
