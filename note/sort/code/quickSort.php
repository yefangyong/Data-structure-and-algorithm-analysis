<?php
/**
 * Created by PhpStorm.
 * Date: 2018-12-6
 * Time: 12:07
 */
/**
 * @param array $array
 * @Author yefy
 * @DateTime 2018-12-6
 * 快速排序算法
 */
function quickSort(array &$array)
{
    $n = count($array);
    quickSortInternally($array, 0, $n - 1);
}

/**
 * @param array $array
 * @param $p
 * @param $r
 * @Author yefy
 * @DateTime 2018-12-6
 * 内部排序，递归算法
 */
function quickSortInternally(array &$array, $p, $r)
{
    if ($p >= $r) {
        return;
    }
    $q = partition($array, $p, $r);
    quickSortInternally($array, $p, $q - 1);
    quickSortInternally($array, $q + 1, $r);
}

/**
 * @param $array
 * @param $p
 * @param $r
 * @return mixed
 * @Author yefy
 * @DateTime 2018-12-6
 * 查找出分区的位置，空间复杂度为O(1),原地排序算法
 */
function partition(&$array, $p, $r)
{
    $pivot = $array[$r];
    $i = $p;
    for ($j = $p; $j < $r; $j++) {
        if ($array[$j] < $pivot) {
            [$array[$i], $array[$j]] = [$array[$j], $array[$i]];
            $i++;
        }
    }
    [$array[$r], $array[$i]] = [$array[$i], $array[$r]];
    return $i;
}



$a1 = [1, 4, 6, 7, 3, 5, 4];
$a2 = [2, 2, 2, 2];
$a3 = [4, 3, 2, 1];
$a4 = [5, -1, 9, 3, 7, 8, 3, -2, 9];
quickSort($a1);
print_r($a1);
quickSort($a2);
print_r($a2);
quickSort($a3);
print_r($a3);
quickSort($a4);
print_r($a4);