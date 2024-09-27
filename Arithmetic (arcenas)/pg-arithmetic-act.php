<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Simple Calculator</h2>
        <form method="post" action="" class="form-inline">
            <div class="form-group mr-2">
                <label for="num1">Number 1:</label>
                <input type="text" class="form-control" id="num1" name="num1">
            </div>
            <div class="form-group mr-2">
                <label for="num2">Number 2:</label>
                <input type="text" class="form-control" id="num2" name="num2">
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if (is_numeric($num1) && is_numeric($num2)) {
                echo "<h3>Results:</h3>";
                echo "<p>Sum: " . ($num1 + $num2) . "</p>";
                echo "<p>Difference: " . ($num1 - $num2) . "</p>";
                echo "<p>Product: " . ($num1 * $num2) . "</p>";
                if ($num2 != 0) {
                    echo "<p>Quotient: " . ($num1 / $num2) . "</p>";
                } else {
                    echo "<p>Cannot divide by zero.</p>";
                }
            } else {
                echo "<p>Please enter valid numerical values.</p>";
            }
        }
        ?>
    </div>

    <!-- Bootstrap JS (optional, for certain Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>