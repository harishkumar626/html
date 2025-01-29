<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Armstrong Number Checker</h1>
    <form method="POST" action="">
        <input type="number" name="number" placeholder="Enter a number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];
        $originalNumber = $number;
        $sum = 0;
        $numDigits = strlen((string)$number);

        // Calculate the Armstrong sum
        while ($number > 0) {
            $digit = $number % 10; // Get the last digit
            $sum += pow($digit, $numDigits); // Raise the digit to the power of the number of digits
            $number = intdiv($number, 10); // Remove the last digit
        }

        // Check if the sum matches the original number
        if ($sum == $originalNumber) {
            echo "<p><strong>$originalNumber</strong> is an Armstrong number.</p>";
        } else {
            echo "<p><strong>$originalNumber</strong> is not an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>
