<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.about.php';
?>



<main class="no-sub">
    <section class="no-sub-who">
        <div class="no-container-3xl">
            <div class="no-section-lg">
                <div class="no-sub-who__inner">
                    <div class="--sub-section-title-wrap">
                        <hgroup>
                            <h2 class="no-display-xs">Who We Are</h2>
                            <p class="no-body-xl">
                                우리는 크리에이터의 <b>그 다음</b>을 함께하는 팀입니다. <br>
                                우리는 콘텐츠를 넘어, 당신의 이름이 브랜드로 완성되는 여정을 설계합니다.
                            </p>
                        </hgroup>
                    </div>
                    <div class="--cnt">
                        <ul>
                            <li>
                                <figure>
                                    <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                                </figure>
                                <div class="txt">
                                    <h4 class="no-heading-md --fw-700">
                                        THE MORE는 <br>
                                        기획 중심의 종합 엔터테인먼트입니다.
                                    </h4>
                                    <p class="no-mg-md--t no-body-lg  --fw-400">
                                        단순히 콘텐츠를 제작하고 관리하는 데 그치지 않고, 브랜딩 전략부터 퍼포먼스 교육,<br>
                                        제작, 매니지먼트까지 하나의 흐름으로 연결된 시스템 안에서 크리에이터의 가능성을 실현합니다.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                                </figure>
                                <div class="txt">
                                    <h4 class="no-heading-md --fw-700">
                                        THE MORE는 <br>
                                        단 한 명의 크리에이터도 시스템 밖에 두지 않습니다
                                    </h4>
                                    <p class="no-mg-md--t no-body-lg  --fw-400">
                                        기획자, 트레이너, 디렉터, 제작자, 매니저가 분리되지 않은 하나의 팀으로 움직이며, <br>
                                        당신의 방향성과 속도에 맞춰 함께 성장합니다.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                                </figure>
                                <div class="txt">
                                    <h4 class="no-heading-md --fw-700">
                                        THE MORE는 <br>
                                        상상력과 감각이 커리어로 연결될 수 있도록 합니다
                                    </h4>
                                    <p class="no-mg-md--t no-body-lg  --fw-400">
                                        방송, 뉴미디어, 퍼포먼스, 커머스까지 분야의 경계 없이 크리에이터가 빛날 수 있는 <br>
                                        모든 무대를 함께 고민하고 열어갑니다.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-sub-office">
        <div class="no-container-3xl">
            <div class="no-section-lg">
                <div class="no-sub-office__inner">
                    <div class="--sub-section-title-wrap">
                        <hgroup>
                            <h2 class="no-display-xs">Our Office</h2>
                            <p class="no-body-xl">
                                우리가 일하고, 당신을 기다리는 공간입니다. 함께 고민하고 기획하며, <br>
                                연습하고 성장하는 그 모든 순간이 담긴 공간. 기획실, 스튜디오, <br>
                                트레이닝룸, 매니지먼트룸까지 크리에이터를 위한 모든 환경이 준비되어있습니다.
                            </p>
                        </hgroup>
                        <ul class="no-mg-3xl--t">
                            <li>
                                <div class="swiper-button-prev no-btn-swiper no-btn-swiper__outline--white">
                                    <i class="fa-regular fa-chevron-left"></i>
                                </div>
                            </li>
                            <li>
                                <div class="swiper-button-next no-btn-swiper no-btn-swiper__outline--white">
                                    <i class="fa-regular fa-chevron-right"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="--cnt">
                        <div class="swiper no-sub-office-swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                                    </figure>
                                </li>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
            include_once $STATIC_ROOT.'/inc/layouts/banner.php';
    ?>
</main>





<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
?>