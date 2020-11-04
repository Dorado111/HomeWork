<?php
echo call_user_func($_POST['funcName'], $_POST['text']);


function func1($text)
{
    $text = " Летом  1960 года я, в ту    пору студент факультета антропологии при
                                 Калифорнийском      университете в Лос-Анжелесе,<br>
        предпринял несколько поездок на    Юго-Запад с целью   сбора информации о
                     лекарственных растениях     используемых местными индейцами.<br>
       К одной из этих поездок относится      начало описываемых здесь событий.";
    $tmp = rtrim($text);
    $tmp = preg_replace("/\s{2,}/", ' ', $tmp);
    $res = mb_strlen($tmp) . '<br>' . '<br>' . $tmp . '<br><br>';

    return $res;
}

function func2($text)
{
    $text = " Летом  1960 года я, в ту    пору студент факультета антропологии при
                                 Калифорнийском      университете в Лос-Анжелесе,<br>
        предпринял несколько поездок на    Юго-Запад с целью   сбора информации о
                   лекарственных растениях     используемых местными индейцами.<br>
       К одной из этих поездок относится      начало описываемых здесь событий.";
    $text = preg_replace("/\s{2,}/", ' ', $text);
    $res = '';
    foreach (explode(' ', $text) as $words) {
        $new = mb_strlen($words);
        if ($new >= 3 && $new <= 5) {
            $res .= "$words <br>";
        }
    }

    return $res;
}

function func3($text)
{
    $text = "     Mom washed the frame.   ";
    $tmp2 = trim($text);
    $tmp2 = preg_replace("/\s{2,}/", ' ', $tmp2);
    print_r(mb_strlen($tmp2) . '<br>' . "<br>");

    echo "Вводная строка<br>" . $tmp2 . '<br><br>';

    echo 'Обратная строка ввода с использованием strrev<br>';
    $reverse = strrev($tmp2);
    echo $reverse . '<br><br>';

    $res = ($tmp2 == $reverse) ? $tmp2 . 'Является полиндромом <br>' : $reverse . '|' . 'Не является полиндромом<br><br>';

    return $res;
}

function func4($text)
{
    $text = "     Mom washed the frame.   ";
    $words1 = explode(' ', $text);

    $word1 = 0;
    $word2 = '';

    foreach ($words1 as $word) {
        if (strlen($word) > $word1) {
            $word1 = strlen($word);
            $word2 = $word;
        }
    }

    return $word2;
}

function func5($text)
{
    $text = " Летом  1960 года я, в ту    пору студент факультета антропологии при
                                 Калифорнийском      университете в Лос-Анжелесе,<br>
        предпринял несколько поездок на    Юго-Запад с целью   сбора информации о
                     лекарственных растениях     используемых местными индейцами.<br>
       К одной из этих поездок относится      начало описываемых здесь событий.";
    $res = '';
    $res .= 'Количество прописных букв' . ' - ' . (mb_strlen(preg_replace('/[^A-ZА-ЯЁ]/u','', $text))) . '<br>';
    $res .= 'Количество строчных букв' . ' - ' . (mb_strlen(preg_replace('/[^a-zа-яё]/u','', $text))) . '<br>';

    return $res;
}
