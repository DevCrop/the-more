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

    <section class="no-sub-talent">
        <div class="no-section-lg">
            <div class="no-container-3xl">
                <div class="no-sub-talent__inner">
                    <div class="--sub-section-title-wrap">
                        <hgroup>
                            <h2 class="no-display-xs">
                                THE MORE <br>
                                <span class="--fm-ko">인재상</span>
                            </h2>
                            <p class="no-body-xl ">
                                더모어는 결과물만 보고 사람을 판단하지 않습니다. <br>
                                우리는 함께 고민하고, 기획하고, 성장할 수 있는 사람을 찾습니다. <br>
                                감각과 태도, 실행력과 유연함. 그 안에 <br>
                                '더'가 있는 사람이라면, 우리는 언제든 환영합니다. </p>
                        </hgroup>
                    </div>
                    <div class="--cnt">
                        <ul>
                            <li class="--icon-card">
                                <div class="icon">
                                    <img src="<?=IMG_PATH?>/icon/main_why_icon_4.svg" alt="">
                                </div>
                                <div class="txt">
                                    <h4 class="no-heading-md">Creative + System</h4>
                                    <p class="no-body-xl no-mg-sm--t --fw-400">
                                        감각은 기본, 시스템은 옵션이 아닙니다. <br>
                                        더모어는 기획력과 운영력이 공존하는 팀입니다.
                                    </p>
                                </div>
                            </li>
                            <li class="--icon-card">
                                <div class="icon">
                                    <img src="<?=IMG_PATH?>/icon/main_why_icon_3.svg" alt="">
                                </div>
                                <div class="txt">
                                    <h4 class="no-heading-md">Protect & Elevate</h4>
                                    <p class="no-body-xl no-mg-sm--t --fw-400">
                                        수익, 계약, 법률, 세무까지 <br>
                                        콘텐츠 이후의 삶까지 책임집니다.
                                    </p>
                                </div>
                            </li>
                            <li class="--icon-card">
                                <div class="icon">
                                    <img src="<?=IMG_PATH?>/icon/main_why_icon_1.svg" alt="">
                                </div>
                                <div class="txt">
                                    <h4 class="no-heading-md">One Team All-in</h4>
                                    <p class="no-body-xl no-mg-sm--t --fw-400">
                                        아카데미, 제작팀, 매니지먼트까지 <br>
                                        하나의 팀이 끝까지 함께합니다.
                                    </p>
                                </div>
                            </li>
                            <li class="--icon-card">
                                <div class="icon">
                                    <img src="<?=IMG_PATH?>/icon/main_why_icon_2.svg" alt="">
                                </div>
                                <div class="txt">
                                    <h4 class="no-heading-md">Growth - Driven</h4>
                                    <p class="no-body-xl no-mg-sm--t --fw-400">
                                        조회수보다 중요한 건 <br>
                                        크리에이터의 장기적인 성장입니다.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-sub-recruit">
        <div class="no-section-lg">
            <div class="no-container-3xl">
                <div class="--sub-section-title-wrap">
                    <hgroup>
                        <h2 class="no-display-xs">
                            채용 공고
                        </h2>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="major no-heading-md --fw-400">기획팀</div>
                                <article>
                                    <span class="no-heading-md">브랜드 전략, 콘텐츠 기획, 연출 기획</span>
                                    <div class="no-btn-outline__white no-btn-outline">
                                        <button type="button">
                                            <div>
                                                <i class="fa-regular fa-arrow-right-long"></i>
                                            </div>
                                            View More
                                        </button>
                                    </div>
                                </article>
                            </a>
                            <a href="#">
                                <div class="major no-heading-md --fw-400">기획팀</div>
                                <article>
                                    <span class="no-heading-md">브랜드 전략, 콘텐츠 기획, 연출 기획</span>
                                    <div class="no-btn-outline__white no-btn-outline">
                                        <button type="button">
                                            <div>
                                                <i class="fa-regular fa-arrow-right-long"></i>
                                            </div>
                                            View More
                                        </button>
                                    </div>
                                </article>
                            </a>
                            <a href="#" class="disabled">
                                <div class="major no-heading-md --fw-400">기획팀</div>
                                <article>
                                    <span class="no-heading-md">브랜드 전략, 콘텐츠 기획, 연출 기획</span>
                                    <div class="no-btn-outline__white no-btn-outline">
                                        <button type="button">
                                            <div>
                                                <i class="fa-regular fa-arrow-right-long"></i>
                                            </div>
                                            View More
                                        </button>
                                    </div>
                                </article>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>





<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>