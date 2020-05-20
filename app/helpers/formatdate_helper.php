<?php
function indoDate($value)
{
    $d = substr($value, 8, 2);
    $m = substr($value, 5, 2);
    $y = substr($value, 0, 4);
    return $d . "-" . $m . "-" . $y;
}
