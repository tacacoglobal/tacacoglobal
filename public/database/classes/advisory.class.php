<?php

class advisory extends TMC_Object{

    //khóa chính
    public $primary = array('advisoryId');
    //khóa ngoại
    public $foreign = array();
    //tránh trùng lặp dữ liệu
    public $unique = array();
    //ràng buộc
    public $relative = array();
    //mã tư vấn
    public $advisoryId;
    //họ và tên
    public $advisoryName;
    //email
    public $advisoryEmail;
    //điện thoại
    public $advisoryPhone;
    //địa chỉ
    public $advisoryAddress;
    //ghi chú
    public $advisoryNote;
    //mã gói dịch vụ
    public $packageId;

}

?>