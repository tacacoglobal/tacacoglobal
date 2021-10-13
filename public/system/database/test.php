<?php

//include '../core/TMC_String.class.php';
//include './TMC_FlatFile.class.php';
//
//$db = new TMC_FlatFile();
//$db->setPath('../../database/files/pittc/');
//$where = array('course_id//==//&&' => 1, 'schedule_date//<=' => '7/2/2017');
//$result = $db->loadFile('schedule')->getTable('schedule')->select()->where($where)->getResult();
//$db->test($result);

function valieDate($date, $format = 'd/m/Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
var_dump(valieDate('08/15/2019'));