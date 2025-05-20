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
        $a = 17;
        $b = 5;
        print "$a + $b - " . ($a + $b);
        print "<br>";
        print "$a/$b - " . ($a / $b);
        print "<br>";
        print "$a%$b - " . ($a % $b);
        print "<br>";
        print floor($a / $b);
        print "<br>";
        print intdiv($a, $b);
        print "<br>";
        print $a += 2;
        print "<br>";
        print $a != $b;
        print "<br>";
        $x = 11;
        $y = "11";
        print $x == $y;
        print "(br>";
        print $x === $y;
        print "<br>";
        print ($x === $y) ? 1 : 0;
        print "<br>";
        print $x % 2 == 0 || $x > 10;
        print "<br>";
        print ($x % 2 == 0 && $x > 18) ? 1 : 0;
        print "<br>";
        print "<br>";
        $a = 13;
        print $a++;
        print "<br>";
        print $a;
        print "<br>";
        $a = 13;
        print ++$a;
        print "<br>";
        $a = 3;
        $x = $a++ + ++$a;
        print $x . "<br>";
        $l = "Laborator";
        print $l .= " PHP";
        ?>
    </div>
</body>
</html>