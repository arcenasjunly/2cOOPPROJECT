<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .info {
            margin: 20px 0;
        }

        .info label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .info p {
            margin: 0;
            padding: 8px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
        }

        .social-media a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Personal Information</h1>

    <div class="info">
        <label>Name:</label>
        <p><?php echo "Junly Love L. Arcenas"; ?></p>
    </div>

    <div class="info">
        <label>Address:</label>
        <p><?php echo "Señor, Sinacaban, Misamis Occidental "; ?></p>
    </div>

    <div class="info">
        <label>Contact Number:</label>
        <p><?php echo "09317377622"; ?></p>
    </div>

    <div class="info">
        <label>Hobbies:</label>
        <p><?php echo "Reading, Traveling, Cooking"; ?></p>
    </div>

    <div class="info social-media">
        <label>Social Media:</label>
        <p>
            <a href="https://www.facebook.com/junlylove.arcenas?mibextid=ZbWKwL"           
            target="_blank">Facebook</a>
            <a href="https://www.instagram.com/_itsjllyyy?igsh=MWJ5NGtpeXg2cjRuZA=="
            target="_blank">Instagram</a>
        </p>
    </div>
</div>

</body>
</html>