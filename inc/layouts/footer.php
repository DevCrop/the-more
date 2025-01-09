<footer class="no-footer no-pd-lg--y">

    <div class="no-container-2xl">
        <div class="no-footer__inner ">
            <div class="no-footer__top no-pd-sm--b">
                <h1 class="no-footer__logo">
                    <a href="#" class="--toggle-images">
                        <img src="<?=IMG_PATH?>/logo/Logo_C_White.png" alt="" class="--dark-img">
                        <img src="<?=IMG_PATH?>/logo/Logo_C_Black.png" alt="" class="--light-img">
                        <span class="--blind">공연의 모든 것 - 블루스퀘어</span>
                    </a>
                </h1>
                <ul class="no-footer__privacy">
                    <li class="--pos-r">
                        <button type="button" class="f al-c no-gap-sm jc-sb">
                            개인정보처리방침
                            <i class="fa-regular fa-chevron-down"></i>
                        </button>
                        <ul class="no-footer__privacy-list">
                            <li>
                                <a href="/pages/legal/legal_251001.php" class="f al-c no-gap-sm jc-sb">
                                    2025.01.10
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/pages/legal/legal_181001.php" class="f al-c no-gap-sm jc-sb">
                                    2018.10.01
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <p>
                                기업공고
                            </p>
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>
                                윤리경영 / 제보
                            </p>
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="no-footer__bottom no-pd-sm--t">
                <div class="no-footer__info">
                    <ul>
                        <li>
                            <b>대표</b>
                            <p>최휘영</p>
                        </li>
                        <li>
                            <b>FAX</b>
                            <p>02-6399-7599</p>
                        </li>
                        <li>
                            <b>E-Mail</b>
                            <p>bluesquare@interparktriple.com</p>
                        </li>
                        <li>
                            <b>사업자등록번호</b>
                            <p>214-88-37365</p>
                        </li>
                        <li>
                            <b>전화번호</b>
                            <p>1544-1591 (장애인 전용안내 포함 / 09 : 00 - 18 : 00)</p>
                        </li>
                        <li>
                            <b>영업시간</b>
                            <p>오전 11:00 ~ 22:30(월요일 휴관)</p>
                        </li>
                    </ul>
                </div>
                <div class="no-footer__address ">
                    <p>Copyright ⓒ InterparkTheater Corp. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </div>


</footer>

<div class="no-top-btn">
    <button type="button" class="active">
        <div class="arrow">
            <i class="fa-regular fa-arrow-up-long" aria-hidden="true"></i>
            <i class="fa-regular fa-arrow-up-long" aria-hidden="true"></i>
        </div>
    </button>
</div>

