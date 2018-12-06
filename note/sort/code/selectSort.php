<?php
/**
 * Created by PhpStorm.
 * Date: 2018-12-6
 * Time: 12:08
 */

/**
 * @param array $array
 * @return array
 * @Author yefy
 * @DateTime 2018-12-4
 * 选择排序
 */
function selectSort($array = [])
{
    $n = count($array);
    if ($n <= 1) {
        return $array;
    }
    for ($i = 0; $i < $n; $i++) {
        $min = $i;
        for ($j = $i; $j < $n; $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $tmp = $array[$i];
            $array[$i] = $array[$min];
            $array[$min] = $tmp;
        }
    }
    return $array;
}