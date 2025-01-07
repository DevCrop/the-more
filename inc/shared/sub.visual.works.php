<?php
$CUR_PAGE_ITEMS		= $CUR_PAGE_LIST[0]['pages'];

$cur_gnb = $CUR_PAGE_LIST[0]['title'];
$cur_lnb = $CUR_PAGE_LIST[1]['title'];
$cur_lnb_sub = $CUR_PAGE_LIST[1]['en-title'];
?>

<section class="no-sub-visual no-sub-visual-works ">
    <div class="no-container-xl">

        <div class="no-sub-visual-txt">
            <div class="no-sub-visual-txt-h2">
                <h2 class="no-display-md ">
                    <?=$cur_lnb?>
                </h2>
            </div>
            <div class="no-sub-visual-txt-p">
                <p class="no-display-xl"><?=$cur_lnb_sub?></p>
            </div>
        </div>

    </div>
</section>