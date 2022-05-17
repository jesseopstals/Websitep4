<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
</head>
<body onload="startTime()">
    <nav>
        <ul>
            <li><a href="login.php">login <i class="ri-login-box-line"></i></a></li>
            <li><a href="clockin.php">Clock in <i class="ri-time-line"></i></a></li>
            <li><a href="EN"></a>EN</li>
            <li><a href="NE"></a>NE</li>
        </ul>
    </nav>
    <div class="container">
        <h1>Welcome, <br> To your most relaible clock in website! </h1>
        <p id="clock" class="clock"></p>
        <p id="date" class="date"></p>
    </div>

    <script src="../js/clock.js"></script>
</body>
</html>