<?php
/**
 * Created by PhpStorm.
 * Date: 2018-12-10
 * Time: 17:30
 */

function binarySearch($array, $value, $low, $high)
{
    while ($low <= $high) {
        $mid = ($low + $high) / 2;
        if ($mid == $value) {
            return $mid;
        } elseif ($mid < $value) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return -1;
}


