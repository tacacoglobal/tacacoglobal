<?php

class comment  extends TMC_Object{

    //khóa chính
    public $primary = array('commentId');
    //khóa ngoại
    public $foreign = array('pollerId');
    //tránh trùng lặp dữ liệu
    public $unique = array('commentContent');
    //ràng buộc
    public $relative = array(
        'service/' => array('reply')
    );
    //bình luận cho bài viết nào
    public $blogId;
    //mã người bình luận
    public $pollerId;
    //mã bình luận
    public $commentId;
    //ngày bình luận
    public $commentPost;
    //nội dung bình luận
    public $commentContent;
    //lượt thích
    public $commentLiker;
    //lượt thảo luận
    public $commentDiscuss;
    //bình luận này có thảo luận nào hay không
    public $commentStatus;

}

?>