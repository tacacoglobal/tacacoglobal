<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title><?php echo $item['blogTitle']; ?></title>

        <!-- SEO Meta-->
        <meta name="description" content="<?php echo $item['blogTitle']; ?>">
        <meta name="keywords" content="<?php echo $item['blogTitle']; ?>">
        <meta name="author" content="tacaco">

        <!-- viewport scale-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


        <!-- Favicon and Apple Icons-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
        <link rel="shortcut icon" href="assets/img/favicon/114x114.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/favicon/96x96.png">


        <!--Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">


        <!-- Icon fonts -->
        <link href="assets/fonts/fontawesome/css/tacaco-icon.css" rel="stylesheet"/>


        <!-- stylesheet-->    
        <link rel="stylesheet" href="assets/css/vendors.bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>

        <?php
        $mod_router = $GLOBALS['mod_router'];

        //router
        $mod_router = $GLOBALS['mod_router'];

        //header
        $mod_router->loader('layouts', 'header');
        ?>

        <div class="py-5 bg-dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-white">
                        <h2>Tin tức</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Tin tức</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>



        <section class="pt-5 paddingBottom-150 bg-light-v2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mt-4">

                        <div class="card">
                            <img class="card-img-top" src="assets/img/850x500/1.jpg" alt="">

                            <div class="card-body">
                                <h2 class="my-4">
                                    <?php echo $item['blogTitle']; ?>
                                </h2>

                                <div class="media align-items-center justify-content-between mb-5">
                                    <div class="media align-items-center">
                                        <img class="iconbox mr-3" src="assets/img/avatar/1.jpg">
                                        <div class="media-body">
                                            <a class="text-primary" href="#">Alex</a>
                                            24 Feb, 2018 - 
                                            <a class="text-primary" href="#">
                                                in Programming
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-gray">
                                        <span class="d-inline-flex align-items-center"> 
                                            <i class="ti-eye mr-1"></i> <?php echo $item['blogViewer']; ?>
                                        </span>
                                        <span class="d-inline-flex align-items-center ml-2"> 
                                            <i class="ti-heart mr-1"></i> <?php echo $item['blogLiker']; ?> 
                                        </span>
                                    </div>
                                </div>

                                <?php echo $item['blogContent']; ?>

                            </div> <!-- END card-body-->
                        </div> <!-- END card-->

                        <div class="card shadow-v5 mt-5 padding-40">
                            <div class="card shadow-v5 mb-5">
                                <div class="media">
                                    <div class="media-body">
                                        <h4>
                                            Danh sách bình luận
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <ol class="list-unstyled comments-area">
                                <li>

                                    <div class="media mb-5">
                                        <img class="iconbox iconbox-lg mr-3" src="assets/img/avatar/5.jpg" alt="">
                                        <div class="media-body">
                                            <a href="#" class="float-right btn btn-outline-primary btn-pill btn-sm">
                                                <i class="ti-back-right"></i> REPLY
                                            </a>
                                            <h4 class="h5 mb-0">
                                                Randy Orton
                                            </h4>
                                            <p class="text-gray">
                                                August 12, 2017
                                            </p>
                                            <p>
                                                Business and Finance Sequitur mutatin was onem consue ktudium. Investiga tiones demonstr aver unt lectores legere me lius quod kqua legunt saepius.
                                            </p>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>
                                            <div class="media mb-5">
                                                <img class="iconbox iconbox-lg mr-3" src="assets/img/avatar/4.jpg" alt="">
                                                <div class="media-body">
                                                    <a href="#" class="float-right btn btn-outline-primary btn-pill btn-sm">
                                                        <i class="ti-back-right"></i> REPLY
                                                    </a>
                                                    <h4 class="h5 mb-0">
                                                        Randy Orton
                                                    </h4>
                                                    <p class="text-gray">
                                                        August 12, 2017
                                                    </p>
                                                    <p>
                                                        Business and Finance Sequitur mutatin was onem consue ktudium. Investiga tiones demonstr aver unt lectores legere me lius quod kqua legunt saepius.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </li>
                                <li>

                                    <div class="media">
                                        <img class="iconbox iconbox-lg mr-3" src="assets/img/avatar/6.jpg" alt="">
                                        <div class="media-body">
                                            <a href="#" class="float-right btn btn-outline-primary btn-pill btn-sm">
                                                <i class="ti-back-right"></i> REPLY
                                            </a>
                                            <h4 class="h5 mb-0">
                                                Randy Orton
                                            </h4>
                                            <p class="text-gray">
                                                August 12, 2017
                                            </p>
                                            <p>
                                                Business and Finance Sequitur mutatin was onem consue ktudium. Investiga tiones demonstr aver unt lectores legere me lius quod kqua legunt saepius.
                                            </p>
                                        </div>
                                    </div>

                                </li>
                                <li class="text-center mt-5">
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="ti-reload mr-2"></i> Load More
                                    </a>
                                </li>
                            </ol>
                        </div>



                        <div class="card shadow-v5 mt-5 padding-40">
                            <h4>
                                Bình luận bài viết
                            </h4>
                            <p>
                                Email của bạn sẽ không bị công khai. Các ô có dấu * là thông tin bắt buộc nhập.
                            </p>
                            <form action="#" method="POST">
                                <div class="row mt-4">
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Họ và tên *">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Địa chỉ email *">
                                    </div>
                                </div>
                                <textarea class="form-control mb-4" rows="5" placeholder="Nội dung bình luận *"></textarea>
                                <button class="btn btn-primary">Gửi đi</button>
                            </form>
                        </div>



                    </div> <!-- END col-lg-9 -->

                    <aside class="col-lg-3 mt-4"> 
                        <?php if (!empty($type)) { ?>
                            <div class="widget">
                                <h2 class="widget-title">
                                    Danh mục tin
                                </h2>
                                <ul>
                                    <?php foreach ($type as $ty) { ?>
                                        <li><a href="index.php?com=blog&act=getByType&blogTypeId=<?php echo $ty['blogTypeId']; ?>"><?php echo $ty['blogTypeName']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div> <!-- END widget--> 
                        <?php } ?>

                        <div class="widget">
                            <h2 class="widget-title">
                                Tin mới nhất
                            </h2>
                            <?php foreach ($lastest as $las) { ?>
                                <div class="mb-4">
                                    <a href="index.php?com=blog&act=view&blogId=<?php echo $las['blogId']; ?>">
                                        <img src="assets/img/blog/recent/1.jpg" alt="<?php echo $las['blogTitle']; ?>">
                                    </a>
                                    <h2 class="font-size-16 mt-2">
                                        <a href="index.php?com=blog&act=view&blogId=<?php echo $las['blogId']; ?>">
                                            <?php echo $las['blogTitle']; ?>
                                        </a>
                                    </h2>
                                </div>
                            <?php } ?>
                        </div> <!-- END widget-->

                        <div class="widget widget_tag_cloud">
                            <h2 class="widget-title">
                                Từ khóa tìm kiếm
                            </h2>
                            <ul>
                                <?php
                                $keywords = explode(',', $item['blogKeywords']);
                                foreach ($keywords as $ind => $word) {
                                    ?>
                                    <li><a href="#"><?php echo $word; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div> <!-- END widget--> 

                        <div class="widget">
                            <h2 class="widget-title">
                                Tin liên quan
                            </h2>

                            <?php foreach ($relative as $rel) { ?>
                                <div class="mb-4">
                                    <a href="index.php?com=blog&act=view&blogId=<?php echo $las['blogId']; ?>">
                                        <img src="assets/img/blog/recent/1.jpg" alt="<?php echo $rel['blogTitle']; ?>">
                                    </a>
                                    <h2 class="font-size-16 mt-2">
                                        <a href="index.php?com=blog&act=view&blogId=<?php echo $las['blogId']; ?>">
                                            <?php echo $rel['blogTitle']; ?>
                                        </a>
                                    </h2>
                                </div>
                            <?php } ?>

                        </div> <!-- END widget-->

                        <div class="widget">
                            <h2 class="widget-title">
                                Theo dõi kênh
                            </h2>
                            <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
                                <i class="ti-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
                                <i class="ti-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-light iconbox hover:bg-primary text-gray m-1">
                                <i class="ti-youtube"></i>
                            </a>
                        </div> <!-- END widget--> 

                    </aside> <!-- END col-lg-3 -->
                </div> <!-- END row-->
            </div> <!-- END container-->
        </section>  <!-- END section -->

        <?php
        //menu
        $mod_router->loader('layouts', 'footer');
        ?>

        <script src="assets/js/vendors.bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>