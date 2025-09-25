<?php
echo "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse;'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td style='width: 40px; height: 40px; text-align: center;'>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>