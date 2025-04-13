<?php
$CUR_PAGE_ITEMS		= $CUR_PAGE_LIST[0]['pages'];

$cur_gnb = $CUR_PAGE_LIST[0]['title'];

$cur_lnb_en = $CUR_PAGE_LIST[1]['en-title'];


$cur_lnb = $CUR_PAGE_LIST[1]['title'];
?>

<section class="no-sub-visual ">
    <div class="no-container-xl">
        <div class="no-sub-visual-txt">
            <p class="no-body-xl --fw-700">
                <?=$cur_lnb_en?>
            </p>
            <h2 class="no-heading-xl ">
                <?=$cur_lnb?>
            </h2>
        </div>
    </div>
</section>