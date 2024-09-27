<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <?php
    $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['day'])) {
            $selected_day = $_POST['day'];
            echo "<h2>Selected day: $selected_day</h2>";
        }
    }
    ?>

    <h2>Select a day of the week:</h2>
    <form method="post" action="">
        <?php
        foreach ($days as $day) {
            echo "<button type='submit' name='day' value='$day'>$day</button>";
        }
        ?>
    </form>
</body>
</html>