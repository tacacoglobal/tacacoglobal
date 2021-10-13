<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">

        <!-- Title-->
        <title>Câu Hỏi Thường Gặp | Công Ty Cổ Phần Tâm Cầu</title>

        <!-- SEO Meta-->
        <meta name="description" content="danh sách các câu hỏi mà khách hàng thường hay thắc mắc">
        <meta name="keywords" content="câu hỏi thường gặp, thắc mắc của khách hàng, hỗ trợ khách hàng">
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
                        <h2>Câu Hỏi Thường Gặp</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end bg-transparent">  
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li> 
                            <li class="breadcrumb-item">
                                <a href="#">Thắc mắc</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>



        <section class="border-bottom wow fadeIn">
            <div class="padding-y-100 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <div id="accordion-1" class="accordion-style-1">

                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-1" class="accordion__title h6 p-4 px-md-5 rounded" data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Trang web là gì?
                                    </a>
                                    <div id="acc-1" class="collapse show" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Website là một trang thông tin với mục đích là để giới thiệu, 
                                                cập nhật những thông tin về các doanh nghiệp, sản phẩm, hoạt động 
                                                cũng như tin tức, chia sẻ bí quyết,… để phát triển thương hiệu
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->

                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-2" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Web bán hàng trực tuyến là gì?
                                    </a>
                                    <div id="acc-2" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Là trang thông tin điện tử dành cho cá nhân, tổ chức trưng bày các sản phẩm, 
                                                dịch vụ mà họ muốn tiếp cận với khách hàng để từ đó đi đến thao tác mua bán 
                                                và thanh toán ngay tại trang web này.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->

                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-3" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Làm sao để sử dụng dịch vụ của Tacaco?
                                    </a>
                                    <div id="acc-3" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Bạn có thể đăng ký tư vấn sử dụng dịch của TACACO ngay trên 
                                                website này hoặc nếu bạn không rành về máy tính có thể liên 
                                                hệ với chúng tôi qua Hotline [0945.261.033].
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->


                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-4" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Starter | Enterprice | Professional nên sử dụng gói nào?
                                    </a>
                                    <div id="acc-4" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Sự khác nhau giữa 3 gói dịch vụ này được thể hiện ngay tại 
                                                phần bảng giá website. Quý khách hàng có thể thảm khảo 
                                                <a href="index.php?com=service&act=price" class="text-primary" target="_blank">tại 
                                                    đây</a> để chọn gói dịch vụ phù hợp với mình.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->

                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-5" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Gói dịch vụ Custom có gì đặc biệt?
                                    </a>
                                    <div id="acc-5" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Gói custom của web doanh nghiệp và web bán hàng được thiết 
                                                kế dành cho các nhu cầu đặc biệt của quý khách giúp phục vụ 
                                                tối đa nhu cầu khách hàng giúp thực hiện việc quản lý tài 
                                                nguyên, sản phẩm thậm chí là chiến lược marketing theo yêu 
                                                cầu để tối ưu nhất trong quá trình kinh doanh của quý khách. 
                                                Quý khách có thể thảm khảo 
                                                <a href="index.php?com=service&act=price" target="_blank" class="text-primary">tại 
                                                    đây</a> để chọn gói dịch vụ phù 
                                                hợp với mình.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->


                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-6" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Chương trình chăm sóc khách hàng thế nào?
                                    </a>
                                    <div id="acc-6" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Ngoài những tiêu chuẩn mà gói dịch vụ cung cấp một số gói 
                                                dịch vụ cao cấp được hỗ trợ thêm về mặt chiến lược kinh 
                                                doanh và nhiều ưu đãi dành cho khách hàng. Toàn bộ các 
                                                gói dịch vụ đều thực hiện đúng cam kết như đã nêu trong 
                                                phần liệt kê. Tuy nhiên đối với một số dịch vụ cao cấp 
                                                khách hàng sẽ được ưu tiên hơn về mặt hỗ trợ cũng như 
                                                tài nguyên cung cấp cho các dịch vụ.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->


                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-7" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Tôi có một shop nhỏ thì nên chọn gói dịch vụ nào?
                                    </a>
                                    <div id="acc-7" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Với quy mô chỉ là cửa hàng nhỏ, quý khách có thể chọn 
                                                gói Starter để bắt cho công việc kinh doaenh trực tuyến 
                                                của mình. Chúng tôi sẽ tư vấn cho quý khách miễn phí 
                                                về chiến lược và mẹo vặt để có được đơn hàng.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->

                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-8" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Đăng ký dịch vụ mất bao lâu mới sử dụng được?
                                    </a>
                                    <div id="acc-8" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Sau khi bạn gửi đơn đăng ký tư vấn hoặc liên hệ qua điện 
                                                thoại chúng tôi sẽ tư vấn và giúp bạn chọn gói dịch vụ 
                                                phù hợp. Sau đó chúng tôi sẽ tiến hành lập hợp đồng và 
                                                khởi tạo dịch vụ. Sau 24h kể từ thời điểm đăng ký website 
                                                của bạn sẽ có thể hoạt động.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->


                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-9" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Shop của tôi chuyên cung ứng một loại sản phẩm chủ lực thì nên chọn gói dịch vụ nào?
                                    </a>
                                    <div id="acc-9" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Nếu shop của bạn chỉ bán duy nhất một loại mặt hàng duy nhất 
                                                thì bạn nên chọn gói dịch vụ Landing Page. Vì đây là chuyên 
                                                trang dùng để chạy quảng cáo sản phẩm giúp tối ưu cho trường 
                                                hợp bán hàng của bạn. Tất cả thông tin và ưu điểm của sản 
                                                phẩm sẽ được phô bày một cách hợp lý làm tăng khả năng 
                                                mua hàng của khách truy cập.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->


                                <div class="accordion-item rounded bg-white shadow-v3 mb-3">
                                    <a href="#acc-10" class="accordion__title h6 p-4 px-md-5 rounded collapsed"  data-toggle="collapse" aria-expanded="true">
                                        <span class="accordion__icon mr-3">
                                            <i class="tac-plus"></i>
                                            <i class="tac-minus"></i>
                                        </span>
                                        Cửa hàng của tôi có nhiều chi nhánh có thể quản lý được không?
                                    </a>
                                    <div id="acc-10" class="collapse" data-parent="#accordion-1">
                                        <div class="p-4 px-md-5">
                                            <p>
                                                Hoàn toàn có thể ngồi một chỗ quản lý toàn bộ các chi nhánh 
                                                thông qua website hoặc ứng dụng kèm theo nếu khách hàng có 
                                                nhu cầu. Còn nếu muốn quản lý chi tiết về hàng hóa của từng 
                                                chi nhánh và biết tình trạng hàng tồn, bán chạy hoặc cần nhập 
                                                hàng cho chi nhánh nào chẳng hạn các bạn có thể đăng ký sử 
                                                dụng dịch vụ cao cấp cộng thêm với các gói trên website của 
                                                chúng tôi để được hỗ trợ tối ưu trong việc quản lý cũng như kinh doanh.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- END accordion-item-->




                            </div> <!-- END accordion-1-->
                        </div> <!-- END col-12-->
                    </div> <!-- END row-->
                </div> <!-- END container-->
            </div> <!--padding-y-100 -->
        </section>
        <?php
        //menu
        $mod_router->loader('layouts', 'footer');
        ?>
        <script src="assets/js/vendors.bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>