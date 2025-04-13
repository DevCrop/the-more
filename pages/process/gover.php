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
                            정부 지원금이란?
                        </h2>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <div class="img no-radius-xs">
                        <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                    </div>
                    <div class="txt">
                        <h3 class="no-heading-md">
                            당신에 비즈니에 맞는<br>
                            최적의 지원금을 찾아드립니다.
                        </h3>
                        <div class="no-mg-lg--t">
                            <ul class="no-body-xl --list-text">
                                <li class="--fw-600 clr-text-heading">
                                    특정 목표를 달성하거나 사회적 불균형을 조정하기 위한 <br>다양한 정책들의
                                    실행을 돕기 위한 재정적 지원입니다.
                                </li>
                                <li>
                                    그러나 복잡한 절차와 까다로운 요구 사항 때문에 개인이나 <br>기업이 지원금을 효과적으로 활용하는데 어려움이 있습니다.
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
                            정부 지원금 종류
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
                                <h4 class="no-heading-xs">고용 지원금</h4>
                                <p class="no-body-xl no-mg-sm--t">
                                    일정 조건을 만족하는 기업이나 개인에 고용을 유지하거나 새로운 고용을 창출 할 때 제공하는 재정 지원입니다. 이는 고용의 안정과 확대를 목적으로
                                    합니다.
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
                                <h4 class="no-heading-xs">R&D 지원사업</h4>
                                <p class="no-body-xl no-mg-sm--t">
                                    정부나 다른 기관의 연구 및 개발 활동 촉진을 위해 제공하는 재정적, 기술적 지원 프로그램입니다. 혁신과 기술 발전을 촉진하여 국가 경쟁력을 강화하는데
                                    기여합니다.
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
                                <h4 class="no-heading-xs">예비 창업 패키지</h4>
                                <p class="no-body-xl no-mg-sm--t">
                                    창업을 준비하는 예비 창업자들에게 필요한 교육, 멘토링, 자금 지원 등 다양한 서비스를 제공하는 프로그램입니다. 창업 단계에서 실패 위험을 줄이고
                                    성공적인 사업 기반을 마련하기 위함입니다.
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
                            정부 지원금의 필요성
                        </h2>
                        <p class="no-body-xl">
                            저희 A&Z 파트너스의 서비스를 통해 필요한 정보를 얻고, 신청 과정에서 필요한 도움을 받을 수 있습니다. 여러분의 성공적인 정부 지원금 신청을 위해 항상
                            최선을
                            다하겠습니다.
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