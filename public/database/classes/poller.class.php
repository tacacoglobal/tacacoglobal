<?php

class poller  extends TMC_Object{

    //khóa chính
    public $primary = array('pollerId');
    //khóa ngoại
    public $foreign = array();
    //tránh trùng lặp dữ liệu
    public $unique = array('pollerPhone', 'pollerEmail');
    //ràng buộc
    public $relative = array(
        'service/' => array('comment', 'reply')
    );
    //mã người đăng bình luận
    public $pollerId;
    //tên người bình luận
    public $pollerName;
    //điện thoại
    public $pollerPhone;
    //email
    public $pollerEmail;

}

?>