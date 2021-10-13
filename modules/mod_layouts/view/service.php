<section class="padding-y-50">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">
                    Lĩnh Vực Hoạt Động
                </h2>
                <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
            </div>
        </div> <!-- END row-->

        <div class="row text-center">
            <?php
            foreach ($type as $item) {
                ?>
                <div class="col-md-4 mt-5 wow slideInUp" data-wow-delay=".1s">
                    <div class="card p-4">
                        <i class="tac-<?php echo str_replace(' ', '-', strtolower(TMC_String::getUnsignString($item['serviceTypeName']))); ?> display-3 mt-3 text-primary"></i>
                        <h4 class="my-4">
                            <?php echo $item['serviceTypeName']; ?>
                        </h4>
                        <p>
                            <?php echo $item['serviceTypeMeta']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div> <!-- END container-->
</section>