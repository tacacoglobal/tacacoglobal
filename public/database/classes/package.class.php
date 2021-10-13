<?php

class package extends TMC_Object {

    //khóa chính
    public $primary = array('packageId');
    //khóa ngoại
    public $foreign = array('serviceId');
    //tránh trùng lặp dữ liệu
    public $unique = array();
    //ràng buộc
    public $relative = array(
        'service/' => array('order', 'advisory', 'review')
    );
    //mã gói dịch vụ
    public $packageId;
    //tên gói dịch vụ
    public $packageName;
    //giá trị gói
    public $packagePrice;
    //nội dung dịch vụ
    public $packageContent;
    //danh sách từ khóa tìm kiếm
    public $packageKeywords;
    //mô tả nội dung chính của gói dịch vụ
    public $packageMeta;
    //mã dịch vụ
    public $serviceId;

}

?>