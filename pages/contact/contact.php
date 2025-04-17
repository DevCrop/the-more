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

    <section class="no-main-inquiry">
        <div class="no-section-lg">
            <div class="no-container-3xl">
                <div class="no-main-inquiry__inner">

                    <div class="form">
                        <form action="">
                            <fieldset>
                                <div class="left">
                                    <h2 class="no-display-xs">Contact Us</h2>
                                    <p class="no-body-xl --fw-400 no-mg-lg--t">
                                        당신이 상상한 무드, 우리가 장면으로 완성합니다. <br>
                                        협업, 프로젝트, 단순한 궁금증까지 언제든 더모어에게 이야기해 주세요. <br>
                                        당신의 다음 장면을 기다리고 있습니다.
                                    </p>
                                </div>
                                <div class="right">
                                    <legend class="--blind">상담 신청 문의 FORM</legend>
                                    <div class="no-form-container">

                                        <div class="no-form-group">
                                            <div class="no-form-item">
                                                <label for="name">성함</label>
                                                <input type="text" class="no-form-control" id="name" name="name"
                                                    placeholder="성함을 입력해주세요">
                                            </div>
                                            <div class="no-form-item">
                                                <label for="age">나이</label>
                                                <input type="text" class="no-form-control" id="age" name="age"
                                                    placeholder="나이를 입력해주세요">
                                            </div>
                                        </div>
                                        <div class="no-form-group">
                                            <div class="no-form-item">
                                                <label for="phone">연락처</label>
                                                <input type="text" class="no-form-control" id="phone" name="phone"
                                                    placeholder="연락처를 입력해주세요">
                                            </div>
                                            <div class="no-form-item">
                                                <label for="address">주소</label>
                                                <input type="text" class="no-form-control" id="address" name="address"
                                                    placeholder="주소를 입력해주세요">
                                            </div>
                                        </div>
                                        <div class="no-form-group">
                                            <div class="no-form-item">
                                                <label>웹사이트 방문 경로 (중복 선택 가능)</label>
                                                <ul class="radio">
                                                    <li>
                                                        <label for="gender_male">
                                                            <input type="radio" name="gender" id="gender_male"
                                                                value="남">
                                                            <span>남</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label for="gender_female">
                                                            <input type="radio" name="gender" id="gender_female"
                                                                value="여">
                                                            <span>여</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="no-form-item">
                                                <label for="industry">지원 항목</label>
                                                <div class="dropdown">
                                                    <div class="select">
                                                        <span>보컬</span>
                                                        <i class="fa-light fa-chevron-down" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="hidden" name="industry" value="보컬">
                                                    <ul class="dropdown-menu api-dropdown-menu" data-lenis-prevent>
                                                        <li data-value="보컬" class="selected">보컬</li>
                                                        <li data-value="댄스">댄스</li>
                                                        <li data-value="연기">연기</li>
                                                        <li data-value="모델">모델</li>
                                                        <li data-value="크리에이터">크리에이터</li>
                                                        <li data-value="작곡/작사">작곡/작사</li>
                                                        <li data-value="프로듀서">프로듀서</li>
                                                        <li data-value="방송 진행">방송 진행</li>
                                                        <li data-value="기타">기타</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="no-form-item">
                                            <label for="career">경력사항</label>
                                            <textarea class="no-form-control no-form-text" id="career" name="career"
                                                placeholder="경력사항을 입력해주세요"></textarea>
                                        </div>
                                        <div class="no-form-file">
                                            <label for="half_body_photo">
                                                <p>반신 사진</p>
                                                <div class="no-form-file no-file-control">
                                                    <input type="text" class="no-fake-file" id="half_body_photo_txt"
                                                        placeholder="본인의 반신 사진을 업로드 해주세요" readonly disabled>
                                                    <div class="no-file-box">
                                                        <input type="file" id="half_body_photo" name="half_body_photo"
                                                            onchange="document.getElementById('half_body_photo_txt').value = this.value">
                                                        <div></div>
                                                        <button type="button" class="no-btn ">
                                                            파일첨부하기
                                                            <i class="fa-solid fa-up-from-bracket"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="no-form-file">
                                            <label for="full_body_photo">
                                                <p>전신 사진</p>
                                                <div class="no-form-file no-file-control">
                                                    <input type="text" class="no-fake-file" id="full_body_photo_txt"
                                                        placeholder="본인의 전신 사진을 업로드 해주세요" readonly disabled>
                                                    <div class="no-file-box">
                                                        <input type="file" id="full_body_photo" name="full_body_photo"
                                                            onchange="document.getElementById('full_body_photo_txt').value = this.value">
                                                        <div></div>
                                                        <button type="button" class="no-btn">
                                                            파일첨부하기
                                                            <i class="fa-solid fa-up-from-bracket"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="no-form-item">
                                            <div class="no-form-captcha">
                                                <img src="<?=IMG_PATH?>/form/Captcha.png" alt="captcha">
                                                <input type="text" class="no-form-control" name="r_captcha"
                                                    id="r_captcha" maxlength="5" placeholder="스팸방지문자 5글자를 입력해주세요"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="no-form-checkbox">
                                            <input type="checkbox" name="check" id="check" class="check">
                                            <label for="check"></label>
                                            <label for="check">
                                                개인정보 수집 및 이용 동의 약관의 내용을 읽었고 이에 동의합니다.
                                            </label>
                                        </div>

                                        <div class="no-form-action">
                                            <button type="button" onclick="doRequest()">SUBMIT</button>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-sub-map">
        <div class="no-section-lg">
            <div class="no-container-3xl">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6326.997203918442!2d127.12741771049615!3d37.543315056721106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cb004db988ef5%3A0x7b644874d441ae44!2z7ISc7Jq47Yq567OE7IucIOqwleuPmeq1rCDsspzspJHroZw!5e0!3m2!1sko!2skr!4v1744868549324!5m2!1sko!2skr"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="txt no-mg-xl--t">
                    <div class="title">
                        <h3 class="no-display-xs">오시는 길</h3>
                    </div>
                    <ul>
                        <li>
                            <h4 class="no-body-xl">Address</h4>
                            <p class="no-heading-xs">서울특별시 강동구 천중로 264 상가동 2층 201, 206호(길동, 강동 헤리티지 자이)</p>
                        </li>
                        <li>
                            <h4 class="no-body-xl">Phone</h4>
                            <p class="no-heading-xs">000-0000-0000</p>
                        </li>
                        <li>
                            <h4 class="no-body-xl">Email</h4>
                            <p class="no-heading-xs">themore@enter.net</p>
                        </li>
                        <li>
                            <h4 class="no-body-xl">Fax</h4>
                            <p class="no-heading-xs">00-0000-0000</p>
                        </li>
                </div>
            </div>
    </section>
</main>





<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>