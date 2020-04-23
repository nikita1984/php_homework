<?php
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций (
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

/** Решение */
// Скопируем функции из пункта 3

function summ($arg1, $arg2) {
    return ($arg1 + $arg2);
    }


function difference($arg1, $arg2) {
    return ($arg1 - $arg2);
}

function multiplication($arg1, $arg2) {
    return ($arg1 * $arg2);
}

function division($arg1, $arg2) {
    if ($arg2 === 0) {
        echo 'На ноль делить нельзя';
    } else { 
        return ($arg1 / $arg2);
    }
}

// Объявим функцию mathOperation
function mathOperation($arg1, $arg2, $operation) {
    // Применим оператор switch для указания функции-обработчика в зависимости от выбранной матем. операции
    switch ($operation) {
        case 'summ':
            return summ($arg1, $arg2);
            break;
        case 'difference':
            return difference($arg1, $arg2);
            break;
        case 'multiplication':
            return multiplication($arg1, $arg2);
            break;
        case 'division':
            return division($arg1, $arg2);
            break;
    }
}

// Протестируем результат
print (mathOperation(10, 5, 'summ')); print ("<br>");
print (mathOperation(10, 5, 'difference')); print ("<br>");
print (mathOperation(10, 5, 'multiplication')); print ("<br>");
print (mathOperation(10, 5, 'division')); print ("<br>");