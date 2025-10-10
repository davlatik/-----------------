<?php
echo "<h2> Задание 1 </h2>";
$numbers = [15, -3, 8, 22, -7, 10, 5, -12, 18, 4];
$min_value = min($numbers);
$max_value = max($numbers);
echo "Минимальное значение: ", '<br>' ;
echo "  Значение: $min_value";
echo "Максимальный значение:";
echo "  Значение: $max_value";
?>





<?php
echo "<h2> Задание 2 </h2>";

$numbers = [2, 5, -3, 8, 1, -4, 6];
$sum = array_sum($numbers);
$product = array_product($numbers);

echo "Сумма элементов: $sum", '<br>' ;
echo "Произведение элементов: $product";
?>





<?php
echo "<h2> Задание 3 </h2>";
$numbers = [12, 8, 15, 6, 9, 11, 7];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
$count = count($numbers);
$average = $sum / $count;
echo "Среднее арифметическое: " .number_format($average, 2);
?>


<?php 



