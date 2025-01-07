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
<main class="no-board">
    <section class="no-sub-faq no-pd-2xl--y">
        <div class="no-container-xl">
            <!---category-->
            <div class="no-sub-category">
                <div class="no-sub-category-slider">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <a href="#" class=" no-btn active">
                                전체
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#" class=" no-btn ">
                                공연
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#" class=" no-btn ">
                                공고
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#" class=" no-btn active ">
                                채용
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#" class=" no-btn ">
                                기타
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="no-pd-lg--t">
                <div class="no-skin-faq">
                    <div class="no-skin-faq-container">
                        <ul class="no-skin-faq-list">
                            <?php for ($i = 0; $i < 14; $i++): ?>
                            <li class="no-skin-faq-item" data-faq-item>
                                <header class="no-skin-faq-head">
                                    <button type="button">
                                        <div class="no-skin-faq-item__title">
                                            <div class="no-skin-faq-item__icon">
                                                <span>Q</span>
                                            </div>
                                            <h3 class="no-body-xl --fw-semibold --t-start">
                                                대학생이라면 누구나 지원할 수 있나요?
                                            </h3>
                                        </div>
                                        <div class="no-skin-faq-item__arrow">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </button>
                                </header>
                                <section class="no-skin-faq-body" style="display: block;">
                                    <div>
                                        <div class="no-skin-faq-item__icon --dark">
                                            <span>A</span>
                                        </div>
                                        <div class="no-skin-faq-body__content --fw-regular">
                                            <div>
                                                <p style="margin-top:0cm"><span style="font-size:10.0pt;line-height:130%;
font-family:'맑은 고딕';mso-ascii-theme-font:minor-fareast;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-fareast;mso-bidi-font-family:Arial;
color:black">블루스퀘어는 어린이 놀이방 시설을 보유하고 있지 않습니다<span lang="EN-US">.</span></span><span lang="EN-US" style="font-size:10.0pt;line-height:130%;font-family:'맑은 고딕';
mso-ascii-theme-font:minor-fareast;mso-fareast-theme-font:minor-fareast;
mso-hansi-theme-font:minor-fareast">
                                                        <o:p></o:p>
                                                    </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>