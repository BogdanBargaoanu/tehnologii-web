<!DOCTYPE html>
<html>
<head>
    <title>Calificative Studenți - Complemente de Programare</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            border: 2px solid #0066cc;
            padding: 15px;
            border-radius: 5px;
            width: 400px;
            margin: 0 auto;
            background-color: #f0f8ff;
        }
        h2 {
            color: #0066cc;
            text-align: center;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            background-color: #e6f2ff;
            border-left: 4px solid #0066cc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #0066cc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #0066cc;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calificative Studenți</h2>
        
        <?php
        // Definirea intervalelor și calificativelor
        $grade_ranges = [
            ['min' => 9.80, 'max' => 10.00, 'calificativ' => 'E', 'mesaj' => 'Excelent'],
            ['min' => 8.30, 'max' => 9.80, 'calificativ' => 'B', 'mesaj' => 'Bine'],
            ['min' => 6.50, 'max' => 8.30, 'calificativ' => 'S', 'mesaj' => 'Suficient'],
            ['min' => 5.00, 'max' => 6.50, 'calificativ' => 'I', 'mesaj' => 'Insuficient'],
            ['min' => 0.00, 'max' => 5.00, 'calificativ' => 'R', 'mesaj' => 'Repetă materia']
        ];
        
        // Nota pentru care afișăm calificativul
        $nota = 9.50;
        
        // Determinarea calificativului
        $calificativ = '';
        $mesaj = '';
        
        foreach ($grade_ranges as $range) {
            if ($nota > $range['min'] && $nota <= $range['max']) {
                $calificativ = $range['calificativ'];
                $mesaj = $range['mesaj'];
                break;
            }
        }
        
        // Afișarea rezultatului
        echo "<div class='result'>";
        echo "<p><strong>Nota:</strong> $nota</p>";
        echo "<p><strong>Calificativ:</strong> $calificativ</p>";
        echo "<p><strong>Mesaj:</strong> $mesaj</p>";
        echo "</div>";
        
        // Afișarea tabelului cu toate intervalele
        echo "<h3>Intervale de note și calificative:</h3>";
        echo "<table>";
        echo "<tr><th>Interval</th><th>Calificativ</th><th>Mesaj</th></tr>";
        
        foreach ($grade_ranges as $range) {
            $interval = $range['min'] . " - " . $range['max'];
            echo "<tr>";
            echo "<td>$interval</td>";
            echo "<td>{$range['calificativ']}</td>";
            echo "<td>{$range['mesaj']}</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        ?>
    </div>
</body>
</html>