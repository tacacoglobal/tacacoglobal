<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title><?php echo $item['courseName']; ?> - PITTC</title>

        <!-- SEO Meta-->
        <meta name="description" content="<?php echo $item['courseMeta']; ?>">
        <meta name="keywords" content="<?php echo $item['courseKeywords']; ?>">
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
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/fonts/themify-icons/css/themify-icons.css">


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
                        <h2>Nội dung khóa học</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Đào tạo</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>

        <section class="paddingBottom-100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 marginTop-30">
                        <h1>
                            <?php echo $item['courseName']; ?>
                        </h1>

                        <div class="card padding-30 shadow-v3 mt-3">
                            <h4>
                                Thông tin khóa học
                            </h4>
                            <ul class="list-inline mb-0 mt-2">
                                <li class="list-inline-item my-2 pr-md-4">
                                    <i class="ti-headphone small text-primary"></i>
                                    <span class="ml-2">Hình thức: <?php echo ($item['courseOnline'] == 'direct' ? 'Trực tiếp' : 'Trực tiếp | Online'); ?></span>
                                </li>
                                <li class="list-inline-item my-2 pr-md-4">
                                    <i class="ti-time small text-primary"></i>
                                    <span class="ml-2">Thời gian: <?php echo $item['courseTime'], ' tháng'; ?></span>
                                </li>
                                <li class="list-inline-item my-2 pr-md-4">
                                    <i class="ti-crown small text-primary"></i>
                                    <span class="ml-2">Giảm giá: <?php echo '-', $item['courseSaleOff'], '%'; ?></span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12 mt-4">
                            <ul class="nav tab-line tab-line tab-line--3x border-bottom mb-5" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabDescription" role="tab" aria-selected="true">
                                        Mô tả
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabCurriculum" role="tab" aria-selected="true">
                                        Nội dung
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabReviews" role="tab" aria-selected="true">
                                        Đánh giá
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabDescription" role="tabpanel">
                                    <?php echo $item['courseMeta']; ?>
                                </div> <!-- END tab-pane-->

                                <div class="tab-pane fade" id="tabCurriculum" role="tabpanel">
                                    <?php echo $item['courseContent']; ?>
                                </div> <!-- END tab-pane -->


                                <div class="tab-pane fade" id="tabReviews" role="tabpanel">
                                    <h4 class="mb-4"> 
                                        Học viên đánh giá
                                    </h4>

                                    <div class="row px-0 align-items-center border p-4">
                                        <div class="col-md-4 text-center">
                                            <h1 class="display-4 text-primary mb-0">
                                                4.70
                                            </h1>
                                            <p class="my-2">
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                            </p>
                                            <p class="mb-0">
                                                Trung bình
                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="width-7rem text-light d-none d-sm-block mr-3">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                </div>
                                                <div class="progress flex-auto mr-3" style="height:10px">
                                                    <div class="progress-bar bg-primary" style="width:100%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                                                </div>
                                                <span>90%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="width-7rem text-light d-none d-sm-block mr-3">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="progress flex-auto mr-3" style="height:10px">
                                                    <div class="progress-bar bg-primary" style="width:80%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                                                </div>
                                                <span>87%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="width-7rem text-light d-none d-sm-block mr-3">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="progress flex-auto mr-3" style="height:10px">
                                                    <div class="progress-bar bg-primary" style="width:60%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                                                </div>
                                                <span>34%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="width-7rem text-light d-none d-sm-block mr-3">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="progress flex-auto mr-3" style="height:10px">
                                                    <div class="progress-bar bg-primary" style="width:40%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                                                </div>
                                                <span>12%</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="width-7rem text-light d-none d-sm-block mr-3">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="progress flex-auto mr-3" style="height:10px">
                                                    <div class="progress-bar bg-primary" style="width:10%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                                                </div>
                                                <span>2%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row border-bottom mx-0 py-4 mt-4">
                                        <div class="col-md-4 my-2 media">
                                            <img class="iconbox iconbox-xl" src="assets/img/avatar/4.jpg" alt="">
                                            <div class="media-body ml-4">
                                                <small class="text-gray">7 min ago</small>
                                                <h6>
                                                    Anthony Forsey
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-md-8 my-2">
                                            <p>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                            </p>
                                            <p class="font-size-18">
                                                Awesome course
                                            </p>
                                            <p>
                                                Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                                            </p>
                                        </div>
                                    </div> <!-- END row-->

                                    <div class="row border-bottom mx-0 py-4 mt-4">
                                        <div class="col-md-4 my-2 media">
                                            <img class="iconbox iconbox-xl" src="assets/img/avatar/5.jpg" alt="">
                                            <div class="media-body ml-4">
                                                <small class="text-gray">1 mon ago</small>
                                                <h6>
                                                    Justin Nam
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-md-8 my-2">
                                            <p class="text-light">
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                            <p class="font-size-18">
                                                Test review lol
                                            </p>
                                            <p>
                                                Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty.
                                            </p>
                                        </div>
                                    </div> <!-- END row-->

                                    <div class="row border-bottom mx-0 py-4 mt-4">
                                        <div class="col-md-4 my-2 media">
                                            <div class="iconbox iconbox-xl border">
                                                MD
                                            </div>
                                            <div class="media-body ml-4">
                                                <small class="text-gray">3 Mon ago</small>
                                                <h6>
                                                    Murir Dokan
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-md-8 my-2">
                                            <p>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                            </p>
                                            <p class="font-size-18">
                                                This is a title of review. the developer suffer from lot's of vitamin. what about you?
                                            </p>
                                            <p>
                                                Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                                            </p>
                                        </div>
                                    </div> <!-- END row-->


                                    <div class="row border-bottom mx-0 py-4 mt-4">
                                        <div class="col-md-4 my-2 media">
                                            <img class="iconbox iconbox-xl" src="assets/img/avatar/6.jpg" alt="">
                                            <div class="media-body ml-4">
                                                <small class="text-gray">1 year ago</small>
                                                <h6>
                                                    John Doe
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-md-8 my-2">
                                            <p>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                            </p>
                                            <p class="font-size-18">
                                                Best course ever
                                            </p>
                                            <p>
                                                Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                                                Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                                            </p>
                                        </div>
                                    </div> <!-- END row-->
                                    <div class="text-center mt-5">
                                        <a href="#" class="btn btn-primary btn-icon">
                                            <i class="ti-reload mr-2"></i>
                                            Load More
                                        </a>
                                    </div>
                                </div> <!-- END tab-pane -->

                            </div> <!-- END tab-content-->
                        </div> <!-- END col-12 -->
                    </div> <!-- END col-lg-9 -->

                </div> <!-- END row-->
            </div> <!-- END container-->
        </section>

        <?php
        //menu
        $mod_router->loader('layouts', 'footer');
        ?>

        <div class="scroll-top">
            <i class="ti-angle-up"></i>
        </div>

        <script src="assets/js/vendors.bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>