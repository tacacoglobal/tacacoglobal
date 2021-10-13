<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Ứng Tuyển <?php echo $one_item['candidateName']; ?> | Công Ty Cổ Phần Tâm Cầu</title>

        <!-- SEO Meta-->
        <meta name="description" content="Ứng Tuyển <?php echo $one_item['candidateName']; ?> tại công ty cổ phần tâm cầu">
        <meta name="keywords" content="<?php echo $one_item['candidateName']; ?>">
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
                        <h2>Ứng Tuyển</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Tuyển dụng</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>



        <section class="padding-y-100 bg-light-v4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="card padding-30 shadow-v1 marginTop-30">
                            <div class="alert border border-success text-success bg-success-0_1 px-4 py-3 alert-dismissible fade show" role="alert">
                                <strong class="font-size-20 d-block mb-3">
                                    <i class="ti-check mr-2"></i> CÔNG VIỆC CHÍNH
                                </strong>
                                <p>
                                    <?php echo $one_item['candidateMeta']; ?>
                                </p>
                            </div>

                            <div class="mb-5">
                                <?php echo $one_item['candidateContent']; ?>
                            </div>

                            <ul class="list-inline">
                                <li class="list-inline-item">Hết hạn: <?php echo $one_item['candidateExpire']; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="card padding-30 shadow-v1  marginTop-30">
                            <h4 class="mb-3">Thông tin</h4>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="fas fa-map-marker-alt mr-1"></i> <span class="font-weight-semiBold">Địa điểm:</span> <br>
                                    <?php
                                    $address = explode(',', $one_item['branchAddress']);
                                    echo $address[count($address) - 1];
                                    ?>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-briefcase mr-1"></i> <span class="font-weight-semiBold">Loại hình:</span> <br>
                                    Toàn thời gian
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-dollar-sign mr-1"></i> <span class="font-weight-semiBold">Lương: </span> <br> 
                                    Theo năng lực 
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-graduation-cap"></i> <span class="font-weight-semiBold">Trình độ:</span> <br>
                                    Đại học
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-flask mr-1"></i> <span class="font-weight-semiBold">Kinh nghiệm:</span> <br>
                                    Tối thiểu 1 năm
                                </li>
                            </ul>
                        </div>
                        <div class="card padding-30 shadow-v1  marginTop-30">
                            <h4 class="mb-3">Thông tin trung tâm</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <span class="font-weight-semiBold">Địa chỉ:</span> <?php echo $one_item['branchAddress']; ?>
                                </li>
                                <li>
                                    <span class="font-weight-semiBold">Lĩnh vực:</span> <a href="#">Công nghệ</a>
                                </li>
                                <li>
                                    <span class="font-weight-semiBold">Điện thoại:</span> <?php echo $one_item['branchPhone']; ?>
                                </li>
                                <li>
                                    <span class="font-weight-semiBold">Email:</span> <a href="#">td@tamcau.com</a>
                                </li>
                                <li>
                                    <span class="font-weight-semiBold">Website:</span> <a href="#">tamcau.com</a>
                                </li>
                            </ul>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-facebook iconbox iconbox-xs">
                                        <i class="tac-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-twitter iconbox iconbox-xs">
                                        <i class="tac-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-google-plus iconbox iconbox-xs">
                                        <i class="tac-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- END row-->
            </div> <!-- END container-->
        </section>






        <section class="padding-y-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto text-center">
                        <h2>
                            Ứng Tuyển Vị Trí Này
                        </h2>
                        <div class="width-3rem height-4 rounded bg-primary mx-auto mb-4"></div>
                        <p>
                            Hãy chuẩn bị trước hồ sơ, CV. Chúng tôi sẽ liên hệ với bạn ngay khi có thể.
                        </p>
                    </div>
                    <div class="col-lg-9 mx-auto mt-5">
                        <form class="row" action="#" method="POST">
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control rounded-pill" placeholder="Họ và tên" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control rounded-pill" placeholder="Địa chỉ">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="email" class="form-control rounded-pill" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control rounded-pill" placeholder="Điện thoại">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control rounded-pill" placeholder="Trình độ">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control rounded-pill" placeholder="Chuyên ngành">
                            </div>
                            <div class="col-12 mb-4">
                                <textarea type="text" class="form-control rounded-pill" rows="5" placeholder="Thông tin khác"></textarea>
                            </div>
                            <div class="col-12 mb-5 text-center">
                                <button class="btn btn-primary">Gửi thông tin</button>
                            </div>
                        </form>
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