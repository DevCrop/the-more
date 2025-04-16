<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.php';
?>



<main class="no-sub">
    <section class="no-sub-benefits">
        <div class="no-section-lg">
            <div class="no-container-3xl">
                <div class="--sub-section-title-wrap">
                    <hgroup>
                        <h2 class="no-display-xs">Only the Best. Always</h2>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <ul>
                        <li>
                            <figure>
                                <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                            </figure>
                            <div class="txt">
                                <h4 class="no-heading-xl">Professional Training</h4>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                            </figure>
                            <div class="txt">
                                <h4 class="no-heading-xl">Branded Content Support</h4>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                            </figure>
                            <div class="txt">
                                <h4 class="no-heading-xl">1:1 Feedback & Mentoring</h4>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                            </figure>
                            <div class="txt">
                                <h4 class="no-heading-xl">Studio & Equipment Access</h4>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                            </figure>
                            <div class="txt">
                                <h4 class="no-heading-xl">Legal & Tax Advisory</h4>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="<?=IMG_PATH?>/common/image_placeholder.png" alt="">
                            </figure>
                            <div class="txt">
                                <h4 class="no-heading-xl">Brand Management & Growth</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>





<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
?>