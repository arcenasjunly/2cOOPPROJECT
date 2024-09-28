<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .calculator-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #28a745;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #e9ecef;
            border-radius: 5px;
            color: #333;
            text-align: center;
        }
        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>
<div class="calculator-container">
        <h2>Simple Calculator</h2>
        <form action="" method="post">
            <h3><label for="n1">First Number</label></h3>
            <input type="number" name="n1" id="n1" required>
            <h3><label for="n2">Second Number</label></h3>
            <input type="number" name="n2" id="n2" required>
            <input type="submit" name="btn" value="Calculate">
        </form>  

  <?php
    if (isset($_POST['btn'])){
        $number1 = $_POST['n1'];
        $number2 = $_POST['n2'];

        $addition = addition($number1,$number2);
        $subtraction = subtraction($number1,$number2);
        $multiplication = multiplication($number1,$number2);
        $division = division($number1,$number2);

        echo "The sum of $number1 and $number2 is $addition <br>";
        echo "The difference of $number1 and $number2 is $subtraction <br>";
        echo "The product of $number1 and $number2 is $multiplication <br>";
        echo "The quotient of $number1 and $number2 is $division <br>";
    }

    function addition($a, $b){
        $sum= $a + $b;
        return $sum;
    }
    function subtraction( $a, $b){
        $diff= $a - $b;
        return $diff;
    }
    function multiplication( $a, $b ){
        $prod= $a * $b;
        return $prod;
    }
    function division( $a, $b ){
        $quo= $a / $b;
        return $quo;
    }
  ?>
</body>
</html>