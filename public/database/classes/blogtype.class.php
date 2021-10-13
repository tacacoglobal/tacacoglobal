<?php

class blogtype  extends TMC_Object{

    //khóa chính
    public $primary = array('blogTypeId');
    //khóa ngoại
    public $foreign = array();
    //tránh trùng lặp dữ liệu
    public $unique = array('blogTypeName');
    //ràng buộc
    public $relative = array(
        'service/' => array('blog')
    );
    //mã lĩnh vực tin tức
    public $blogTypeId;
    //tên lĩnh vực tin tức
    public $blogTypeName;
    //ghi chú
    public $blogTypeMeta;

}

?>