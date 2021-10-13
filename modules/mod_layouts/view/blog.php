<?php if (!empty($list)) { ?>
    <section class="padding-y-100">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="mb-4">
                        Bài Viết Mới Nhất
                    </h2>
                    <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                </div>

                <?php
                foreach ($list as $item) {
                    ?>
                    <div class="col-lg-4 col-md-6 marginTop-30">
                        <div class="card shadow-v1">
                            <img class="card-img-top" src="assets/img/blog/card/1.jpg" alt="">
                            <div class="card-body">
                                <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">
                                    <?php echo $item['blogPost']; ?>
                                </span>
                                <a href="index.php?com=blog&act=view&blogId=<?php echo $item['blogId']; ?>" class="h6 mb-3" style="max-height: 24px; overflow-y: hidden;">
                                    <?php echo $item['blogTitle']; ?>
                                </a>
                                <p class="mb-0" style="overflow: hidden; max-height: 30px;">
                                    <?php echo $item['blogMeta']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>
<?php } ?>