<div id="modal" data-lenis-prevent="">
    <!-- 신한 모달 -->
    <div class="no-modal-shinhan">
        <ul class="modal-wrap ">
            <!-- 북파크라운지 모달 -->
            <li class="modal-item " data-modal-id="book">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 4 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/fnb_book_img_<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">북파크라운지</h4>
                            <h5 class="no-body-xl --fw-semibold no-pd-sm--t">블루스퀘어에서 만나는 아늑한 복합 문화 공간</h5>
                            <p class="--fw-regular no-pd-3xs--t">
                                3,000여 권의 큐레이션 도서와 감각적인 카페 메뉴가 어우러진 특별한 공간입니다. <br>
                                편안하고 따뜻한 분위기 속에서
                                독서와 휴식을 동시에 즐길 수 있는 북파크 라운지는 일상의 작은 여유를 선사합니다.
                            </p>
                        </div>
                        <div class="info no-pd-md--t">
                            <ul class="grid-col-3 no-gap-md ">
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>위치</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>신한카드홀 1층 / 객석 3층</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>영업시간</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        화요일 - 금요일 <br>
                                                        12 : 00분 - 21 : 30분
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        토요일 - 금요일 <br>
                                                        12 : 00분 - 20 : 30분
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <b class="no-clr-text-primary">매주 월요일 휴무</b>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-regular fa-timer" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>문의</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>02 - 6399 - 7544</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="link no-pd-xl--t">
                            <div class="f ai-c jc-c">
                                <a href="https://map.naver.com/p/entry/place/1174718905?lng=127.0024193&lat=37.5409711&placePath=%2Fhome&searchType=place&c=15.00,0,0,0,dh"
                                    target="_blank" class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                    자세히 보기
                                    <span>
                                        <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </li>
            <!-- 연습실 모달 -->
            <li class="modal-item " data-modal-id="practice">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 5 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/practice_3f_img_<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">연습실 - 3F</h4>
                            <h5 class="no-body-xl --fw-semibold no-pd-sm--t">문화예술인들의 쾌적한 연습과 다양한 창작활동이 가능한 다목적 연습 공간입니다.
                            </h5>
                            <p class="--fw-regular no-pd-3xs--t">
                                블루스퀘어 연습실은 창작의 시작점이자 가능성을 펼치는 무대입니다. <br>
                                쾌적한 환경에서 문화예술인들이 자유롭게 꿈을 실현할 수 있도록 설계되었습니다.

                                이곳에서 당신의 열정과 창의력을 마음껏 펼쳐보세요.
                            </p>
                        </div>
                        <div class="link no-pd-xl--t">
                            <div class="f ai-c jc-c">
                                <a href="<?=$ROOT?>/pages/intro/fac.php"
                                    class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                    자세히 보기
                                    <span>
                                        <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </li>
            <!-- 카페필로스 모달 -->
            <li class="modal-item " data-modal-id="cafe">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 5 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/fnb_philos_img<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">카페 필로스 & 베이커리</h4>
                            <h5 class="no-body-xl --fw-semibold no-pd-sm--t">이색적인 원두와 갓 구운 베이커리가 어우러지는 특별한 공간</h5>
                            <p class="--fw-regular no-pd-3xs--t">
                                독특한 풍미의 원두로 완성된 카페 메뉴와 신선하게 구워낸 베이커리를 만날 수 있는 곳입니다. <br>
                                남산의 정취를 느끼며 공연과 함께 여유를 즐길 수 있는 테라스
                                카페로, 감각적인 맛과 분위기를 모두 경험해보세요.
                            </p>
                        </div>
                        <div class="info no-pd-md--t">
                            <ul class="grid-col-3 no-gap-md ">
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>위치</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>신한카드홀 2층</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>영업시간</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        화요일 - 금요일 <br>
                                                        11 : 00분 - 20 : 00분
                                                    </p>
                                                </li>

                                                <li>
                                                    <p>
                                                        <b class="no-clr-text-primary">매주 월요일 휴무</b>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-regular fa-timer"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>문의</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>070 - 7724 - 0698</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="link no-pd-xl--t">
                            <div class="f ai-c jc-c">
                                <a href="https://map.naver.com/p/search/%EC%B9%B4%ED%8E%98%20%ED%95%84%EB%A1%9C%EC%8A%A4/place/960061966?placePath=?entry=pll&from=nx&fromNxList=true&searchType=place&c=15.00,0,0,0,dh"
                                    target="_blank" class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                    자세히 보기
                                    <span>
                                        <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </li>
            <!-- 오페라글라스 모달 -->
            <li class="modal-item " data-modal-id="opera">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 3 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/oprea_glass_img_<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="--box-wrap">
                            <div class="no-pd-sm--b">
                                <div class="--box-info ">
                                    <ul class="f fd-c no-gap-md">
                                        <li class="grid-col-2-10 no-gap-xs">
                                            <div class="--box-info-title">
                                                <h3>대여방법</h3>
                                            </div>
                                            <div class="--box-info-desc">
                                                <ul class="f fd-c no-gap-sm">
                                                    <li>
                                                        <p>
                                                            <a href="#">인터파크 티켓사이트</a>를 통한 사전 예약 후 현장 수령
                                                            수령 시, 실물 티켓, 오페라글라스 예약 내역서 확인 및 예약자 신분증 보관 후
                                                            이용
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="grid-col-2-10 no-gap-xs">
                                            <div class="--box-info-title">
                                                <h3>이용금액</h3>
                                            </div>
                                            <div class="--box-info-desc">
                                                <ul class="f fd-c no-gap-sm">
                                                    <li>
                                                        <p>
                                                            5,000원
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="grid-col-2-10 no-gap-xs">
                                            <div class="--box-info-title">
                                                <h3>수령위치</h3>
                                            </div>
                                            <div class="--box-info-desc">
                                                <ul class="f fd-c no-gap-sm">
                                                    <li>
                                                        <p>
                                                            신한카드홀 건물 2층 오페라글라스 대여 부스
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="grid-col-2-10 no-gap-xs">
                                            <div class="--box-info-title">
                                                <h3>수령 가능시간</h3>
                                            </div>
                                            <div class="--box-info-desc">
                                                <ul class="f fd-c no-gap-sm">
                                                    <li>
                                                        <p>
                                                            공연 시작 1시간 전 - 공연 시간 10분 전
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="grid-col-2-10 no-gap-xs">
                                            <div class="--box-info-title">
                                                <h3>예약하기</h3>
                                            </div>
                                            <div class="--box-info-desc">
                                                <ul class="f ai-c no-gap-sm md-fd-c">
                                                    <li class="--mobile-full">
                                                        <a href="#" class="no-btn no-arrow-btn no-btn__fill--primary">현재
                                                            공연
                                                            글라스
                                                            예약하기
                                                            <i class="fa-regular fa-arrow-up-right"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="--mobile-full">
                                                        <a href="#" class="no-btn no-arrow-btn no-btn__fill">차기
                                                            공연
                                                            글라스
                                                            예약하기
                                                            <i class="fa-regular fa-arrow-up-right"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="no-pd-md--t">
                                <div class="--box-notice">
                                    <ul class="f fd-c no-gap-md">
                                        <li class="grid-col-2-10 no-gap-xs">
                                            <div class="--box-info-title">
                                                <h3>주의사항</h3>
                                            </div>
                                            <div class="--box-info-desc --box-notice-desc">
                                                <ul class="f fd-c no-gap-xs">
                                                    <li>
                                                        <p>
                                                            현장 대여 수량은 공연시작 2시간 전부터 오페라글라스 대여 부스에서 확인하실 수
                                                            있습니다.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            당일 공연 관람자에 한해 본 서비스를 이용할 수 있으며, <br>
                                                            예약자 신분증 및
                                                            증빙서류(실물 티켓 및 오페라글라스 예약 내역서) 미지참 시 수령 불가합니다.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            사전예약은 공연 당일 3시간 전까지 가능합니다.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            파손 및 분실의 경우 고객 부담금이 발생합니다.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 객석 모달 -->
            <li class="modal-item " data-modal-id="seat">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 4 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/shinhan_card_hall_img_<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">신한카드홀</h4>
                            <h5 class="no-body-xl --fw-semibold no-pd-sm--t">신한카드홀은 국내 최대 규모의 뮤지컬 전용 대극장으로, 총 객석
                                3층(1,766석)으로 이루어져 있습니다.</h5>
                            <p class="--fw-regular no-pd-3xs--t">
                                객석 1층은 무대 끝 선과 객석 맨 뒷열의 거리가 약 27m로 어느 자리에서든 가깝게 무대를 바라볼 수 있으며, <br>
                                객석 2층은 1열 좌석에서 무대까지의 거리가 18.5m로 국내 최단 거리를 자랑합니다. 또한
                                신한카드홀 좌석은 교차 형식으로 배치되어 <br>관객 여러분의 편안한 관람을 경험할 수 있도록 설계되어 있습니다.
                            </p>
                            <p class="--fw-regular no-pd-3xs--t">
                                가장 편안하고 쾌적한 공연 관람이 되도록, 항상 배려하는 마음으로 서비스 연구에 매진하는 <br>
                                신한카드홀에서 뮤지컬의 뜨거운 열기와 무한한 감동을 가져가시기 바랍니다.
                            </p>
                        </div>
                        <div class="info no-pd-md--t">
                            <ul class="grid-col-3 no-gap-md ">
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>용도</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>뮤지컬 전용 공연장</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>좌석</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        <b class="no-clr-text-primary">
                                                            총 좌석수 1,766석
                                                        </b>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        1층 1,066석


                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        2층 430석

                                                    </p>
                                                </li>
                                                <li>
                                                    <p>

                                                        3층 270석
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>부대시설</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>VIP 분장실, 의상실, 세탁실, 그룹 분장실, 소품실 등</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="link no-pd-xl--t">
                            <div class="f ai-c jc-c">
                                <a href="<?=$ROOT?>/pages/intro/fac.php"
                                    class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                    자세히 보기
                                    <span>
                                        <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 스테이지 B 모달 -->
            <li class="modal-item " data-modal-id="stageB">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 4 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/fnb_stage_b_img_<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">스테이지B</h4>
                            <h5 class="no-body-xl --fw-semibold no-pd-sm--t">외식과 문화가 공존하는 예술의 공간</h5>
                            <p class="--fw-regular no-pd-3xs--t">
                                다양한 고품질 식재료로 완성된 트렌디한 메뉴를 선보이는 이탈리안 비스트로입니다.
                                천연 조미료와 산지에서 공수한 신선한 제철 재료를 사용하여 맛과 건강을 모두 충족시키는 브런치와 다이닝을 제공합니다.
                                미식의 예술과 문화적 풍요로움이 조화를 이루는 특별한 경험을 만나보세요.
                            </p>
                        </div>
                        <div class="info no-pd-md--t">
                            <ul class="grid-col-3 no-gap-md ">
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>위치</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>신한카드홀 1층 / 객석 3층</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>영업시간</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        화요일 - 일요일 <br>
                                                        11 : 30분 - 21 : 00
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <b class="no-clr-text-primary">매주 월요일 휴무</b>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-regular fa-timer"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>문의</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>02 - 6399 - 7545</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="link no-pd-xl--t">
                            <div class="f ai-c jc-c">
                                <a href="https://map.naver.com/p/entry/place/132236039?lng=127.0022708&lat=37.5408327&placePath=%2Fbooking%3Fentry%3Dplt&entry=plt&searchType=place&c=15.00,0,0,0,dh"
                                    target="_blank" class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                    자세히 보기
                                    <span>
                                        <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 솔로스 키친 모달 -->
            <li class="modal-item " data-modal-id="solo">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 3 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/fnb_solos_img_<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">솔로스 키친</h4>
                            <h5 class="no-body-xl --fw-semibold no-pd-sm--t">간편하면서도 풍성한 한 끼를 위한 특별한 공간</h5>
                            <p class="--fw-regular no-pd-3xs--t">
                                1인 고객을 위해 설계된 오리엔탈 푸드 전문점으로, <br>
                                다양한 트렌디한 메뉴를 통해 간편하면서도 푸짐한 식사를 제공합니다. 혼자서도 여유롭게 즐길 수 있는 맛있고 세련된 미식 경험을 선사합니다.
                            </p>
                        </div>
                        <div class="info no-pd-md--t">
                            <ul class="grid-col-3 no-gap-md ">
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>위치</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>신한카드홀 1층 / 객석 3층</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>영업시간</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        화요일 - 금요일 <br>
                                                        12 : 00분 - 21 : 30분
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        토요일 - 금요일 <br>
                                                        12 : 00분 - 20 : 30분
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <b class="no-clr-text-primary">매주 월요일 휴무</b>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-regular fa-timer" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>문의</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>02 - 6399 - 7544</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="--card-icon">
                                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="link no-pd-xl--t">
                            <div class="f ai-c jc-c">
                                <a href="https://map.naver.com/p/entry/place/267265992?lng=127.0029308&lat=37.5402956&placePath=%2Fhome&entry=plt&searchType=place&c=15.00,0,0,0,dh"
                                    target="_blank" class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                    자세히 보기
                                    <span>
                                        <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 물품보관소 모달 -->
            <li class="modal-item " data-modal-id="storage">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/storage_img_1.jpg" alt="">
                                    </figure>
                                </li>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="--box-wrap">
                            <ul>
                                <li class="">
                                    <div class="no-pd-sm--b">
                                        <div class="--box-info ">
                                            <ul class="f fd-c no-gap-md">
                                                <li class="grid-col-2-10 no-gap-sm">
                                                    <div class="--box-info-title">
                                                        <h3>위치</h3>
                                                    </div>
                                                    <div class="--box-info-desc">
                                                        <ul class="f fd-c no-gap-2xs">
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            신한카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            객석 1층 - B1F 물품보관소
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            마스터카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            객석 1층 - B3F 안내데스크 및 객석 1,2층(B1,B3)
                                                                            물품보관함
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="grid-col-2-10 no-gap-sm">
                                                    <div class="--box-info-title">
                                                        <h3>운영시간</h3>
                                                    </div>
                                                    <div class="--box-info-desc">
                                                        <ul class="f fd-c no-gap-2xs">
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            신한카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            공연 시작 1시간 전 - 공연 종료 후 15분 / 각 공연 사이
                                                                            미운영
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            마스터카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            로비 개방 시 - 공연 종료 후 15분 / 공연별 상이
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="no-pd-md--t">
                                        <div class="--box-notice">
                                            <ul class="f fd-c no-gap-md">
                                                <li class="grid-col-2-10 no-gap-sm">
                                                    <div class="--box-info-title">
                                                        <h3>주의사항</h3>
                                                    </div>
                                                    <div class="--box-info-desc --box-notice-desc">
                                                        <ul class="f fd-c no-gap-2xs">
                                                            <li>
                                                                <p>
                                                                    공연 관람객에 한하여 실물 티켓 확인 후 물품 보관이 가능합니다.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    음식물, 꽃다발의 경우 당일 수령 하지 않을 경우 운영시간 이후 폐기합니다.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    고가의 물품(현금, 유가 증권, 귀금속 등), 귀중품은 개인 소지해 주시고,
                                                                    파손 및 분실 시 책임지지 않습니다.
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="link no-pd-xl--t">
                        <div class="f ai-c jc-c">
                            <a href="<?=$ROOT?>/pages/intro/service.php" target=" _blank"
                                class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                자세히 보기
                                <span>
                                    <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- 마스터카드 모달 -->
    <div class="no-modal-master">
        <ul class="modal-wrap ">
            <!-- 객석 모달 -->
            <li class="modal-item " data-modal-id="seat">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <?php for ($i = 1; $i < 3 ; $i++) :?>
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/master_card_hall_img_<?=$i?>.jpg" alt="">
                                    </figure>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">마스터카드홀</h4>
                            <h5 class="no-body-xl --fw-semibold no-pd-sm--t">
                                마스터카드홀은 총 1,379석(스탠딩 2,800석) 규모의 진정한 라이브를 <br>
                                만들고 즐길 수 있도록 태어난 공연장입니다.</h5>
                            <p class="--fw-regular no-pd-3xs--t">
                                세계 최고의 D&B 음향 시스템과 좌석 변형이 가능한 객석 시스템을 갖추고 있습니다.
                            </p>
                            <p class="--fw-regular no-pd-3xs--t">
                                라이브 콘서트와 쇼케이스, 기업행사, 팬미팅 등 다양한 장르의 콘텐츠를 공연할 수 있는
                                최적의 시설을 갖추고 있으며 <br>
                                무대와 관객이 하나되는 강렬한 경험을 만끽하실 수 있습니다.
                            </p>
                        </div>
                        <div class="info no-pd-md--t">
                            <ul class="grid-col-3 no-gap-md ">
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>용도</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>콘서트, 쇼케이스, 팬미팅, 컨퍼런스, 기업행사 등</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>좌석</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        지정좌석형
                                                        <span class="no-clr-text-primary">1,379석</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        스탠딩
                                                        <span class="no-clr-text-primary">1,066석</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        2층
                                                        <span class="no-clr-text-primary">2,800명</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <li class="--card">
                                    <div class="--card-txt">
                                        <h3>부대시설</h3>
                                        <div class="--card-info">
                                            <ul>
                                                <li>
                                                    <p> VIP분장실, 그룹 분장실, 스탭 대기실, 스탭식당 등</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="link no-pd-xl--t">
                            <div class="f ai-c jc-c">
                                <a href="<?=$ROOT?>/pages/intro/fac.php"
                                    class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                    자세히 보기
                                    <span>
                                        <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 물품보관소 모달 -->
            <li class="modal-item " data-modal-id="storage">
                <div>
                    <div class="img">
                        <div class="swiper no-modal-swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <figure>
                                        <img src="<?=IMG_PATH?>/sub/storage_img_1.jpg" alt="">
                                    </figure>
                                </li>
                            </ul>
                            <div class="swiper-pagination no-modal-swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="txt">
                        <div class="--box-wrap">
                            <ul>
                                <li class="">
                                    <div class="no-pd-sm--b">
                                        <div class="--box-info ">
                                            <ul class="f fd-c no-gap-md">
                                                <li class="grid-col-2-10 no-gap-sm">
                                                    <div class="--box-info-title">
                                                        <h3>위치</h3>
                                                    </div>
                                                    <div class="--box-info-desc">
                                                        <ul class="f fd-c no-gap-2xs">
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            신한카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            객석 1층 - B1F 물품보관소
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            마스터카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            객석 1층 - B3F 안내데스크 및 객석 1,2층(B1,B3)
                                                                            물품보관함
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="grid-col-2-10 no-gap-sm">
                                                    <div class="--box-info-title">
                                                        <h3>운영시간</h3>
                                                    </div>
                                                    <div class="--box-info-desc">
                                                        <ul class="f fd-c no-gap-2xs">
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            신한카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            공연 시작 1시간 전 - 공연 종료 후 15분 / 각 공연 사이
                                                                            미운영
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <ul class="grid-col-2-10 no-gap-sm">
                                                                    <li>
                                                                        <span>
                                                                            마스터카드홀
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            로비 개방 시 - 공연 종료 후 15분 / 공연별 상이
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="no-pd-md--t">
                                        <div class="--box-notice">
                                            <ul class="f fd-c no-gap-md">
                                                <li class="grid-col-2-10 no-gap-sm">
                                                    <div class="--box-info-title">
                                                        <h3>주의사항</h3>
                                                    </div>
                                                    <div class="--box-info-desc --box-notice-desc">
                                                        <ul class="f fd-c no-gap-2xs">
                                                            <li>
                                                                <p>
                                                                    공연 관람객에 한하여 실물 티켓 확인 후 물품 보관이 가능합니다.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    음식물, 꽃다발의 경우 당일 수령 하지 않을 경우 운영시간 이후 폐기합니다.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    고가의 물품(현금, 유가 증권, 귀금속 등), 귀중품은 개인 소지해 주시고,
                                                                    파손 및 분실 시 책임지지 않습니다.
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="link no-pd-xl--t">
                                        <div class="f ai-c jc-c">
                                            <a href="<?=$ROOT?>/pages/intro/service.php"
                                                class="no-btn-arrow no-btn-arrow__fill--primary  ">
                                                자세히 보기
                                                <span>
                                                    <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- 개인정보처리방침 모달 -->
    <div class="no-modal-privacy">
        <ul class="modal-wrap">
            <!-- 개인정보처리방침 모달 -->
            <li class="modal-item" data-modal-id="privacy">
                <div>
                    <div class="txt">
                        <div class="title no-pd-md--b">
                            <h4 class="no-heading-lg --fw-bold">Privacy Policy</h4>
                            <p class="--fw-regular no-pd-3xs--t">
                                Here is the detailed description of the privacy policy. It includes information
                                about how we collect, use, and safeguard your personal information.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <article class="modal-close-btn-container">
        <button class="modal-close-btn ">
            <i class="fa-duotone fa-regular fa-xmark"></i>
        </button>
    </article>
</div>



</body>

</html>