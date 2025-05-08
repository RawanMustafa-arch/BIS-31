<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coin Toss Simulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f8ff;
            padding: 30px;
        }
        h1 {
            color: #005f99;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #0077cc;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Coin Toss Simulation</h1>

    <?php
    $heads = 0;
    $tails = 0;

    for ($i = 0; $i < 100; $i++) {
        $toss = rand(0, 1);
        if ($toss == 0) {
            $heads++;
        } else {
            $tails++;
        }
    }

    echo "<p>The coin was tossed 100 times.</p>";
    echo "<p>Heads occurred: <strong>$heads</strong> times.</p>";
    echo "<p>Tails occurred: <strong>$tails</strong> times.</p>";
    ?>

    <a href="index.html">Back to Homepage</a>

</body>
</html>