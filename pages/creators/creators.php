<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.php';
?>


<!-- contents -->
<main class="no-sub">

    <section class="no-main-creators">
        <div class="no-main-creators__inner">
            <div class="no-container-3xl">
                <div class="images">
                    <img src="<?=IMG_PATH?>/main/main_about_img_1.jpg" alt="" class="img-1 image">
                    <img src="<?=IMG_PATH?>/main/main_about_img_2.jpg" alt="" class="img-2 image">
                    <img src="<?=IMG_PATH?>/main/main_about_img_3.jpg" alt="" class="img-3 image">
                    <img src="<?=IMG_PATH?>/main/main_about_img_4.jpg" alt="" class="img-4 image">
                </div>
                <div class="txt">
                    <h2 class="no-display-lg">THE STAGE</h2>
                    <div>
                        <h2 class="no-display-lg">IS SET </h2>
                        <P class="no-main-creators-impact no-display-creator">NOW</P>
                    </div>
                    <h2 class="no-display-lg">YOUR TURN</h2>

                </div>
            </div>
            <div class="no-main-creators-final">
                <figure>
                    <img src="<?=IMG_PATH?>/common/create_bg.jpg" alt="">
                </figure>
                <article>
                    <h3 class="no-display-sm ">이제 당신의 차례입니다</h3>
                    <p class="no-heading-md no-mg-lg--t --fw-400">
                        그 무대 위에 설 사람은 바로 당신입니다. <br>
                        대표 크리에이터가 되기까지 더모어가 함께하겠습니다.
                    </p>
                </article>
            </div>
        </div>
    </section>


</main>



<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>