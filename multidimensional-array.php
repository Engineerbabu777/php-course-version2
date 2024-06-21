<?php

// 创建一个三维数组，并输出其内容。
$array = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    ),);

    // 输出数组内容
    foreach ($array as $outer) {
        foreach ($outer as $inner) {
            foreach ($inner as $value) {
                echo $value . " ";
            }
            echo "\n";
        }
        echo "\n";
    }

?>