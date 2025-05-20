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
        $a = 8;
        print $a;
        print '<br>';
        print "$a";
        echo '<br>';
        print '$a';
        echo '<br>';
        print gettype($a);
        $a = 'laborator';
        print "<br> $a";
        print "<br>" . gettype($a) . '<br>';
        $b = false;
        print $b;
        define("LABORATOR", 'PHP');
        // Lucrari laborator Tehnologii Web
        print '<br>';
        print LABORATOR;
        ?>
    </div>
</body>
</html>