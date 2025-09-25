<?php
$width = 6;
$height = 4;
$borderChar = '#';
$fillChar = '.';

for ($i = 1; $i <= $height; $i++) {
    for ($j = 1; $j <= $width; $j++) {
        if ($i == 1  $i == $height  $j == 1 || $j == $width) {
            echo $borderChar;
        } else {
            echo $fillChar;
        }
    }
    echo "\n";
}
?>