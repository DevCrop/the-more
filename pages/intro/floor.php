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
<main class="no-sub ">
    <section class="no-sub-floor no-pd-2xl--y">
        <div class="no-sub-tab-container">
            <!---tab-->
            <div class="no-sub-tab no-section-title">
                <div class=" no-container-xl">
                    <div class="no-sub-tab-slider">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <button type="button" class=" no-btn active no-btn__fill">
                                    신한카드홀
                                </button>
                            </li>
                            <li class="swiper-slide">
                                <button type="button" class=" no-btn no-btn__fill">
                                    마스터카드홀
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="no-pd-lg--t no-section-content">
            <div class="no-container-xl">
                <div class="no-sub-floor-tab-wrap">
                    <div class=" no-sub-tab-contents  ">
                        <ul>
                            <!----content-1--->
                            <li class="shinhan-card active">
                                <div>
                                    <div class="no-sub-floor-tab no-nest-tab-wrap">
                                        <ul>
                                            <li>
                                                <button type="button" class="no-floor-btn active no-nest-btn">
                                                    3F
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="no-floor-btn no-nest-btn">
                                                    2F
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="no-floor-btn no-nest-btn">
                                                    1F
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="no-floor-btn no-nest-btn">
                                                    LF
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="no-floor-btn no-nest-btn">
                                                    B1F
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="no-nest-tab-contents">
                                        <ul>
                                            <!-- 3F-->
                                            <li>
                                                <div>
                                                    <div class="no-sub-floor-map">
                                                        <div class="no-sub-floor-map-button">
                                                            <div class="no-sub-floor-3f-button">
                                                                <ul>
                                                                    <li>
                                                                        <button type="button" data-modal-id="book">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">북파크라운지</div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" data-modal-id="practice">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">연습실</div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <img src="<?=$ROOT?>/resource/images/sub/shinhan_floo_img_1.png"
                                                            alt="신한카드홀 1층 지도">
                                                    </div>
                                                    <div class="no-sub-floor-map-info">
                                                        <h2 class="no-heading-md">3F</h2>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="no-body-xl">북파크라운지</li>
                                                            <li class="no-body-xl">연습실</li>
                                                        </ul>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                남여 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-duotone fa-regular fa-stairs"></i>
                                                                계단
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-elevator"></i>
                                                                엘리베이터
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- 2F-->
                                            <li>
                                                <div>
                                                    <div class="no-sub-floor-map">
                                                        <div class="no-sub-floor-map-button">
                                                            <div class="no-sub-floor-2f-button">
                                                                <ul>
                                                                    <li>
                                                                        <button type="button" data-modal-id="cafe">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">카페필로스</div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" data-modal-id="opera">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">오페라글라스</div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <img src="<?=$ROOT?>/resource/images/sub/shinhan_floo_img_2.png"
                                                            alt="신한카드홀 1층 지도">
                                                    </div>
                                                    <div class="no-sub-floor-map-info">
                                                        <h2 class="no-heading-md">2F</h2>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="no-body-xl">카페 필로스</li>
                                                            <li class="no-body-xl">확신제작소</li>
                                                            <li class="no-body-xl">오페라글라스</li>
                                                        </ul>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-duotone fa-regular fa-stairs"></i>
                                                                계단
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-elevator"></i>
                                                                엘리베이터
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- 1F-->
                                            <li>
                                                <div>
                                                    <div class="no-sub-floor-map">
                                                        <div class="no-sub-floor-map-button">
                                                            <div class="no-sub-floor-1f-button">
                                                                <ul>
                                                                    <li>
                                                                        <button type="button" data-modal-id="stageB">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">객석</div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" data-modal-id="seat">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">스테이지 B</div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" data-modal-id="solo">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">솔로스 키친</div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <img src="<?=$ROOT?>/resource/images/sub/shinhan_floo_img_3.png"
                                                            alt="신한카드홀 1층 지도">
                                                    </div>
                                                    <div class="no-sub-floor-map-info">
                                                        <h2 class="no-heading-md">1F</h2>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="no-body-xl">객석 3층</li>
                                                            <li class="no-body-xl">티켓박스</li>
                                                            <li class="no-body-xl">스테이지 B</li>
                                                            <li class="no-body-xl">솔로스 키친</li>
                                                        </ul>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                남여 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-duotone fa-regular fa-stairs"></i>
                                                                계단
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-elevator"></i>
                                                                엘리베이터
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- LF-->
                                            <li>
                                                <div>
                                                    <div class="no-sub-floor-map">
                                                        <div class="no-sub-floor-map-button">
                                                            <div class="no-sub-floor-lf-button">
                                                                <ul>
                                                                    <li>
                                                                        <button type="button" data-modal-id="seat">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">객석 2층</div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <img src="<?=$ROOT?>/resource/images/sub/shinhan_floo_img_4.png"
                                                            alt="신한카드홀 1층 지도">
                                                    </div>
                                                    <div class="no-sub-floor-map-info">
                                                        <h2 class="no-heading-md">LF</h2>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="no-body-xl">객석 2층</li>
                                                            <li class="no-body-xl">VIP 라운지</li>
                                                        </ul>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                남자 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                여자 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-duotone fa-regular fa-stairs"></i>
                                                                계단
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-elevator"></i>
                                                                엘리베이터
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- B1F-->
                                            <li>
                                                <div>
                                                    <div class="no-sub-floor-map">
                                                        <div class="no-sub-floor-map-button">
                                                            <div class="no-sub-floor-b1f-button">
                                                                <ul>
                                                                    <li>
                                                                        <button type="button" data-modal-id="seat">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">객석 1층</div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" data-modal-id="storage">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">물품보관소</div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <img src="<?=$ROOT?>/resource/images/sub/shinhan_floo_img_5.png"
                                                            alt="신한카드홀 1층 지도">
                                                    </div>
                                                    <div class="no-sub-floor-map-info">
                                                        <h2 class="no-heading-md">BF</h2>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="no-body-xl">객석 1층</li>
                                                            <li class="no-body-xl">물품보관소 </li>
                                                        </ul>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                남여 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                여자 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-duotone fa-regular fa-stairs"></i>
                                                                계단
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-elevator"></i>
                                                                엘리베이터
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!----content-2--->
                            <li class="master-card">
                                <div>
                                    <div class="no-sub-floor-tab no-nest-tab-wrap">
                                        <ul>
                                            <li>
                                                <button type="button" class="no-floor-btn active no-nest-btn">
                                                    B1F
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="no-floor-btn no-nest-btn">
                                                    B3F
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="no-nest-tab-contents">
                                        <ul>
                                            <!-- 3F-->
                                            <li class="">
                                                <div>
                                                    <div class="no-sub-floor-map">
                                                        <div class="no-sub-floor-map-button">
                                                            <div class="no-sub-floor-b1f-button">
                                                                <ul>
                                                                    <li>
                                                                        <button type="button" data-modal-id="seat">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">객석 2층</div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" data-modal-id="storage">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">물품보관소</div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <img src="<?=$ROOT?>/resource/images/sub/master_floor_img_1.png"
                                                            alt="마스터카드홀 1층 지도">
                                                    </div>
                                                    <div class="no-sub-floor-map-info">
                                                        <h2 class="no-heading-md">B1F</h2>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="no-body-xl">객석 2층</li>
                                                            <li class="no-body-xl">물품보관소</li>
                                                        </ul>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                남여 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-duotone fa-regular fa-stairs"></i>
                                                                계단
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-elevator"></i>
                                                                엘리베이터
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- 2F-->
                                            <li>
                                                <div>
                                                    <div class="no-sub-floor-map">
                                                        <div class="no-sub-floor-map-button">
                                                            <div class="no-sub-floor-b3f-button">
                                                                <ul>
                                                                    <li>
                                                                        <button type="button" data-modal-id="seat">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">객석 1층</div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" data-modal-id="storage">
                                                                            <div class="--ripple-box">
                                                                                <div class="--ripple --ripple-delay">
                                                                                </div>
                                                                                <div class="--ripple"></div>
                                                                            </div>
                                                                            <div class="--blind">물품보관소</div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <img src="<?=$ROOT?>/resource/images/sub/master_floor_img_2.png"
                                                            alt="마스터카드홀 1층 지도">
                                                    </div>
                                                    <div class="no-sub-floor-map-info">
                                                        <h2 class="no-heading-md">B3F</h2>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="no-body-xl">객석 1층</li>
                                                            <li class="no-body-xl">물품보관소
                                                            <li class="no-body-xl">안내데스크</li>
                                                        </ul>
                                                        <ul class="f fd-c no-gap-2xs ">
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-people"></i>
                                                                남여 화장실
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-duotone fa-regular fa-stairs"></i>
                                                                계단
                                                            </li>
                                                            <li class="f ai-c no-gap-3xs">
                                                                <i class="fa-solid fa-elevator"></i>
                                                                엘리베이터
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
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