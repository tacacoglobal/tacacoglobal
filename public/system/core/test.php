<?php

include './TMC_Datetime.class.php';
$date = TMC_Datetime::getNow();

function compareNumber($num1, $num2) {
    if ($num1 > $num2)
        return 1;
    if ($num1 < $num2)
        return -1;
    else
        return 0;
}

function compareDate($date1, $date2) {
    $rs = 0;
    $part1 = explode('/', $date1);
    $part2 = explode('/', $date2);

    for ($i = count($part1) - 1; $i >= 0; $i--) {
        if ($rs == 0)
            $rs = compareNumber($part1[$i], $part2[$i]);
        else
            return $rs;
    }
}

if (compareDate('6/7/2019', '12/1/2018') == 1) {
    echo 'lịch mới';
} else {
    echo 'lịch cũ';
}