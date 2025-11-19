<!DOCTYPE html>
<html>
<head>
    <title>Pencari Kombinasi x, y, z</title>
</head>
<body>
    <h2>Pencari Kombinasi x, y, z</h2>
    <p>Mencari semua pasangan nilai x, y, dan z yang memenuhi persamaan: x + y + z = target</p>
    
    <form method="POST">
        <p>
            Target Jumlah (x + y + z = ?): 
            <input type="number" name="target" value="25" required>
        </p>
        
        <p>
            Nilai Minimum: 
            <input type="number" name="min_val" value="1" required>
        </p>
        
        <p>
            Nilai Maksimum: 
            <input type="number" name="max_val" value="23" required>
        </p>
        
        <button type="submit">Cari Kombinasi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target = $_POST['target'];
        $min_val = $_POST['min_val'];
        $max_val = $_POST['max_val'];
        
        $hasil = [];
        $min_x = $max_val;
        $max_x = $min_val;
        $min_y = $max_val;
        $max_y = $min_val;
        $min_z = $max_val;
        $max_z = $min_val;
        
        // Nested loop untuk mencari semua kombinasi
        for ($x = $min_val; $x <= $max_val; $x++) {
            for ($y = $min_val; $y <= $max_val; $y++) {
                for ($z = $min_val; $z <= $max_val; $z++) {
                    if ($x + $y + $z == $target) {
                        $hasil[] = ['x' => $x, 'y' => $y, 'z' => $z];
                        
                        // Update min dan max
                        if ($x < $min_x) $min_x = $x;
                        if ($x > $max_x) $max_x = $x;
                        if ($y < $min_y) $min_y = $y;
                        if ($y > $max_y) $max_y = $y;
                        if ($z < $min_z) $min_z = $z;
                        if ($z > $max_z) $max_z = $z;
                    }
                }
            }
        }
        
        echo "<hr>";
        echo "<h3>Hasil Pencarian</h3>";
        echo "<p>Target: x + y + z = " . $target . "</p>";
        echo "<p>Range nilai: " . $min_val . " sampai " . $max_val . "</p>";
        echo "<p><strong>Total kombinasi yang ditemukan: " . count($hasil) . "</strong></p>";
        
        if (count($hasil) > 0) {
            echo "<hr>";
            echo "<h4>Statistik Nilai:</h4>";
            echo "<ul>";
            echo "<li>Nilai x minimum: " . $min_x . ", maksimum: " . $max_x . "</li>";
            echo "<li>Nilai y minimum: " . $min_y . ", maksimum: " . $max_y . "</li>";
            echo "<li>Nilai z minimum: " . $min_z . ", maksimum: " . $max_z . "</li>";
            echo "</ul>";
            
            echo "<hr>";
            echo "<h4>Daftar Semua Kombinasi:</h4>";
            echo "<table border='1' cellpadding='5'>";
            echo "<tr>
                    <th>No</th>
                    <th>x</th>
                    <th>y</th>
                    <th>z</th>
                    <th>x + y + z</th>
                  </tr>";
            
            foreach ($hasil as $index => $h) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td>" . $h['x'] . "</td>";
                echo "<td>" . $h['y'] . "</td>";
                echo "<td>" . $h['z'] . "</td>";
                echo "<td>" . ($h['x'] + $h['y'] + $h['z']) . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "<hr>";
            echo "<p><strong>Jumlah penyelesaian: " . count($hasil) . "</strong></p>";
        } else {
            echo "<p><strong>Tidak ada kombinasi yang memenuhi persamaan!</strong></p>";
        }
    }
    ?>
</body>
</html>