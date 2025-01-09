<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.works.php';
?>



<!-- contents -->






<main class="no-board">
    <section class="no-pd-2xl--b">
        <div class="no-skin-gallery">
            <div class="no-container-2xl">
                <div class="no-form-head">
                    <div class="no-form-head-top">
                        <div class="no-date-wrap">
                            <div class="no-date-box">
                                <button class="no-date-btn" type="button">
                                    <i class="fa-regular fa-calendar"></i>
                                </button>
                                <ul class="no-date-list" data-lenis-prevent>
                                    <ul>
                                        <li>
                                            <label for="date_2025">
                                                <input type="radio" id="date_2025" name="year" value="2025">
                                                <span>2025</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2024">
                                                <input type="radio" id="date_2024" name="year" value="2024">
                                                <span>2024</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2023">
                                                <input type="radio" id="date_2023" name="year" value="2023">
                                                <span>2023</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2022">
                                                <input type="radio" id="date_2022" name="year" value="2022">
                                                <span>2022</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2021">
                                                <input type="radio" id="date_2021" name="year" value="2021">
                                                <span>2021</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2020">
                                                <input type="radio" id="date_2020" name="year" value="2020">
                                                <span>2020</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2019">
                                                <input type="radio" id="date_2019" name="year" value="2019">
                                                <span>2019</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2018">
                                                <input type="radio" id="date_2018" name="year" value="2018">
                                                <span>2018</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2017">
                                                <input type="radio" id="date_2017" name="year" value="2017">
                                                <span>2017</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2016">
                                                <input type="radio" id="date_2016" name="year" value="2016">
                                                <span>2016</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2015">
                                                <input type="radio" id="date_2015" name="year" value="2015">
                                                <span>2015</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2014">
                                                <input type="radio" id="date_2014" name="year" value="2014">
                                                <span>2014</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2013">
                                                <input type="radio" id="date_2013" name="year" value="2013">
                                                <span>2013</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2012">
                                                <input type="radio" id="date_2012" name="year" value="2012">
                                                <span>2012</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="date_2011">
                                                <input type="radio" id="date_2011" name="year" value="2011">
                                                <span>2011</span>
                                            </label>
                                        </li>
                                    </ul>

                                </ul>
                            </div>
                        </div>

                        <div class="no-search-wrap ">
                            <div class="no-search">
                                <button type="button">
                                    <!-- <input type="text" name="search_term" id="search_term"> -->
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="no-form-row no-form-head-bottom">
                        <div class="no-form-group ">
                            <h4 class="no-body-lg --fw-medium">공연장</h4>
                            <div class="no-form-radio ">
                                <ul class="" id="no-theater-hook">
                                    <li>
                                        <label for="extra4_all" class="no-filing-btn">
                                            <input type="radio" name="extra4" id="extra4_all" value="all" checked>
                                            <span>
                                                <p>전체</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="extra4_1" class="no-filing-btn">
                                            <input type="radio" name="extra4" id="extra4_1" value="신한카드홀">
                                            <span>
                                                <p>신한카드홀</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>


                                        <label for="extra_4_2" class="no-filing-btn">
                                            <input type="radio" name="extra4" id="extra_4_2" value="마스터카드홀">
                                            <span>
                                                <p>마스터카드홀</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>

                                        <label for="extra_4_3" class="no-filing-btn">
                                            <input type="radio" name="extra4" id="extra_4_3" value="NEMO">
                                            <span>
                                                <p>NEMO</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>

                                        <label for="extra_4_4" class="no-filing-btn">
                                            <input type="radio" name="extra4" id="extra_4_4" value="이벤트">
                                            <span>
                                                <p>이벤트</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="no-form-group">
                            <h4 class="no-body-lg --fw-medium">진행 현황</h4>
                            <div class="no-form-radio " id="no-catg-hook">
                                <ul class="">
                                    <li>
                                        <label for="category_no_all" class="no-filing-btn">
                                            <input type="radio" name="category_no" id="category_no_all" value="all">
                                            <span>
                                                <p>전체</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>

                                    <li>

                                        <label for="category_no_21" class="no-filing-btn">
                                            <input type="radio" checked name="category_no" id="category_no_21"
                                                value="21">
                                            <span>
                                                <p>진행 · 예정작</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>

                                    </li>
                                    <li>

                                        <label for="category_no_22" class="no-filing-btn">
                                            <input type="radio" name="category_no" id="category_no_22" value="22">
                                            <span>
                                                <p>종료작</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="no-form-group ">
                            <h4 class="no-body-lg --fw-medium">장르</h4>
                            <div class="no-form-radio  ">
                                <ul class="" id="no-genre-hook">
                                    <li>
                                        <label for="extra1_all" class="no-filing-btn">
                                            <input type="radio" name="extra1" id="extra1_all" value="all" checked>
                                            <span>
                                                <p>전체</p>
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>

                                        <label for="extra_1_1" class="no-filing-btn">
                                            <input type="radio" name="extra1" id="extra_1_1" value="콘서트">
                                            <span>
                                                콘서트
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>

                                        <label for="extra_1_2" class="no-filing-btn">
                                            <input type="radio" name="extra1" id="extra_1_2" value="뮤지컬">
                                            <span>
                                                뮤지컬
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="extra_1_3" class="no-filing-btn">
                                            <input type="radio" name="extra1" id="extra_1_3" value="팬미팅">
                                            <!-- 수정된 id -->
                                            <span>
                                                팬미팅
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="extra_1_4" class="no-filing-btn">
                                            <input type="radio" name="extra1" id="extra_1_4" value="공연">
                                            <span>
                                                공연
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="extra_1_5" class="no-filing-btn">
                                            <input type="radio" name="extra1" id="extra_1_5" value="이벤트">
                                            <span>
                                                이벤트
                                            </span>
                                            <div class="no-filing-btn-circle"></div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cnt no-pd-xl--t">
                    <ul class="grid-col-4 no-gap-lg no-skin-gallery-wrap visible-smooth">
                        <?php for ($i = 1 ; $i < 12; $i++) :?>
                        <li class="no-skin-gallery-item">
                            <a href="#" data-cursor-text="See Project" data-cursor="-project">
                                <figure>
                                    <img src="<?=IMG_PATH?>/works/gallery_img_1.png" alt="">
                                </figure>
                                <div class="no-skin-gallery-item__txt no-pd-sm--t">
                                    <span>콘서트</span>
                                    <h3 class="no-heading-sm --fw-bold">sss</h3>
                                    <div class="f ai-c no-gap-3xs">
                                        <div class="tag">2024.10.01 - 10.01</div>
                                        <div class="tag">신한카드몰</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endfor ;?>
                    </ul>
                </div>
            </div>
    </section>
</main>



<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>