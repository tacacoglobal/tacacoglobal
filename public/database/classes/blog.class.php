<?php

class blog  extends TMC_Object{

    //khóa chính
    public $primary = array('blogId');
    //khóa ngoại
    public $foreign = array('blogTypeId', 'userId');
    //tránh trùng lặp dữ liệu
    public $unique = array('blogTitle');
    //ràng buộc
    public $relative = array();
    //mã tin tức
    public $blogId;
    //tiêu đề tin
    public $blogTitle;
    //nội dung tin
    public $blogContent;
    //danh sách từ khóa tìm kiếm
    public $blogKeywords;
    //tóm tắt nội dung chính
    public $blogMeta;
    //hình đầu trang
    public $blogImage;
    //lượt xem
    public $blogViewer;
    //lượt thích
    public $blogLiker;
    //ngày đăng
    public $blogPost;
    //tài khoản đăng
    public $userId;
    //lĩnh vực tin tức
    public $blogTypeId;

}

?>