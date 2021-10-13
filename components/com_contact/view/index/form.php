<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Thông Tin Liên Hệ | Công Ty Cổ Phần Tâm Cầu</title>

        <!-- SEO Meta-->
        <meta name="description" content="thông tin liên hệ với công ty cổ phần tâm cầu">
        <meta name="keywords" content="liên hệ tacaco, điện thoại tacaco, điện thoại công ty tâm cầu, email công ty cổ phần tâm cầu">
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
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/tacaco-icon.css">


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
                        <h2>Liên Hệ</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Liên hệ</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>

        <section class="padding-y-100 border-bottom border-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 marginTop-30">
                        <div class="card height-100p border text-center p-4 p-md-5">
                            <i class="tac-chat font-size-40 text-primary"></i>
                            <h5 class="my-4">
                                Hỗ Trợ Khách Hàng
                            </h5>
                            <p>0346.947.880</p>
                            <p>
                                Giải đáp thắc mắc của khách hàng về dịch vụ công ty
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 marginTop-30">
                        <div class="card height-100p border text-center p-4 p-md-5">
                            <i class="tac-head-set font-size-40 text-success"></i>
                            <h5 class="my-4">
                                Tư Vấn Dịch Vụ
                            </h5>
                            <p>
                                0945.261.033
                            </p>
                            <p>
                                Tư vấn giúp khách hàng chọn gói dịch vụ phù hợp nhu cầu
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 marginTop-30">
                        <div class="card height-100p border text-center p-4 p-md-5">
                            <i class="tac-email font-size-40 text-success"></i>
                            <h5 class="my-4">
                                Hỗ Trợ Qua Email
                            </h5>
                            <p>
                                info@tamcau.com
                            </p>
                            <p>
                                Giải đáp thắc mắc khách hàng thông qua email
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 marginTop-30">
                        <div class="card height-100p border text-center p-4 p-md-5">
                            <i class="tac-map font-size-40 text-success"></i>
                            <h5 class="my-4">
                                Địa Chỉ
                            </h5>
                            <p>
                                78 CMT8, Chánh Mỹ, Thủ Dầu Một, Bình Dương
                            </p>
                            <p>Liên hệ trao đổi trực tiếp tại văn phòng công ty</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 marginTop-30">
                        <div class="card height-100p border text-center p-4 p-md-5">
                            <i class="tac-repair font-size-40 text-success"></i>
                            <h5 class="my-4">
                                Hỗ Trợ Kỹ Thuật
                            </h5>
                            <p><a href="#" class="text-primary">Live Chat</a></p>
                            <p>
                                Hướng dẫn khách hàng sử dụng dịch vụ
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 marginTop-30">
                        <div class="card height-100p border text-center p-4 p-md-5">
                            <i class="tac-clock font-size-40 text-success"></i>
                            <h5 class="my-4">
                                Gia Hạn Dịch Vụ
                            </h5>
                            <p>0944.851.033</p>
                            <p>
                                Đăng ký gia hạn dịch vụ khi hết hợp đồng
                            </p>
                        </div>
                    </div>

                </div> <!-- END row-->
            </div> <!-- END container-->
        </section>

        <?php
        //menu
        $mod_router->loader('layouts', 'footer');
        ?>

        <div class="scroll-top">
            <i class="tac-angle-up"></i>
        </div>

        <script src="assets/js/vendors.bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>