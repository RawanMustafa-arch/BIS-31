<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paycheck Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f0ff;
            padding: 30px;
        }
        h1 {
            color: #4b0082;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #6f42c1;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Paycheck Result</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hours = $_POST["hours"];
        $rate = $_POST["rate"];

        if (is_numeric($hours) && is_numeric($rate)) {
            $salary = $hours * $rate;
            echo "<p>You worked <strong>$hours hours</strong> at a rate of <strong>\$$rate/hour</strong>.</p>";
            echo "<p>Your total paycheck is: <strong>\$$salary</strong></p>";
        } else {
            echo "<p>Please enter valid numeric values.</p>";
        }
    }
    ?>

    <a href="paycheck.html">Back to Calculator</a><br>
    <a href="index.html">Back to Homepage</a>

</body>
</html>