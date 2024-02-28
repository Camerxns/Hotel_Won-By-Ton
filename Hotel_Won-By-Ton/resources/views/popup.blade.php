<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="popup">
        <div class="popup-content">
            <h3>You have signed up!</h3>
            <p>Please wait for validation from an administrator.</p>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('dashboard') }}";
        }, 5000);
    </script>
</body>
</html>
