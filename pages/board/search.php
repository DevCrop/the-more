<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
?>


<!-- contents -->
<main class="no-sub no-pd-md--t">
    <section class="no-pd-2xl--y">
        <div class="no-container-md">
            <div class="no-sub-search">
                <div class="no-sub-search__input">
                    <form>
                        <h4 class="no-body-xl">Your search</h4>
                        <div class="no-pd-sm--t">
                            <div class="no-form-search">
                                <input type="text" name="search_term" id="search_term" placeholder="검색어를 입력해주세요."
                                    value="테스트">
                                <button type="submit" class="no-form-search-icon">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="no-sub-search__result no-pd-lg--y">
                    <h4 class="no-heading-md">검색 결과</h4>
                    <div class="no-pd-md--t">
                        <ul class="no-sub-search__list">
                            <li class="no-sub-search__item --card">
                                <a
                                    href="/pages/board/board.view.php?board_no=73&amp;no=949&amp;category_no=0&amp;skin=web&amp;searchKeyword=&amp;searchColumn=&amp;page=">
                                    <h5>[Exhibition Invitation]KIMES 2017 – Seoul, Korea (March 16 ~ 19, 2017)</h5>
                                    <span>2024-08-30 14:50:22</span>
                                </a>
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