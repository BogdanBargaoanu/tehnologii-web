<!DOCTYPE html>
<html>
<head>
    <title>Cea mai mare notă - Candidați Admitere</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            border: 2px solid #0066cc;
            padding: 15px;
            border-radius: 5px;
            width: 500px;
            margin: 0 auto;
            background-color: #f0f8ff;
        }
        h2 {
            color: #0066cc;
            text-align: center;
        }
        .student-info {
            margin: 10px 0;
            padding: 8px;
            background-color: #e6f2ff;
            border-left: 4px solid #0066cc;
        }
        .top-student {
            margin-top: 15px;
            padding: 10px;
            background-color: #d4edda;
            border-left: 4px solid #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cea mai mare notă a candidaților</h2>
        
        <?php
        // Datele candidaților
        $candidates = [
            "Muresan Adrian" => [8.90, 9.30, 8.90],
            "Pop Alin" => [6.80, 9.20, 7.90],
            "Stan Marius" => [9.70, 9.50, 9.95]
        ];
        
        $topNote = 0;
        $topStudent = "";
        
        // Determinarea celei mai mari note pentru fiecare student
        foreach ($candidates as $name => $grades) {
            $maxGrade = max($grades);
            
            // Afișare informații pentru fiecare student
            echo "<div class='student-info'>";
            echo "Nota cea mai mare a studentului $name este $maxGrade;";
            echo "</div>";
            
            // Determinare studentul cu nota cea mai mare
            if ($maxGrade > $topNote) {
                $topNote = $maxGrade;
                $topStudent = $name;
            }
        }
        
        // Afișare studentul cu nota cea mai mare
        echo "<div class='top-student'>";
        echo "Studentul cu nota cea mai mare este $topStudent nota: $topNote;";
        echo "</div>";
        ?>
    </div>
</body>
</html>