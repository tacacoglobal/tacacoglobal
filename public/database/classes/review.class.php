<?php

class review extends TMC_Object {

    //khóa chính
    public $primary = array('reviewId');
    //khóa ngoại
    public $foreign = array('custommerId', 'packageId');
    //tránh trùng lặp dữ liệu
    public $unique = array('blogTypeName');
    //ràng buộc
    public $relative = array(
        'service/' => array('reviewContent')
    );
    //mã đánh giá
    public $reviewId;
    //nội dung đánh giá
    public $reviewContent;
    //mã gói dịch vụ
    public $packageId;
    //mã khách hàng
    public $custommerId;
    //ngày đánh giá
    public $reviewPost;

}

?>