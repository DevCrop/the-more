<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>
<?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>

<!-----INTRO---->

<main>
    <section class="no-main-hero">
        <div class="no-main-hero-swiper swiper">
            <ul class="swiper-wrapper">
                <?php for($i = 0; $i < 3; $i++): ?>
                <li class="swiper-slide">
                    <img src="<?=IMG_PATH?>/main/main_visual_img.png" alt="">
                    <figure class="no-container-xl">
                        <div class="clr-base-white">
                            <h3 class=" no-display-xs">
                                대표님은 사업에만 몰두하세요
                            </h3>
                            <p class="no-heading-sm">나라에서 제공하는 정부지원금, 저희가 받도록 도와드리겠습니다</p>
                        </div>
                    </figure>
                </li>
                <?php endfor; ?>
            </ul>
            <div class="no-container-xl">
                <div class="no-main-hero-else">
                    <div class="no-main-hero-pagination">
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="no-main-hero-btn">
                        <div class="swiper-button-prev no-btn-swiper no-btn-swiper__white">
                            <i class="fa-regular fa-arrow-left-long"></i>
                        </div>

                        <div class="swiper-button-next no-btn-swiper no-btn-swiper__white">
                            <i class="fa-regular fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-main-about">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap">
                    <hgroup>
                        <h2 class="no-heading-xl --fw-700">
                            A&Z PARTNERS
                        </h2>
                        <p class="no-body-xl">
                            복잡한 정부 지원사업을 분석하고, <br>
                            기업의 성장 단계에 맞는 자금을 정확하고 신속하게 연결합니다.
                        </p>
                    </hgroup>
                    <div class="no-btn-arrow no-btn-arrow__primary">
                        <a href="#">
                            View More
                            <div>
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="--cnt">
                    <div class="img no-radius-xs">
                        <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                    </div>
                    <div class="txt">
                        <span class="no-body-xl --fw-700 clr-primary-main">About Us</span>
                        <h3 class="no-heading-lg">
                            우리는 기업 맞춤형 <br>
                            정책자금 전문가입니다.
                        </h3>
                        <div class="no-section-xs--t">
                            <ul class="no-body-xl --list-text">
                                <li>
                                    정책자금, 복잡하고 어렵게 느껴지셨나요? A&Z 파트너스는 정부 정책자금의
                                    복잡한 절차와 요건을 누구보다 잘 이해하고, 기업이 필요한 자금을 빠르고 정확하게
                                    확보할 수 있도록 돕는 정책자금 솔루션 전문 기업입니다.
                                </li>
                                <li class="--fw-600 clr-text-heading">
                                    다년간의 경험과 데이터 기반 컨설팅을 바탕으로, 기업의 업종·규모·성장 단계에
                                    딱 맞는 맞춤형 자금 전략을 제시하며, 수많은 기업들이 안정적인 성장 기반을
                                    마련할 수 있도록 함께해왔습니다.
                                </li>
                                <li>
                                    우리는 단순한 컨설팅을 넘어, 정책자금을 통한 기업 성장의 파트너가 되고자 합니다. A&Z 파트너스와 함께라면, 복잡한 정책자금도 확실하고 간편하게
                                    해결할 수
                                    있습니다.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-main-service">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap">
                    <hgroup>
                        <h2 class="no-heading-xl --fw-700">
                            고민은 <span class="clr-primary-main">A&Z 파트너스</span>가 하겠습니다
                        </h2>
                        <p class="no-body-xl">
                            정부정책자금, 더이상 고민하지 마세요.
                        </p>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <ul>
                        <li class="no-radius-xs">
                            <div class="img ">
                                <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                            </div>
                            <div class="txt">
                                <h3 class="no-heading-lg">
                                    정부정책자금
                                </h3>
                                <div class="no-mg-lg--t">
                                    <ul class="no-body-xl --list-text">
                                        <li>
                                            정부정책자금은 중소기업과 자영업자를 위한저금리 대출로,
                                            자금난 해소와 사업 성장을 지원합니다. 낮은 이자율과 장기
                                            상환 혜택으로신용이 낮은 사업자도 재정 부담을 줄이고
                                            안정적인 성장을 도모할 수 있습니다.
                                        </li>
                                    </ul>
                                </div>
                                <div class="no-btn-arrow no-btn-arrow__primary no-mg-3xl--t">
                                    <a href="#">
                                        View More
                                        <div>
                                            <i class="fa-regular fa-arrow-right-long" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="no-radius-xs">
                            <div class="img ">
                                <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                            </div>
                            <div class="txt">
                                <h3 class="no-heading-lg">
                                    정부지원사업
                                </h3>
                                <div class="no-mg-lg--t">
                                    <ul class="no-body-xl --list-text">
                                        <li>
                                            정부지원사업은 기업의 성장을 돕기 위해 정부에서 제공하는
                                            다양한 자금 지원 프로그램입니다. 본앤사는 복잡한 지원사업을
                                            기업 맞춤형으로 분석하여 최적의 사업을 선별합니다.
                                        </li>
                                    </ul>
                                </div>
                                <div class="no-btn-arrow no-btn-arrow__primary no-mg-3xl--t">
                                    <a href="#">
                                        View More
                                        <div>
                                            <i class="fa-regular fa-arrow-right-long" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="no-radius-xs">
                            <div class="img ">
                                <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                            </div>
                            <div class="txt">
                                <h3 class="no-heading-lg">
                                    기업인증
                                </h3>
                                <div class="no-mg-lg--t">
                                    <ul class="no-body-xl --list-text">
                                        <li>
                                            기업인증 및 특허는 기업이 특정 기준이나 조건을 충족했음을
                                            공식적으로 증명받는 절차로, 신뢰성과 경쟁력을 강화하는 데
                                            중요한 역할을 합니다. 이를 통해 기업은 시장에서기술력과
                                            품질을 인정받고, 사업 기회를 확대할 수 있습니다.
                                        </li>
                                    </ul>
                                </div>
                                <div class="no-btn-arrow no-btn-arrow__primary no-mg-3xl--t">
                                    <a href="#">
                                        View More
                                        <div>
                                            <i class="fa-regular fa-arrow-right-long" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="no-sub-ceo">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <article class="">
                    <div class="img no-radius-sm">
                        <img src="<?=IMG_PATH?>/common/sub_ceo_img.png" alt="">
                    </div>
                    <div class=" --section-title-wrap ">
                        <hgroup>
                            <h2 class=" no-heading-lg --fw-700">
                                저 또한 중소기업 <br>
                                대표였습니다.
                            </h2>
                            <div class="no-mg-xl--t">
                                <ul class="no-body-xl --list-text">
                                    <li class="--fw-600 clr-text-heading">
                                        그러기에 정책자금의 중요성과 <br>
                                        어려움을 누구보다 잘 알고 있습니다.
                                    </li>
                                    <li>
                                        저희 A&Z 파트너스 솔루션은 경영컨설팅 회사로써, <br>
                                        정책자금 컨설팅 업무를 메인으로 하여
                                    </li>
                                    <li>
                                        금융사 및 여러 전문 업체와의 업무협약을 통한 동반 성장을 지향하고<br>
                                        함께하며 사업자금이 필요한 대한민국 기업들을 돕고 있습니다.
                                    </li>
                                </ul>
                                <div class="no-mg-md--t">
                                    <div class="--signature">
                                        A&Z 파트너스 대표 <span>홍길동</span>
                                    </div>
                                </div>
                            </div>
                        </hgroup>
                        <div class="no-mg-2xl--t">
                            <div class="--carrers ">
                                <ul class="">
                                    <li class="">
                                        <h4 class="no-heading-sm">Carrer</h4>
                                        <ul class=" --list-text no-mg-sm--t">
                                            <li>전) 중소벤처기업부 지원사업 평가위원</li>
                                            <li>전) ○○회계법인 정책자금 컨설팅 실장</li>
                                            <li>전) 기술보증기금 기업자금 전략 컨설턴트</li>
                                            <li>현) A&Z 파트너스 대표</li>
                                            <li>현) 한국중소기업정책자금연구소 자문위원</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4 class="no-heading-sm">Profile</h4>
                                        <ul class=" --list-text no-mg-sm--t">
                                            <li>중소기업 정책자금 컨설팅 경력 15년 이상</li>
                                            <li>누적 정책자금 유치 지원 사례 850건 이상</li>
                                            <li>총 유치 자금 1,000억 원 돌파</li>
                                            <li>기업 맞춤형 지원전략 설계 전문가</li>
                                            <li>정부 과제 평가 및 사후관리 전문위원 활동</li>
                                            <li>산업통상자원부 및 중기부 지원사업 다수 수행</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>
    <section class="no-main-case">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap">
                    <hgroup>
                        <h2 class="no-heading-xl --fw-700">
                            실제 정책자금 사례
                        </h2>
                        <p class="no-body-xl">
                            복잡한 정부 지원사업을 분석하고, <br>
                            기업의 성장 단계에 맞는 자금을 정확하고 신속하게 연결합니다.
                        </p>
                    </hgroup>
                    <div class="no-btn-arrow  no-btn-arrow__primary">
                        <a href="#">
                            View More
                            <div>
                                <i class="fa-regular fa-arrow-right-long" aria-hidden="true"></i>
                            </div>
                        </a>
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
        </div>
    </section>

    <section class="no-main-certi">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap">
                    <hgroup>
                        <h2 class="no-heading-xl --fw-700 --t-center">
                            개인별 최적화된 정책 솔루션으로
                            수많은 대표님들이 정책자금 확보를 하였습니다
                        </h2>
                    </hgroup>
                </div>
            </div>
            <div class="--cnt">
                <div class="line">
                </div>
                <div class="marquee no-mg-xl--t" wb-data="marquee" duration="40">
                    <ul class="marquee-content">
                        <?php for ($i = 1; $i < 6; $i ++ ):?>
                        <li class="marquee-item no-radius-md">
                            <img src="<?=IMG_PATH?>/main/certifi_img_<?=$i?>.png" alt="">
                        </li>
                        <?php endfor ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include_once $STATIC_ROOT . '/inc/layouts/process.php'; ?>

    <section class="no-main-youtube">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap ">
                    <hgroup>
                        <h2 class="no-heading-xl --fw-700">
                            Youtube
                        </h2>
                        <p class="no-body-xl">
                            복잡한 내용 이제는 유튜브에서 쉽고 간단하게 보실 수 있습니다
                        </p>
                    </hgroup>
                    <div class="no-btn-arrow__primary no-btn-arrow ">
                        <a href="#">
                            View More
                            <div>
                                <i class="fa-regular fa-arrow-right-long" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="--cnt">
                    <div class="no-main-youtube-swiper swiper">
                        <ul class="swiper-wrapper">
                            <?php for ($i = 0; $i < 7; $i++) : ?>
                            <li class="swiper-slide">
                                <a href="#">
                                    <figure class="no-radius-sm">
                                        <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                                    </figure>
                                    <div class="txt no-mg-sm--t">
                                        <h4 class="no-heading-xs">
                                            이번 달 놓치면 끝! 최신 정책자금 한눈에 ...
                                        </h4>
                                    </div>
                                </a>
                            </li>
                            <?php endfor; ?>
                        </ul>
                        <div class="swiper-button-next no-btn-swiper no-btn-swiper__primary">
                            <i class="fa-regular fa-arrow-right-long"></i>
                        </div>
                        <div class="swiper-button-prev no-btn-swiper no-btn-swiper__primary">
                            <i class="fa-regular fa-arrow-left-long"></i>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="no-main-contact">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap ">
                    <hgroup>
                        <h2 class="no-heading-xl --fw-700">
                            Contact Us
                        </h2>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <ul>
                        <li>
                            <div class="--box no-radius-md">
                                <div class="live-count">
                                    <h4 class="no-heading-sm">실시간 문의 현황</h4>
                                    <div id="counting" class="no-body-xl">
                                        현재 문의<span class="no-heading-sm clr-primary-main">28</span>건
                                    </div>
                                </div>
                                <div class="--listing-table no-mg-md--t">
                                    <table>
                                        <colgroup>
                                            <col style="width: 30%;">
                                            <col style="width: 40%;">
                                            <col style="width: 30%;">
                                        </colgroup>
                                        <thead class="--fw-600 no-body-lg">
                                            <tr>
                                                <th>날짜</th>
                                                <th>이름</th>
                                                <th>상담내용</th>
                                            </tr>
                                        </thead>
                                        <tbody class="no-body-lg">
                                            <?php for ($i = 0; $i < 20; $i++) : ?>
                                            <tr>
                                                <td>25.03.01</td>
                                                <td class="--fw-600">홍길동</td>
                                                <td>정책자금</td>
                                            </tr>
                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="--box no-radius-md">
                                <div class="live-count">
                                    <h4 class="no-heading-sm">상담 신청서 작성</h4>
                                </div>
                                <div class="no-mg-md--t">
                                    <form action="">
                                        <fieldset>
                                            <legend class="--blind">상담 신청 문의 FORM</legend>
                                            <div class="no-form-container">
                                                <div class="no-form-group">
                                                    <div class="no-form-item">
                                                        <label for="">업체명</label>
                                                        <input type="text" class="no-form-control"
                                                            placeholder="업체명을 입력해주세요">
                                                    </div>
                                                    <div class="no-form-item">
                                                        <label for="">대표자명</label>
                                                        <input type="text" class="no-form-control"
                                                            placeholder="대표자명을 입력해주세요">
                                                    </div>
                                                </div>
                                                <div class="no-form-group">
                                                    <div class="no-form-item">
                                                        <label for="">연락처</label>
                                                        <input type="text" class="no-form-control"
                                                            placeholder="연락처를 입력해주세요">
                                                    </div>
                                                    <div class="no-form-item">
                                                        <label for="">이메일</label>
                                                        <input type="text" class="no-form-control"
                                                            placeholder="이메일을 입력해주세요">
                                                    </div>
                                                </div>
                                                <div class="no-form-group">
                                                    <div class="no-form-item">
                                                        <label for="">설립연도</label>
                                                        <input type="date" class="no-form-control"
                                                            placeholder="설립연도를 선택해주세요">
                                                    </div>
                                                    <div class="no-form-item">
                                                        <label for="">업종</label>
                                                        <div class="dropdown">
                                                            <div class="select">
                                                                <span>제조업</span>
                                                                <i class="fa-light fa-chevron-down"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                            <input type="hidden" name="industry" value="제조업">
                                                            <ul class="dropdown-menu api-dropdown-menu">
                                                                <li data-value="제조업" class="selected">제조업</li>
                                                                <li data-value="정보통신업">정보통신업</li>
                                                                <li data-value="도소매업">도소매업</li>
                                                                <li data-value="운수업">운수업</li>
                                                                <li data-value="건설업">건설업</li>
                                                                <li data-value="농림어업">농림어업</li>
                                                                <li data-value="숙박 및 음식점업">숙박 및 음식점업</li>
                                                                <li data-value="금융 및 보험업">금융 및 보험업</li>
                                                                <li data-value="교육 서비스업">교육 서비스업</li>
                                                                <li data-value="부동산업">부동산업</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="no-form-group">
                                                    <div class="no-form-item">
                                                        <label for="">지역</label>
                                                        <div class="dropdown">
                                                            <div class="select">
                                                                <span>서울</span>
                                                                <i class="fa-light fa-chevron-down"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                            <input type="hidden" name="region" value="서울">
                                                            <ul class="dropdown-menu api-dropdown-menu">
                                                                <li data-value="서울" class="selected">서울</li>
                                                                <li data-value="부산">부산</li>
                                                                <li data-value="대구">대구</li>
                                                                <li data-value="인천">인천</li>
                                                                <li data-value="광주">광주</li>
                                                                <li data-value="대전">대전</li>
                                                                <li data-value="울산">울산</li>
                                                                <li data-value="세종">세종</li>
                                                                <li data-value="경기">경기</li>
                                                                <li data-value="강원">강원</li>
                                                                <li data-value="충북">충북</li>
                                                                <li data-value="충남">충남</li>
                                                                <li data-value="전북">전북</li>
                                                                <li data-value="전남">전남</li>
                                                                <li data-value="경북">경북</li>
                                                                <li data-value="경남">경남</li>
                                                                <li data-value="제주">제주</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="no-form-item">
                                                        <label for="">연매출</label>
                                                        <div class="dropdown">
                                                            <div class="select">
                                                                <span>1억원 미만</span>
                                                                <i class="fa-light fa-chevron-down"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                            <input type="hidden" name="revenue" value="1억원 미만">
                                                            <ul class="dropdown-menu api-dropdown-menu">
                                                                <li data-value="1억원 미만" class="selected">1억원 미만</li>
                                                                <li data-value="1억 ~ 5억원">1억 ~ 5억원</li>
                                                                <li data-value="5억 ~ 10억원">5억 ~ 10억원</li>
                                                                <li data-value="10억 ~ 50억원">10억 ~ 50억원</li>
                                                                <li data-value="50억 이상">50억 이상</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="no-form-item">
                                                    <label>웹사이트 방문 경로 (중복 선택 가능)</label>
                                                    <ul class="checkbox">
                                                        <li>
                                                            <label for="visit_friend">
                                                                <input type="checkbox" name="visit_path[]"
                                                                    id="visit_friend" value="지인 추천">
                                                                <span>지인 추천 </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label for="visit_google">
                                                                <input type="checkbox" name="visit_path[]"
                                                                    id="visit_google" value="구글">
                                                                <span>구글 </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label for="visit_naver">
                                                                <input type="checkbox" name="visit_path[]"
                                                                    id="visit_naver" value="네이버">
                                                                <span>네이버 </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label for="visit_sns">
                                                                <input type="checkbox" name="visit_path[]"
                                                                    id="visit_sns" value="SNS">
                                                                <span>SNS</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label for="visit_etc">
                                                                <input type="checkbox" name="visit_path[]"
                                                                    id="visit_etc" value="기타">
                                                                <span>기타 </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label for="visit_offline">
                                                                <input type="checkbox" name="visit_path[]"
                                                                    id="visit_offline" value="오프라인 광고">
                                                                <span>오프라인 광고 </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="no-form-checkbox">
                                                    <input type="checkbox" name="check" id="check" class="check">
                                                    <label for="check"></label>
                                                    <label for="check">
                                                        <button type="button">개인정보 수집 및 이용 동의 약관</button>
                                                        의 내용을 읽었고 이에 동의합니다.
                                                    </label>
                                                </div>
                                                <div class="no-form-item">

                                                    <div class="no-form-captcha">
                                                        <img src="<?=IMG_PATH?>/form/Captcha.png" alt="captcha">
                                                        <input type="text" name="r_captcha" id="r_captcha" maxlength="5"
                                                            placeholder="스팸방지 5자리를 입력해 주세요" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="no-form-action">
                                                    <button>문의 하기</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </section>
    <section class="no-main-client">
        <div class="no-section-xs">
            <div class="marquee " wb-data="marquee" duration="40">
                <ul class="marquee-content">
                    <?php for ($i = 1; $i < 6; $i ++ ):?>
                    <li class="marquee-item no-radius-md">
                        <img src="<?=IMG_PATH?>/main/client_img_<?=$i?>.png" alt="">
                    </li>
                    <?php endfor ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="no-main-info">
        <ul>
            <li class="info">
                <div class="no-section-lg">
                    <div class="no-container-xl">
                        <div class="--section-title-wrap ">
                            <hgroup>
                                <span class="no-body-xl --fw-700 clr-primary-main">오시는 길</span>
                                <h2 class="no-heading-xl --fw-700">
                                    컨설팅의 시작, <br>
                                    A&Z 파트너스
                                </h2>
                                <p class="no-body-xl">
                                    정책자금, 지금이 시작할 때입니다. A&Z 파트너스는 <br>
                                    언제나 여러분의 문의를 기다리고 있습니다. 기업의 성장 단계와 <br>
                                    상황에 맞는 맞춤형 솔루션을 지금 바로 상담해보세요.
                                </p>
                            </hgroup>

                        </div>
                        <div class="--cnt">
                            <h4 class="no-heading-xs">INFORMATION</h4>
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>주소</p>
                                    </div>
                                    <span>
                                        대구광역시 북구 원대로103, 2층
                                    </span>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="fa-solid fa-phone"></i>
                                        <p>전화번호</p>
                                    </div>
                                    <span>
                                        010 - 8973 - 2382
                                    </span>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="fa-solid fa-envelope"></i>
                                        <p>이메일</p>
                                    </div>
                                    <span>
                                        ansghks642@nate.com
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="map">
                <div id="daumRoughmapContainer1744358549228" class="root_daum_roughmap root_daum_roughmap_landing">
                </div>

            </li>
        </ul>
    </section>

</main>
<script charset="UTF-8" class="daum_roughmap_loader_script"
    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<script charset="UTF-8">
new daum.roughmap.Lander({
    "timestamp": "1744358549228",
    "key": "2noms",
}).render();
</script>

<?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>