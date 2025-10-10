<?php
echo "<h2> Задание 1 </h2>";
function calculateCircumference($radius) {
    if ($radius <= 0) {
        return "Ошибка: радиус должен быть положительным числом";
    }
    return 2 * M_PI * $radius;
}

$radius1 = 5;
$circumference1 = calculateCircumference($radius1);
echo "Радиус: $radius1<br>";
echo "Длина окружности: " . number_format($circumference1, 2) . "<br>";
?>

        <?php
        echo "<h2> Задание 2 </h2>";
        function calculateTriangleArea($sideA, $sideB, $sideC) {
            if ($sideA <= 0 || $sideB <= 0 || $sideC <= 0) {
                return 0;
            }
           
            
        }
 ?>
 <?php
function squareTr($a,$b,$c){
    if($a<=0 or $b<=0 or $c<=0){
        return 0;
    }else{
$p = ($a+ $b +$c)/2;
$s = ($p * ($p-$a)*($p-$b)*($p-$c))**0.5;
return $s;
    }}
   if  (isset($_GET['triangle']))
//echo squareTr($_GET['b'], $_GET['c']);
       ?>
        <form method="post">
            <div class="form-group">
                <label for="side_a">Сторона A:</label>
                <input type="number" id="side_a" name="side_a" step="any" min="0.1" required>
            </div>
            <div class="form-group">
                <label for="side_b">Сторона B:</label>
                <input type="number" id="side_b" name="side_b" step="any" min="0.1" required>
            </div>
            <div class="form-group">
                <label for="side_c">Сторона C:</label>
                <input type="number" id="side_c" name="side_c" step="any" min="0.1" required>
            </div>
            <input name="triangle" type="submit" value="Вычислить площадь треугольника" >
        </form>
        
        <?php echo $result; ?>
    