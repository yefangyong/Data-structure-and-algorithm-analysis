<?php
/**
 * Created by PhpStorm.
 * Date: 2018-12-6
 * Time: 12:08
 */
/**
 * @param $array
 * @param $p
 * @param $r
 * @return array
 * @Author yefy
 * @DateTime 2018-12-5
 * 归并排序
 */
function mergeSort($array, $p, $r)
{
    if ($p >= $r) {
        return [$array[$r]];
    }
    $q = (int)(($p + $r) / 2);
    $left = mergeSort($array, $p, $q);
    $right = mergeSort($array, $q + 1, $r);
    $result = merge($left, $right);
    return $result;
}

/**
 * @param $leftArr
 * @param $rightArr
 * @return array
 * @Author yefy
 * @DateTime 2018-12-6
 * 合并两个数组，归并
 */
function merge($leftArr, $rightArr)
{
    $tmp = [];
    $i = 0;
    $j = 0;
    $leftLength = count($leftArr);
    $rightLength = count($rightArr);
    do {
        if ($leftArr[$i] <= $rightArr[$j]) {
            $tmp[] = $leftArr[$i++];
        } else {
            $tmp[] = $rightArr[$j++];
        }
    } while ($i < $leftLength && $j < $rightLength);

    $start = $i;
    $end = $leftLength;
    $copyArr = $leftArr;
    if ($j < $rightLength) {
        $start = $j;
        $end = $rightLength;
        $copyArr = $rightArr;
    }
    for (; $start < $end; $start++) {
        $tmp[] = $copyArr[$start];
    }
    return $tmp;
}

//测试用例
$arr = [2, 10, 6, 8, 3, 5, 4, 1, 7, 9];
print_r($arr);
$p = 0;
$length = count($arr);
$r = $length - 1;
$result = mergeSort($arr, $p, $r);
print_r($result);