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
    <section class="no-main-case">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap">
                    <hgroup>
                        <h2 class="no-heading-md --fw-700">
                            실제 정책자금 사례
                        </h2>
                    </hgroup>
                </div>
                <div class="no-category no-mg-md--t">
                    <div class="no-category-swiper swiper">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="#" class="active">
                                    전체
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    전체
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    전체
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    전체
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="--cnt">
                    <ul>
                        <?php for ($i = 0; $i < 6; $i++) : ?>
                        <li class="no-radius-sm">
                            <a href="#">
                                <figure>
                                    <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                                </figure>
                                <div class="txt">
                                    <span class="--tag">정부정책자금</span>
                                    <h4 class="no-heading-xs no-mg-md--t">이대표 / 온라인 쇼핑몰 운영</h4>
                                    <h5 class="no-body-lg --fw-500">자금이 늘 걸림돌이었어요</h5>
                                    <p class="no-mg-sm--t">
                                        온라인 쇼핑몰을 운영하면서 성장 기회를 잡고 싶었지만 자금이 늘 걸림돌이었어요.A&Z 파트너스 덕분에 ...
                                    </p>
                                </div>
                            </a>
                        </li>
                        <?php endfor ;?>
                    </ul>

                </div>
            </div>
            <div class="no-pagination no-mg-2xl--t">
                <!-- Prev -->
                <a href="javascript:void(0);" title="prev" class="prevnext prev">
                    <i class="fa-regular fa-chevron-left" aria-hidden="true"></i>
                </a>

                <!-- Num -->
                <a href="javascript:void(0);" title="1page" class="num active">1</a>
                <a href="javascript:void(0);" title="2page" class="num">2</a>

                <!-- Next -->
                <a href="javascript:void(0);" title="next" class="prevnext next">
                    <i class="fa-regular fa-chevron-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

</main>



<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>