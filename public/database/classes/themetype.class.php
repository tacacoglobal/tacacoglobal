<?php

class themetype  extends TMC_Object{
    //khóa chính
    public $primary = array('themeTypeId');
    //khóa ngoại
    public $foreign = array('serviceTypeId');
    //tránh trùng lặp dữ liệu
    public $unique = array('themeTypeName');
    //ràng buộc
    public $relative = array(
        'service/' => array('theme')
    );
    //mã lĩnh vực thiết kế giao diện
    public $themeTypeId;
    //tên lĩnh vực thiết kế giao diện (giáo dục, bán hàng)
    public $themeTypeName;
    //mô tả nội dung chính của lĩnh vực
    public $themeTypeMeta;
    //thuộc lĩnh vực hoạt động nào
    public $serviceTypeId;
}

?>