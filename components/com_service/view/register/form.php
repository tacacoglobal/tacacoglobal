<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Tư Vấn Dịch Vụ - Tacaco</title>

        <!-- SEO Meta-->
        <meta name="description" content="Hướng nghiệp và bổ trợ kiến thức cho sinh viên về lĩnh vực công nghệ thông tin">
        <meta name="keywords" content="trung tâm pittc, pittc center, đào tạo lập trình web, lập trình ứng dụng, lập trình ai">
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

        <section class="padding-y-100 bg-cover jarallax" data-dark-overlay="5" style="background: url(assets/img/layouts/dang-ky-dich-vu-cua-cong-ty-co-phan-tam-cau.jpg) no-repeat">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mr-auto text-white">
                        <p class="lead" style="font-size: 25px;">
                            Bạn Cần Tư Vấn
                        </p>
                        <h1 style="font-size: 40px !important;">
                            Hãy Điền Thông Tin
                        </h1>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card px-4 py-5 text-center wow zoomIn">
                            <h4>
                                Thông Tin Tư Vấn
                            </h4>

                            <form action="<?php echo $url; ?>" method="POST" class="mt-3">
                                <input type="text" name="advisoryName" class="form-control mb-3" placeholder="Họ tên">
                                <input type="text" name="advisoryAddress" class="form-control mb-3" placeholder="Địa chỉ">
                                <input type="text" name="advisoryEmail" class="form-control mb-3" placeholder="Email">
                                <input type="text" name="advisoryPhone" class="form-control mb-3" placeholder="Điện thoại">
                                <input type="hidden" name="advisoryNote" value="<?php echo $advisoryNote; ?>" class="form-control mb-3" placeholder="Điện thoại">
                                <button class="btn btn-primary btn-block mt-4" type="submit">Gửi thông tin</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- END row-->
            </div> <!-- END container-->
        </section>

        <?php
        //menu
        $mod_router->loader('layouts', 'footer');
        ?>

        <script src="assets/js/vendors.bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/myScript.js"></script>
    </body>
</html>