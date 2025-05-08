<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Values Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef8f4;
            padding: 30px;
        }
        h1 {
            color: #00695c;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #00796b;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Random Values Generator</h1>

    <?php
    $a = rand(1, 27);
    $b = rand(1, 178);
    $c = rand(1, 600);

    echo "<p>Random number between 1 and 27: <strong>$a</strong></p>";
    echo "<p>Random number between 1 and 178: <strong>$b</strong></p>";
    echo "<p>Random number between 1 and 600: <strong>$c</strong></p>";
    ?>

    <a href="index.html">Back to Homepage</a>

</body>
</html>