<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.nav.php';
?>


<!-- contents -->
<main class="no-sub">
    <section class="no-sub-intro">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap ">
                    <hgroup>
                        <h2 class="no-heading-lg --fw-700">
                            정책자금이란?
                        </h2>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <div class="img no-radius-xs">
                        <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                    </div>
                    <div class="txt">
                        <h3 class="no-heading-md">
                            당신의 사업에 든든한 지원이 되어드리겠습니다.
                        </h3>
                        <div class="no-mg-lg--t">
                            <ul class="no-body-xl --list-text">
                                <li class="--fw-600 clr-text-heading">
                                    정부의 재원으로 담보력이 부족해 자금 조달이 어려운 중소기업이나 개인을 위해
                                </li>
                                <li>
                                    고용 창출 및 기업 성장을 위해 은행이나 민간 금융기관을 통하여 지원하는 자금을 말합니다.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-sub-work">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap ">
                    <hgroup>
                        <h2 class="no-heading-lg --fw-700">
                            정책 자금 종류
                        </h2>
                    </hgroup>

                </div>
                <div class="--cnt">
                    <ul>
                        <li class="--card no-radius-sm">
                            <div class="--rd-icon-big --rd-icon">
                                <lord-icon src="https://cdn.lordicon.com/ustqdexw.json" trigger="hover"
                                    colors="primary:#171c61,secondary:#171c61">
                                </lord-icon>
                            </div>
                            <div class="txt no-mg-lg--t">
                                <h4 class="no-heading-xs">창업 자금</h4>
                                <p class="no-body-xl no-mg-sm--t">사업을 시작할 때 필요한 초기 비용을 위한 자금을 의미합니다. 사업 초 설비 구입, 임차료, 인력
                                    고용 등의 비용 지원을 위해 사용합니다.
                                </p>
                            </div>
                        </li>
                        <li class="--card no-radius-sm">
                            <div class="--rd-icon-big --rd-icon">
                                <lord-icon src="https://cdn.lordicon.com/mzzzwwvl.json" trigger="hover"
                                    colors="primary:#171c61,secondary:#171c61">
                                </lord-icon>
                            </div>
                            <div class="txt no-mg-lg--t">
                                <h4 class="no-heading-xs">운전 자금</h4>
                                <p class="no-body-xl no-mg-sm--t">
                                    기업이 일상적인 영업활동을 유지하며 발생하는 임금, 재료비, 임대료 등의 단기적 경비를 지불하기 위해 필요한, 단기적인 운영 비용 자금을 말합니다.
                                </p>
                            </div>
                        </li>
                        <li class="--card no-radius-sm">
                            <div class="--rd-icon-big --rd-icon">
                                <lord-icon src="https://cdn.lordicon.com/ygqtedpk.json" trigger="hover"
                                    colors="primary:#171c61,secondary:#171c61">
                                </lord-icon>
                            </div>
                            <div class="txt no-mg-lg--t">
                                <h4 class="no-heading-xs">시설 자금</h4>
                                <p class="no-body-xl no-mg-sm--t">
                                    기업이 장기적인 투자, 예를 들어 기계 설비 구입, 건물 건설 또는 확장 등의 목적으로, 기업의 지속적 성장과 확장 지원을 위한 재무적 지원을
                                    의미합니다.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="no-sub-nece">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap ">
                    <hgroup>
                        <h2 class="no-heading-lg --fw-700">
                            일반 대출과 정책 자금의 차이점
                        </h2>
                        <p class="no-body-xl">
                            은행이나 금융권에서 대출받는 것보다 한도가 높고 긴 상환기관을 보장하기에,
                            정책 자금 확보를 통한 사업 자금 마련은 기업 운영을 위한 가장 좋은 방법입니다.
                        </p>
                    </hgroup>
                </div>
                <div class="--cnt">

                    <div class="img no-radius-xs">
                        <img src="/resource/images/common/img_placeholder.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once $STATIC_ROOT . '/inc/layouts/process.php'; ?>


    <?php include_once $STATIC_ROOT.'/inc/layouts/banner.php'; ?>

</main>









<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>