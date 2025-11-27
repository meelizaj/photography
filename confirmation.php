<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aperture Syndicate - Confirmed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #333;
            color: #e5e5e5;
        }

        .confirmation-box {
            background-color: #555;
            border: 4px solid rgba(139, 139, 139, 1);
            color: #fff;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">

    <div class="text-center">
        <div class="card p-5 rounded-3 confirmation-box shadow-lg" style="max-width: 600px;">
            <h2 class="text-white fw-bold mb-3">Booking Confirmed!</h2>
            <p class="text-white fs-5 mb-4">Your session request has been successfully submitted.</p>

            <a href="index.php" class="btn btn-outline-light mt-4" onclick="clearData()">Return to Homepage</a>
        </div>
    </div>
</body>

</html>