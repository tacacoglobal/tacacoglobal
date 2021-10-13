<?php

class reply  extends TMC_Object{

    //khóa chính
    public $primary = array('replyId');
    //khóa ngoại
    public $foreign = array('commentId', 'pollerId');
    //tránh trùng lặp dữ liệu
    public $unique = array('commentDetail');
    //ràng buộc
    public $relative = array(
        'service/' => array('comment')
    );
    //mã thảo luận
    public $replyId;
    //ngày trả lời
    public $replyPost;
    //nội dung trả lời
    public $replyContent;
    //trả lời cho comment nào
    public $commentId;
    //ai là người trả lời
    public $pollerId;

}

?>