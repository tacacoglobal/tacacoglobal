<?php

class project  extends TMC_Object{

    //khóa chính
    public $primary = array('projectId');
    //khóa ngoại
    public $foreign = array('orderId', 'userId');
    //tránh trùng lặp dữ liệu
    public $unique = array('projectName', 'projectUrl');
    //ràng buộc
    public $relative = array();
    //mã dự án
    public $projectId;
    //tên dự án
    public $projectName;
    //ngày hoàn tất
    public $projectPost;
    //liên kết demo (dành cho web, ứng dụng)
    public $projectUrl;
    //hình ảnh demo
    public $projectImage;
    //lập dự án từ hóa đơn nào
    public $orderId;
    //tài khoản lập dự án
    public $userId;

}

?>