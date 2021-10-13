<?php

class servicetype  extends TMC_Object{

    //khóa chính
    public $primary = array('serviceTypeId');
    //khóa ngoại
    public $foreign = array();
    //tránh trùng lặp dữ liệu
    public $unique = array('serviceTypeName');
    //ràng buộc
    public $relative = array(
        'service/' => array('service', 'themeType')
    );
    //mã lĩnh vực hoạt động
    public $serviceTypeId;
    //tên lĩnh vực hoạt động
    public $serviceTypeName;
    //ghi chú
    public $serviceTypeMeta;

}

?>