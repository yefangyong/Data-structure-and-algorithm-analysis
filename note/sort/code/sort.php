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

print_r(selectSort([1, 2, 6, 7, 3, 5, 4, 6, 7, 9]));