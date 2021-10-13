<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Nhân Sự Tacaco</title>

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

        <div class="py-5 bg-dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-white">
                        <h2>Nhân Sự</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Nhân sự</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>


        <section class="padding-y-100 border-bottom border-light">
            <div class="container">
                <div class="row isotop-filter">
                    <?php foreach ($list as $item) { ?>
                        <div class="col-lg-4 col-md-6 marginTop-30 creative">
                            <div class="media-viewer">
                                <img class="media-viewer__media" src="<?php echo image, '/staff/', $item['staffImage']; ?>" alt="<?php echo $item['staffName']; ?>">
                                <div class="media-viewer__overlay bg-black-0_7 flex-center">
                                    <p class="btn btn-success btn-sm btn-pill"><?php echo $item['staffName']; ?></p>
                                    <p class="btn btn-danger btn-sm btn-pill"><?php echo $item['levelName']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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