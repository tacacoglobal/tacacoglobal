<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Giới Thiệu Về Công Ty Cổ Phần Tâm Cầu</title>

        <!-- SEO Meta-->
        <meta name="description" content="tổng quan, lịch sử hình thành và quá trình phát triển công ty cổ phần tâm cầu">
        <meta name="keywords" content="công ty tâm cầu, ctcp tâm cầu, công ty cp tâm cầu, tâm cầu corporation, tacaco">
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
                        <h2>Về Chúng Tôi</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Giới thiệu</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>



        <section class="padding-y-100 border-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 mb-4 mr-auto text-center">
                        <img class="wow fadeInLeft w-100 rounded" src="assets/img/layouts/gioi-thieu-cong-ty-tam-cau.jpg" alt="giới thiệu công ty cổ phần tâm cầu">
                    </div> 

                    <div class="col-lg-6">
                        <h2>
                            <span class="text-primary">Chúng Tôi</span> Là Ai?
                        </h2>
                        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
                        <p class="mb-3">
                            Được thành lập từ năm 2016, trải qua hơn 1 năm hình thành và phát triển 
                            Công ty cổ phần Tâm Cầu đã có những bước tiến phát triển không ngừng 
                            trong việc thiết kế và phát triển website cho doanh nghiệp. 
                        </p>
                        <p class="mb-3">
                            Với đội ngũ thiết kế đồ họa và kỹ sư CNTT trẻ đầy sáng tạo, tài năng 
                            và ham học hỏi. Cùng sự góp sức của các chuyên gia dày dặn kinh nghiệm 
                            về thiết kế và phát triển ứng dụng trên internet, chúng tôi tự hào mang 
                            đến cho khách hàng những website cao cấp và chuyên nghiệp, để lại ấn 
                            tượng sâu sắc cho người xem. Qua đó nâng cao khả năng cạnh tranh cho 
                            khách hàng trong lĩnh vực quảng bá tên tuổi trên internet.
                        </p>
                    </div> <!-- END col-lg-6 ml-auto-->
                </div> <!-- END row-->
            </div> <!-- END container-->
        </section>




        <?php
        if (!empty($list)) {
            ?>

            <section class="padding-y-80 bg-light-v4">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center mb-md-4">
                            <h2 class="mb-4">
                                Ban Điều Hành
                            </h2>
                            <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                        </div>
                        
                        <?php
                        foreach ($list as $item) {
                            ?>

                            <div class="col-md-4 mt-5">
                                <div class="card wow slideInUp" data-wow-delay=".1s">
                                    <img class="card-img-top" src="<?php echo image, '/staff/', $item['staffImage']; ?>" alt="<?php echo $item['staffName']; ?>">
                                    <div class="padding-30">

                                        <h2 class="h4 my-3">
                                            <?php echo $item['staffName']; ?>
                                        </h2>
                                        <p>
                                            <?php echo $item['levelName']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div> <!-- END row-->
                </div> <!-- END container-->
            </section>
        <?php } ?>


        <section class="padding-y-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2>
                            Lịch Sử Công Ty
                        </h2>
                        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40 mx-auto"></div>
                    </div>
                    <div class="col-12">
                        <div class="ec-timeline-1">
                            <div class="ec-timeline__item">
                                <div class="ec-timeline__item-left">
                                    <div class="card bg-light p-4 mr-4">
                                        <span class="text-primary font-weight-bold">2014 (Thử Nghiệm)</span>
                                        Hoạt động dưới dạng phi văn phòng được khởi xướng bởi một số sinh 
                                        viên ngành công nghệ thông tin.
                                    </div>
                                </div>
                                <div class="ec-timeline__item-right">
                                    <div class="card bg-light p-4 ml-4">
                                        <span class="text-primary font-weight-bold">2016 Công ty cổ phần Tâm Cầu [TACACO]</span>
                                        
                                        <p>
                                            Được cấp giấy phép kinh doanh bởi sở kế hoạch đầu tư 
                                            TP.HCM. Hoạt động dưới dạng văn phòng đại diện chính thức 
                                            đặt tại TP.HCM.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ec-timeline__item">
                                <div class="ec-timeline__item-left">
                                    <div class="card bg-light p-4 mr-4">
                                        <span class="text-primary font-weight-bold">
                                            2017 Trung tâm nghiên cứu và phát triển công nghệ thông tin [PITTC]</span>
                                        <p>
                                            Định hướng nghề nghiệp, bổ trợ kiến thức và kỹ năng 
                                            làm việc cho học sinh, sinh viên ngành công nghệ thông tin.
                                        </p>
                                    </div>
                                </div>
                                <div class="ec-timeline__item-right">
                                    <div class="card bg-light p-4 ml-4">
                                        <span class="text-primary font-weight-bold">2018 Trung tâm viễn thông [FPRO]</span>
                                        
                                        <p>
                                            Cung cấp thiết bị viễn thông nhập khẩu mỹ: điện thoại,
                                            laptop, linh kiện điện tử, thiết bị thông minh,...
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="ec-timeline__item">
                                <div class="ec-timeline__item-left">
                                    <div class="card bg-light p-4 mr-4">
                                        <span class="text-primary font-weight-bold">2019 Trung tâm đa truyền thông [MPRO]</span>
                                        
                                        <p>
                                            Truyền hình trực tuyến, streaming video nước ngoài, lồng tiếng, 
                                            thuyết minh phim và quảng cáo.
                                        </p>
                                    </div>
                                </div>
                                <div class="ec-timeline__item-right">
                                    <div class="card bg-light p-4 ml-4">
                                        <span class="text-primary font-weight-bold">2020 Web 3 Days - [W3D]</span>
                                        <p>
                                            Hướng dẫn xây dựng web kinh doanh trực tuyến trong 3 ngày. 
                                            Không cần có kiến thức về lập trình.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- END row-->
            </div> <!-- END container-->
        </section> <!-- END section-->
        <?php
//menu
        $mod_router->loader('layouts', 'footer');
        ?>
        <script src="assets/js/vendors.bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>