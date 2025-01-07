<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
?>


<!-- contents -->
<main class="no-sub">
    <section class="no-sub-inquiry-none">
        <div class="no-container-xl">
            <div class="no-sub-inquiry-none__inner">
                <div class="icon">
                    <?php getLordIcon("alram.json", "loop");?>
                </div>
                <div class="no-pd-lg--t">
                    <div class="title --t-center">
                        <h2 class="no-heading-lg">현재는 문의기간이 아닙니다.</h2>
                        <p class="no-body-lg no-pd-md--t">
                            현재는 블루스퀘어 대관신청기간이 아닙니다. <br>
                            신청기간에 다시 문의하여 주시면 감사하겠습니다.
                        </p>
                    </div>
                </div>
                <div class="no-form-action">
                    <a href="/" class="no-btn no-btn__fill--blur --form-radius">
                        홈으로 가기
                        <i class="fa-regular fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>