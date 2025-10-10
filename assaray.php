<h1>Ассоциативные Массивы</h1>
<?php
$array = ['Iphone'=>'Айфон', 'Casino' => 'Казино',
'Hog 2.6' => 'Хог 2.6'];
$array['Aristarch'] ='Аристиарх';
unset($array['two']);
foreach($array as $key => $item){
    echo "<p> $key - $item  </p>", '<br>';
}
?>


<?php
echo "<h2> Задание 1 </h2>";
$array = [
    "monday" => "понедельник",
    "tuesday" => "вторник",
    "wednesday" => "среда",
    "thursday" => "четверг",
    "friday" => "пятница",
    "saturday" => "суббота",
    "sunday" => "воскресенье",
    "hello" => "привет",
    "goodbye" => "до свидания",
    "thank you" => "спасибо"
];
foreach ($array as $key => $item) {
    echo "<p> $key - $item  </p>", '<br>';
}
?>


<?php
echo "<h2> Задание 2 </h2>";
$array = [
    "monday" => "понедельник",
    "tuesday" => "вторник",
    "wednesday" => "среда",
    "thursday" => "четверг",
    "friday" => "пятница",
    "saturday" => "суббота",
    "sunday" => "воскресенье",
    "hello" => "привет",
    "goodbye" => "до свидания",
    "thank you" => "спасибо"
];
function transalte ($key, $item) {
    $englishWord = array_search($key, $item);
    
    if ($englishWord !== false) {
        return "$key - $englishWord";
    } else {
        return "$key - В словаре нет такого слова";
    }
}
$test = ["понедельник", "привет", "кракозябра", "пятница", "дом"];

foreach ($test as $item) {
    echo transalte($key, $array);
}
echo transalte("понедельник", $array);
echo transalte("кракозябра", $array);
echo transalte("спасибо", $array);
echo transalte("среда", $array);
echo transalte("машина", $array);
?>