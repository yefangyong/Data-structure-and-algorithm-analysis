<?php
/**
 * @param array $array
 * @return array
 * @Author yefy
 * @DateTime 2018-11-29
 */

/**
 * @param array $array
 * @return array
 * @Author yefy
 * @DateTime 2018-11-29
 * 冒泡排序
 */
function sortArr($array = [])
{
    $n = count($array);
    if ($n <= 1) {
        return $array;
    }
    for ($i = 0; $i < $n; $i++) {
        //标识符
        $flag = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
                $flag = true;
            }
        }
        //排好序，提前退出循环
        if (!$flag) {
            break;
        }
    }
    return $array;
}







