<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Receipt</h1>

    <p>Reservation ID: {{ $reservationId }}</p>
    <p>Room ID: {{ $roomId }}</p>
    <p>Check-in Date: {{ $checkinDate }}</p>
    <p>Check-out Date: {{ $checkoutDate }}</p>
    <p>Total Price: ${{ $totalPrice }}</p>
    <p>Status: {{ $status }}</p>
    <p>Credit Card: {{ $creditCard }}</p>
</body>
</html>