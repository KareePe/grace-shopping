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

        <section class="wrapper bg-light">
            <div class="container pt-14 pt-md-16">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">แนะนำ</h2>
                        <h3 class="display-4 mb-10">วิดีโอแนะนำบริการและวิธีการใช้งานของเรา เกรซช้อปปิ้งมอลล์ </h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="container-fluid px-md-6">
                <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure class="rounded">
                                    <iframe style="width: 100%;height:350px;" src="https://www.youtube.com/embed/mDceW_YoCgw?si=0IVfGK-WuiY6FjN5&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="https://youtu.be/mDceW_YoCgw?si=livGzYn2Qb1AWasQ" target="_blank" class="link-dark">โฆษณาจำหน่ายเครื่องคั่วกาแฟ</a></h2>
                                </div>
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <figure class="rounded">
                                    <iframe style="width: 100%;height:350px;" src="https://www.youtube.com/embed/nw81EoY-Q-0?si=Gfl4p_O0ODhjQOQ5&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="https://youtu.be/nw81EoY-Q-0?si=6JRHP5v7S_Nivz-G" target="_blank" class="link-dark">วิธีใช้งานเครื่องคั่วกาแฟ</a></h2>
                                </div>
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <figure class="rounded">
                                    <iframe style="width: 100%;height:350px;" src="https://www.youtube.com/embed/GJKecoJT6Gs?si=-4IfI2mqXy743Nxv&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="https://youtu.be/GJKecoJT6Gs?si=X-nh6hEv5bMCIiTz" target="_blank" class="link-dark">วิธีและขั้นตอนทำความสะอาดเครื่องคั่วกาแฟ</a></h2>
                                </div>
                            </div>
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /section -->

    </div>

    <?php
    include_once 'script.php';
    ?>
</body>

</html>