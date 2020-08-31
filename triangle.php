<?php

/**
 * Для значений около PHP_INT_MAX нельзя проверять суммой,
 * Проверим по теореме: Каждая сторона треугольника больше разности двух других сторон.
 * Кстати, она вытекает из первой теоремы.
 * @param int $a
 * @param int $b
 * @param int $c
 * @return bool
 */
function isValidTriangle(int $a, int $b, int $c): bool {
    //return ($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($a + $b));
    return ($a > abs($b-$c) && $b > abs($a-$c) && $c > abs($a-$b));
}

