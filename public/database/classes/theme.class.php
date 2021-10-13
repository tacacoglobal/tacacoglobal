<?php

class theme  extends TMC_Object{

    //khóa chính
    public $primary = array('themeId');
    //khóa ngoại
    public $foreign = array('themeTypeId', 'userId');
    //tránh trùng lặp dữ liệu
    public $unique = array('themeUrl');
    //ràng buộc
    public $relative = array();
    //mã giao diện
    public $themeId;
    //tên giao diện
    public $themeName;
    //nội dung thiết kế
    public $themeContent;
    //liên kết demo
    public $themeUrl;
    //giá bán
    public $themePrice;
    //hình demo
    public $themeImage;
    //ngày đăng
    public $themePost;
    //thuộc lĩnh vực thiết kế giao diện nào
    public $themeTypeId;
    //tài khoản đăng tải (người thiết kế)
    public $userId;

}

?>