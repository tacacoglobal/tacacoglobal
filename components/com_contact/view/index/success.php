<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Thông Báo | Công Ty Cổ Phần Tâm Cầu</title>

        <!-- SEO Meta-->
        <meta name="description" content="trang thông báo gửi thông tin liên lạc thành công">
        <meta name="keywords" content="trang thông báo gửi thông tin liên lạc thành công">
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

        <section>
            <div class="py-5 bg-light-v3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <h1>TACACO THÔNG BÁO</h1>
                        </div>
                    </div>
                </div> 
            </div>

        </section>

        <section class="padding-y-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2><i class="fas fa-check-circle text-success mr-1"></i> Gửi thông tin thành công</h2>
                        <h4 class="my-4">Cảm ơn bạn đã quan tâm đến dịch vụ của Tacaco</h4>
                        <p>
                            Chúng tôi đã nhận được thông tin cần tư vấn từ bạn. Chúng tôi sẽ liên lạc lại 
                            với bạn sớm nhất có thể để tư vấn thông tin đến bạn.
                        </p>
                    </div>
                </div> <!-- END row-->  
            </div> <!-- END container-->
        </section>
        <script type="text/javascript">
//            var delay = 10000;
//            setTimeout(function () {
//                window.location = 'index.php';
//            }, delay);
        </script>

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