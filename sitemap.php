<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>
<?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>
<style>
    .no-sub-sitemap a:hover {
        text-decoration: underline;
        }

</style>



<!-- css, js  -->
<main class="no-sub-sitemap">
    <div class="no-container-2xl">
        <menu class="no-section-lg" >
            <h2 class="fm-title no-heading-2">SCHOOL SITEMAP</h2>
            <ul class="grid-col-2  no-gap-7 no-pd-7--top">
                <?php foreach ($MENU_ITEMS as $di => $depth): 
                    $depth_active = $depth['isActive'] ? 'active' : '';  
                    ?>
                <li class=" <?=$depth_active?>">
                    <h5 class="no-heading-6 fw-700"><?=$depth['title']?></h5>
                    <?php if(array_key_exists('pages', $depth) && count($depth['pages']) > 0) :?>
                        <div class="box-bg no-mg-3--top">
                            <ul class="">
                                <?php foreach ($depth['pages'] as $pi => $PAGE): 
                                    $page_active = $PAGE['isActive'] ? 'active' : '';    
                                    ?>
                                <li class=" <?=$page_active?>">
                                    <a href="<?=$PAGE['path']?>" class="d-ib">
                                        <p class="no-body-3 clr-gray-800 bullet no-mg-1--top">
                                            <?=$PAGE['title']?>
                                        </p>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </menu>
    </div>
</main>

<!-- contents -->

<!---<img src="<?= IMG_PATH ?>/icon/arrow.png" alt="">-->
<!--이미지 인라인 bg-image 경로 <?= getImage('/icon/arrow-bg.jpg') ?>-->
<?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>