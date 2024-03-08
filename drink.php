<?php
$type = $_GET['type'];
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once 'header.php';
?>

<body>
    <div class="content-wrapper">
        <?php
        include_once 'nav.php';
        ?>

        <?php
        if ($type === 'fruit-juice') {
        ?>
            <section class="wrapper bg-light pt-10 pt-md-10 pb-20">
                <div class="container pt-0 pt-md-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Product</h2>
                            <h3 class="display-4 mb-10">เครื่องดื่มน้ำผลไม้</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="container-fluid px-md-6">
                    <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="./assets/img/drink-4.jpg" alt="" />
                                        <div class="project-details d-flex justify-content-center flex-column pt-2">
                                            <div class="post-header">
                                                <h2 class="post-title h3"><a href="javascrip:void(0)" class="link-dark">รสส้ม</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="./assets/img/drink-5.jpg" alt="" />
                                        <div class="project-details d-flex justify-content-center flex-column pt-2">
                                            <div class="post-header">
                                                <h2 class="post-title h3"><a href="javascrip:void(0)" class="link-dark">รสลิ้นจี่</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded"><img src="./assets/img/drink-6.jpg" alt="" />
                                        <div class="project-details d-flex justify-content-center flex-column pt-2">
                                            <div class="post-header">
                                                <h2 class="post-title h3"><a href="javascrip:void(0)" class="link-dark">รสองุ่น</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /.container-fluid -->
            </section>
        <?php
        } else if ($type === 'coffee-roaster') {
        ?>
            <section class="wrapper bg-light pt-10 pt-md-10 pb-20">
                <div class="container pt-0 pt-md-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Product</h2>
                            <h3 class="display-4 mb-10">เครื่องคั่วกาแฟ</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="container-fluid px-md-6">
                    <div style="text-align: center;width:100%;">
                        <img src="./images/grace-logo.jpg" style="width: 50%;margin-bottom:50px;" alt="">
                        <img src="./images/drink-1.jpg" style="width: 100%;" alt="">
                        <img src="./images/เครื่องคั่วกาแฟ2.jpg" style="width: 100%;" alt="">
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /.container-fluid -->
            </section>
        <?php
        } else if ($type === 'slimming-coffee') {
        ?>
            <section class="wrapper bg-light pt-10 pt-md-10 pb-20">
                <div class="container pt-0 pt-md-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Product</h2>
                            <h3 class="display-4 mb-10">กาแฟลดความอ้วน</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="container-fluid px-md-6">
                    <div style="text-align: center;width:100%;">
                        <img src="./images/coffee-cup.jpg" class="w-50p" alt="">
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /.container-fluid -->
            </section>
        <?php
        } else if ($type === 'energy') {
        ?>
            <section class="wrapper bg-light pt-10 pt-md-10 pb-20">
                <div class="container pt-0 pt-md-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Product</h2>
                            <h3 class="display-4 mb-10">กาแฟลดความอ้วน</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="container-fluid px-md-6">
                    <div style="text-align: center;width:100%;">
                        <img src="./images/energy.png" class="w-50p" alt="">
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /.container-fluid -->
            </section>
        <?php
        } else if ($type === 'bird-nest') {
        ?>
            <section class="wrapper bg-light pt-10 pt-md-10 pb-20">
                <div class="container pt-0 pt-md-0">
                    <div class="row">
                        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Product</h2>
                            <h3 class="display-4 mb-10">กาแฟลดความอ้วน</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="container-fluid px-md-6">
                    <div style="text-align: center;width:100%;">
                        <img src="./images/bird.png" class="w-50p" alt="">
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /.container-fluid -->
            </section>
        <?php
        }
        ?>
        <!-- /section -->

    </div>

    <?php
    include_once 'script.php';
    ?>
</body>

</html>