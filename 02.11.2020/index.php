<?php
echo "1-ое - Задание<br>";
$str = " Летом  1960 года я, в ту    пору студент факультета антропологии при
                                 Калифорнийском      университете в Лос-Анжелесе,<br>
        предпринял несколько поездок на    Юго-Запад с целью   сбора информации о
                     лекарственных растениях     используемых местными индейцами.<br>
       К одной из этих поездок относится      начало описываемых здесь событий.";
$tmp = rtrim($str);
$tmp = preg_replace("/\s{2,}/",' ',$tmp);
print_r(mb_strlen($tmp).'<br>'.'<br>'.$tmp.'<br><br>');


echo "2-ое - Задание.<br>";
foreach (explode(' ',$tmp)as $words){
    $new = mb_strlen($words);
    if($new >= 3 && $new <=5){
        echo "$words <br>";
    }
}
echo '<br>';
?>



<?php
echo "3-ие - задание.<br>";
$str1 = "     Mom washed the frame.   ";
$tmp2 = trim($str1);
$tmp2 = preg_replace("/\s{2,}/",' ',$tmp2);
print_r(mb_strlen($tmp2).'<br>'."<br>");

echo "Вводная строка<br>".$tmp2.'<br><br>';

echo 'Обратная строка ввода с использованием strrev<br>';
$reverse = strrev($tmp2);
echo $reverse.'<br><br>';

echo ($tmp2 ==$reverse)? $tmp2.'Является полиндромом <br>': $reverse.'|'.'Не является полиндромом<br><br>';


echo "4-ое - Задание<br>";

$words1 = explode(' ',$tmp2);

$word1 = 0;
$word2 ='';

foreach($words1 as $word){
    if(strlen($word)>$word1){
        $word1 = strlen($word);
        $word2 = $word;
    }
}
echo $word2.'<br><br>';

echo "5-ое задание<br>";
