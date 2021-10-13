<?php

class custommer extends TMC_Object {

    //khóa chính
    public $primary = array('custommerId');
    //khóa ngoại
    public $foreign = array();
    //tránh trùng lặp dữ liệu
    public $unique = array('custommerPhone', 'custommerEmail');
    //ràng buộc
    public $relative = array(
        'service/' => array('order', 'review')
    );
    //mã khách hàng
    public $custommerId;
    //tên khách hàng
    public $custommerName;
    //địa chỉ
    public $custommerAddress;
    //email
    public $custommerEmail;
    //email
    public $custommerPhone;

}

?>