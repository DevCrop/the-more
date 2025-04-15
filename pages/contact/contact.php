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
    <section class="no-sub-inquiry">
        <div class="no-section-lg">
            <div class="no-container-lg ">
                <div class="--section-title-wrap">
                    <hgroup>
                        <h2 class="no-heading-md --fw-700">
                            무엇이든 물어보세요
                        </h2>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <form action="">
                        <fieldset>
                            <legend class="--blind">상담 신청 문의 FORM</legend>
                            <div class="no-form-container">
                                <div class="no-form-group">
                                    <div class="no-form-item">
                                        <label for="">업체명</label>
                                        <input type="text" class="no-form-control" placeholder="업체명을 입력해주세요">
                                    </div>
                                    <div class="no-form-item">
                                        <label for="">대표자명</label>
                                        <input type="text" class="no-form-control" placeholder="대표자명을 입력해주세요">
                                    </div>
                                </div>
                                <div class="no-form-group">
                                    <div class="no-form-item">
                                        <label for="">연락처</label>
                                        <input type="text" class="no-form-control" placeholder="연락처를 입력해주세요">
                                    </div>
                                    <div class="no-form-item">
                                        <label for="">이메일</label>
                                        <input type="text" class="no-form-control" placeholder="이메일을 입력해주세요">
                                    </div>
                                </div>
                                <div class="no-form-group">
                                    <div class="no-form-item">
                                        <label for="">설립연도</label>
                                        <input type="date" class="no-form-control" placeholder="설립연도를 선택해주세요">
                                    </div>
                                    <div class="no-form-item">
                                        <label for="">업종</label>
                                        <div class="dropdown">
                                            <div class="select">
                                                <span>제조업</span>
                                                <i class="fa-light fa-chevron-down" aria-hidden="true"></i>
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
                                                <i class="fa-light fa-chevron-down" aria-hidden="true"></i>
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
                                                <i class="fa-light fa-chevron-down" aria-hidden="true"></i>
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
                                                <input type="checkbox" name="visit_path[]" id="visit_friend"
                                                    value="지인 추천">
                                                <span>지인 추천 </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="visit_google">
                                                <input type="checkbox" name="visit_path[]" id="visit_google" value="구글">
                                                <span>구글 </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="visit_naver">
                                                <input type="checkbox" name="visit_path[]" id="visit_naver" value="네이버">
                                                <span>네이버 </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="visit_sns">
                                                <input type="checkbox" name="visit_path[]" id="visit_sns" value="SNS">
                                                <span>SNS</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="visit_etc">
                                                <input type="checkbox" name="visit_path[]" id="visit_etc" value="기타">
                                                <span>기타 </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="visit_offline">
                                                <input type="checkbox" name="visit_path[]" id="visit_offline"
                                                    value="오프라인 광고">
                                                <span>오프라인 광고 </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="no-form-checkbox">
                                        <input type="checkbox" name="check" id="check" class="check">
                                        <label for="check"></label>
                                        <label for="check">
                                            개인정보 수집 및 이용 동의 약관
                                            의 내용을 읽었고 이에 동의합니다.
                                        </label>
                                    </div>
                                    <div class="no-form-privacy no-mg-sm--t">
                                        <div class="no-form-privacy-box">
                                            <b class="--fw-600"> A&Z 파트너스(이하 ‘회사’)는 「개인정보 보호법」에 따라 이용자의 개인정보를 보호하며, <br>
                                                관련한
                                                고충을
                                                신속하고 원활하게 처리하기 위해
                                                다음과</b>
                                            같은 처리방침을 운영합니다.<br><br>

                                            1. 수집하는 개인정보 항목<br>
                                            - 필수 항목: 이름, 연락처(전화번호, 이메일), 회사명<br>
                                            - 선택 항목: 문의 내용, 서비스 이용기록<br><br>

                                            2. 개인정보 수집 방법<br>
                                            - 웹사이트 문의 양식, 이메일, 전화 등<br><br>

                                            3. 개인정보 이용 목적<br>
                                            - 상담 및 문의 대응<br>
                                            - 정책자금 관련 서비스 제공<br>
                                            - 고객 관리 및 서비스 개선<br><br>

                                            4. 개인정보 보유 및 이용기간<br>
                                            - 수집일로부터 1년 또는 관련 법령에 따른 보존 기간까지<br><br>

                                            5. 개인정보의 제3자 제공<br>
                                            - 회사는 이용자의 동의 없이 개인정보를 외부에 제공하지 않습니다.<br><br>

                                            6. 개인정보 처리 위탁<br>
                                            - 원활한 서비스 제공을 위해 일부 업무를 외부 전문업체에 위탁할 수 있으며, 이 경우 사전 고지 후 동의를 받습니다.<br><br>

                                            7. 이용자의 권리 및 행사 방법<br>
                                            - 개인정보 열람, 정정, 삭제, 처리정지 요청 가능<br>
                                            - 요청 시 지체 없이 조치합니다.<br><br>

                                            8. 개인정보 보호책임자<br>
                                            - 이름: 홍길동<br>
                                            - 연락처: 02-1234-5678 / azpartners@email.com<br><br>

                                            ※ 본 방침은 2025년 4월 11일부터 적용됩니다.

                                        </div>
                                    </div>
                                </div>
                                <div class="no-form-group">
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

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </section>

</main>





<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>