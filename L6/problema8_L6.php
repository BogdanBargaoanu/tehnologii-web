<!DOCTYPE html>
<html>
<head>
    <title>Rezultate Admitere Facultate</title>
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
        .candidate {
            margin: 10px 0;
            padding: 8px;
            background-color: #e6f2ff;
            border-left: 4px solid #0066cc;
        }
        .admis {
            color: green;
            font-weight: bold;
        }
        .respins {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Rezultate Admitere Facultate</h2>
        
        <?php
        // Datele candidaților
        $candidates = [
            "Muresan Adrian" => [8.90, 9.30, 8.90],
            "Pop Alin" => [6.80, 9.20, 7.90],
            "Stan Marius" => [9.70, 9.50, 9.95]
        ];
        
        // Calculul mediilor și determinarea rezultatului
        foreach ($candidates as $name => $grades) {
            $average = array_sum($grades) / count($grades);
            $average = round($average, 2); // Rotunjire la 2 zecimale
            
            // Determinare status
            if ($average < 5) {
                $status = "Respins";
                $class = "respins";
            } elseif ($average >= 9) {
                $status = "Admis";
                $class = "admis";
            } else {
                $status = "Respins";
                $class = "respins";
            }
            
            // Afișare rezultat
            echo "<div class='candidate'>";
            echo "$name, $average, <span class='$class'>$status</span>;";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>