<?php
function func1($text)
{
    $tmp = rtrim($text);
    $tmp = preg_replace("/\s{2,}/", ' ', $tmp);
    $res = mb_strlen($tmp) . '<br>' . '<br>' . $tmp . '<br><br>';

    return $res;
}

function func2($text)
{
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
    $tmp2 = trim($text);
    $tmp2 = preg_replace("/\s{2,}/", ' ', $tmp2);


    $reverse = strrev($tmp2);


    $res = ($tmp2 == $reverse) ? $tmp2 . 'Является полиндромом <br>' : $reverse . '|' . 'Не является полиндромом<br><br>';

    return $res;
}

function func4($text)
{
    $words1 = explode(' ', $text);

    $word1 = 0;
    $word2 = '';

    foreach ($words1 as $word) {
        if (mb_strlen($word) > $word1) {
            $word1 = mb_strlen($word);
            $word2 = $word;
        }
    }

    return $word2;
}

function func5($text)
{
    $res = '';
    $res .= 'Количество прописных букв' . ' - ' . (mb_strlen(preg_replace('/[^A-ZА-ЯЁ]/u', '', $text))) . '<br>';
    $res .= 'Количество строчных букв' . ' - ' . (mb_strlen(preg_replace('/[^a-zа-яё]/u', '', $text))) . '<br>';

    return $res;
}