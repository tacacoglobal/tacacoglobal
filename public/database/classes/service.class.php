<?php

class service  extends TMC_Object{

    //khóa chính
    public $primary = array('serviceId');
    //khóa ngoại
    public $foreign = array('serviceTypeId');
    //tránh trùng lặp dữ liệu
    public $unique = array('serviceName');
    //ràng buộc
    public $relative = array(
        'service/' => array('package')
    );
    //mã dịch vụ
    public $serviceId;
    //tên dịch vụ
    public $serviceName;
    //nội dung dịch vụ
    public $serviceContent;
    //danh sách từ khóa tìm kiếm
    public $serviceKeywords;
    //mô tả nội dung chính của dịch vụ
    public $serviceMeta;
    //đơn vị tính khi đăng ký sử dụng dịch vụ (tháng, năm)
    public $serviceUnit;
    //mã lĩnh vực hoạt động
    public $serviceTypeId;

}

?>