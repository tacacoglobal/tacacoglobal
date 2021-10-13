<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Dịch Vụ IT | Công Ty Cổ Phần Tâm Cầu</title>

        <!-- SEO Meta-->
        <meta name="description" content="công ty cổ phần tâm cầu (gọi tắt là tacaco) là đơn vị chuyên cung cấp dịch vụ về lĩnh vực công nghệ thông tin.">
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
        //router
        $mod_router = $GLOBALS['mod_router'];

        //header
        $mod_router->loader('layouts', 'header');

        //slider
        $mod_router->loader('layouts', 'slider');

        //service
        $mod_router->loader('layouts', 'service');

        //process
        $mod_router->loader('layouts', 'process');

        //project
        $mod_router->loader('layouts', 'project');

        //marketting
        $mod_router->loader('layouts', 'marketting');

        //blog
        $mod_router->loader('layouts', 'blog');

        //review
        $mod_router->loader('layouts', 'review');

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