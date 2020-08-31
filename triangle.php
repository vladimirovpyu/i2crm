<?php

/**
 * Triangle check
 * @param int $a
 * @param int $b
 * @param int $c
 * @return bool
 */
function isValidTriangle(int $a, int $b, int $c): bool {
    return ($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($a + $b));
}

