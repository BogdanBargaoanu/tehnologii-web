<!DOCTYPE html>
<html>
<head>
    <title>Lucrare laborator PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            border: 1px solid blue;
            padding: 10px;
            margin: 20px;
            width: 240px;
        }
        h3 {
            color: blue;
            margin-top: 0;
        }
        p {
            color: blue;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $a = 10;
        $b = "Displaying variables";
        
        echo '<p>Value of $a: ' . $a . '</p>';
        echo '<p>Type of $a: ' . gettype($a) . '</p>';
        
        echo '<p>Value of $b: ' . $b . '</p>';
        echo '<p>Type of $b: ' . gettype($b) . '</p>';
        ?>
    </div>
</body>
</html>