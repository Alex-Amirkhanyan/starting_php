<?php
    $res = 0;
    $sum = 43;
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72 ,73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100];

    while ($res != $sum) {
        $length = count($arr)/2;
        $first_half = array_slice($arr, 0, $length);
        $second_half = array_slice($arr, $length);

        if ($sum == $first_half[count($first_half)-1]) {
            $res = $sum;
            echo $res;
        }elseif($sum <  $first_half[count($first_half)-1]) {
            $arr = $first_half;
        }elseif($sum == $second_half[0]) {
            $res = $sum;
            echo $res;
        }elseif($sum > $second_half[0]) {
            $arr = $second_half;
        }
    }