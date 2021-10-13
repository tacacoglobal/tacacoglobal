<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Quản Lý Website - Tacaco</title>

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

        <section class="padding-y-100 bg-cover jarallax" data-dark-overlay="5" style="background: url(assets/img/layouts/quan-ly-website-tam-cau-corporation.jpg) no-repeat">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mr-auto text-white">
                        <p class="lead" style="font-size: 25px">
                            Quản Lý Website
                        </p>
                        <h1 style="font-size: 40px !important;">
                            Hãy Điền Thông Tin
                        </h1>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card px-4 py-5 text-center wow zoomIn">
                            <h4>
                                Đăng Nhập Hệ Thống
                            </h4>

                            <form action="#" method="POST" class="px-lg-4">
                                <div class="input-group input-group--focus mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white">
                                            <i class="tac-email"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control border-left-0 pl-0" placeholder="Địa chỉ email">
                                </div>
                                <div class="input-group input-group--focus mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white">
                                            <i class="tac-security"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control border-left-0 pl-0" placeholder="Mật khẩu">
                                </div>

                                <div class="d-md-flex justify-content-between my-4">
                                    <label class="ec-checkbox check-sm my-2 clearfix">
                                        <input type="checkbox" name="checkbox">
                                        <span class="ec-checkbox__control"></span>
                                        <span class="ec-checkbox__lebel">Ghi nhớ mật khẩu</span>
                                    </label>
                                    <a href="index.php?com=login&act=fReset" class="text-primary my-2 d-block">Quên mật khẩu?</a>
                                </div>

                                <button class="btn btn-block btn-primary">Đăng nhập</button>
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
    </body>
</html>