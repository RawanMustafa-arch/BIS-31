<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum of Odd Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8ee;
            padding: 30px;
        }
        h1 {
            color: #cc5500;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #d2691e;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Sum of Odd Numbers from 1 to 75</h1>

    <?php
    $sum = 0;
    $odds = [];

    for ($i = 1; $i <= 75; $i += 2) {
        $sum += $i;
        $odds[] = $i;
    }

    echo "<p>Odd numbers from 1 to 75:</p>";
    echo "<p>" . implode(", ", $odds) . "</p>";
    echo "<p>Total sum: <strong>$sum</strong></p>";
    ?>

    <a href="index.html">Back to Homepage</a>

</body>
</html>