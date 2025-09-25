<?php
echo "<table border='5' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr><th>Число</th><th>Квадрат</th></tr>";
for ($n = 10; $n <= 99; $n++) {
    echo "<tr><td>$n</td><td>" . ($n * $n) . "</td></tr>";
}
echo "</table>";
?>