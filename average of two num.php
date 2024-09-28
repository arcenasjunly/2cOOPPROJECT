<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Calculator</title>
    <style>
        body {
            background-color: #blue;
        }
        .calculator-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result {
            margin-top: 20px;
            text-align: center; /* Center the text */
            font-size: 1.5em;  /* Optional: make the font larger */
            color: #333;       /* Optional: change text color */
        }
    </style>
</head>
<body>
    <div class="calculator-container">
        <h2>Calculate the Average of Two Numbers</h2>
        <form method="POST" action="">
            <label for="num1">Enter the first number:</label>
            <input type="number" name="num1" required>
            <br><br>
            <label for="num2">Enter the second number:</label>
            <input type="number" name="num2" required>
            <br><br>
            <input name="btn" type="submit" value="Calculate Average">
        </form>

        <?php
        if (isset($_POST['btn'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            function calculateAverage($num1, $num2) {
                return ($num1 + $num2) / 2;
            }

            echo "<div class='result'>The average of $num1 and $num2 is: " . calculateAverage($num1, $num2) . "</div>";
        }
        ?>
    </div>
</body>
</html>
