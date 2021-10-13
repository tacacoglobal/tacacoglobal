<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Kho Giao Diện | Công Ty Cổ Phần Tâm Cầu</title>

        <!-- SEO Meta-->
        <meta name="description" content="kho giao diện website, phần mềm, công trình thông minh">
        <meta name="keywords" content="giao diện website, giao diện ứng dụng phần mềm, mẫu nhà thông minh, mẫu vườn thông minh">
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
                        <h2>Kho Giao Diện</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Kho giao diện</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>


        <section class="padding-y-100 border-bottom border-light">
            <div class="container">
                <div class="row">
                    <?php
                    if (!empty($list)) {
                        foreach ($list as $item) {
                            ?>
                            <div class="col-md-4 mt-4">
                                <div class="card border border-light shadow-v3">
                                    <img class="card-img-top" src="assets/img/themes/<?php echo $item['themeImage']; ?>" alt="<?php echo $item['themeName']; ?>">
                                    <div class="card-body">
                                        <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">
                                            <?php echo $item['themePrice']; ?>$
                                        </span>
                                        <h4 class="mb-3"><a href="<?php echo $item['themeUrl']; ?>" target="_blank"><?php echo $item['themeName']; ?></a></h4>
                                        <p>
                                            <?php echo $item['themeContent']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="col-12 marginTop-70">
                            <?php
                            if (isset($paging)) {
                                $this->paging->footerCustom($url . '&', '<i class="ti-arrow-left small mr-2"></i> Trước', 'Sau <i class="ti-arrow-right small ml-2"></i>', $disableClass = 'disabled', $activeClass = 'font-weight-bold', $aClass = '', $liClass = 'page-item mx-2', $ulClass = 'pagination pagination-primary align-items-center justify-content-center');
                            }
                            ?>
                        </div>
                    <?php } else { ?>

                        <div class="col-12 text-center mt-5">
                            <div class="alert border border-success text-success bg-success-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
                                <strong class="font-size-20 d-block mb-3">
                                    <i class="ti-bell mr-2"></i> Thông Báo
                                </strong>
                                <p>
                                    Hệ thống đang cập nhật. Vui lòng quay lại sau!
                                </p>
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