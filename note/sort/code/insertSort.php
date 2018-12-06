<?php
/**
 * Created by PhpStorm.
 * Date: 2018-12-6
 * Time: 12:09
 */
/**
 * @param array $array
 * @return array
 * @Author yefy
 * @DateTime 2018-12-3
 * 插入排序
 */
function insertSort($array = [])
{
    $n = count($array);
    if ($n <= 1) {
        return $array;
    }
    for ($i = 1; $i < $n; $i++) {
        $value = $array[$i];
        for ($j = $i - 1; $j <= 0; $j--) {
            if ($array[$j] < $value) {
                $array[$j + 1] = $array[$j];
            } else {
                break;
            }
        }
        $array[$j + 1] = $value;
    }
    return $array;
}