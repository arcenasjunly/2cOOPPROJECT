<!DOCTYPE html>
<html>
<head>
    <title>Sum Calculator</title>
</head>
<body>
    <h2>Enter two numbers to calculate their sum:</h2>
    <form method="post" action="">
        Number 1: <input type="text" name="num1"><br><br>
        Number 2: <input type="text" name="num2"><br><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (is_numeric($num1) && is_numeric($num2)) {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum";
        } else {
            echo "Please enter valid numerical values.";
        }
    }
    ?>
</body>
</html>