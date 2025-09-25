<?php
$s = 0;
if(isset($_GET)){
     $number = $_GET['number'];
     $s = $number**2;
}?>
?>
<!DOCTYPE htal>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta nane="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <h1>Решение задач условием</h1>
    <h2>Площадь квадрата</h2>
    <form action= "">
        <р>Введите сторону квадрата: <input type= "text" name= "number"></p>
        <p><input type ="submit" valu="Отправить"></р>
</form>
<p><?php echo  "Площадь квадрата: $s"; ?></р>
</body>
</html>