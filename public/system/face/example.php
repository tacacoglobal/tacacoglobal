<?php

require_once './TMC_FaceDetection.class.php';

$face_detect = new TMC_FaceDetection('detection.dat');
$face_detect->face_detect('nguyen-van-cau.jpg');
$face_detect->toJpeg();

?>
