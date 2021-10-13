<?php

class order  extends TMC_Object{

    //khóa chính
    public $primary = array('orderId');
    //khóa ngoại
    public $foreign = array('packageId', 'custommerId', 'userId');
    //tránh trùng lặp dữ liệu
    public $unique = array();
    //ràng buộc
    public $relative = array(
        'service/' => array('project')
    );
    //mã hóa đơn
    public $orderId;
    //khách hàng đăng ký
    public $custommerId;
    //gói dịch vụ
    public $packageId;
    //thời hạn hợp đồng là bao nhiêu
    public $orderHowLong;
    //đã lập dự án hay chưa
    public $orderStatus;
    //ngày lập hóa đơn
    public $orderPost;
    //tài khoản xử lý hóa đơn
    public $userId;

}

?>