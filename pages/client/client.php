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
    <section class="no-sub-client">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap ">
                    <hgroup>
                        <h2 class="no-heading-lg --fw-700">
                            Client
                        </h2>
                        <p class="no-body-xl">
                            복잡한 내용 이제는 유튜브에서 쉽고 간단하게 보실 수 있습니다
                        </p>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <ul class="">
                        <?php for ($i = 1; $i < 16; $i ++ ):?>
                        <li class="">
                            <img src=" <?=IMG_PATH?>/main/client_img_<?=$i?>.png" alt="">
                        </li>
                        <?php endfor ?>
                    </ul>

                </div>

            </div>
        </div>
    </section>
</main>









<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>