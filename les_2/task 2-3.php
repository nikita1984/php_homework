<?php
// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
// Обязательно использовать оператор return. В делении проверьте деление на 0 и верните текст ошибки.

/** Решение */
// Объявим функции

function summ($a, $b) {
    return ($a + $b);
    }


function difference($a, $b) {
    return ($a - $b);
}

function multiplication($a, $b) {
    return ($a * $b);
}

function division($a, $b) {
    if ($b === 0) {
        echo 'На ноль делить нельзя';
    } else { 
        return ($a / $b);
    }
}

// Отобразим результат функции при передаче им переменных со значениями 10 и 5
print (summ(10, 5)); print ("<br>");
print (difference(10, 5)); print ("<br>");
print (multiplication(10, 5)); print ("<br>");
print (division(10, 5)); print ("<br>");
// Проверим вывод ошибки при делении на ноль
print (division(10, 0)); print ("<br>");
