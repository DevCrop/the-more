<?php
$CUR_PAGE_ITEMS		= $CUR_PAGE_LIST[0]['pages'];

$cur_gnb = $CUR_PAGE_LIST[0]['title'];

$cur_lnb_en = $CUR_PAGE_LIST[1]['en-title'];

$cur_lnb = $CUR_PAGE_LIST[1]['title'];

$img_path = '';

if ($cur_gnb == '회사 소개') {
    $img_path = '1';
} else if ($cur_gnb == '대표 소개') {
    $img_path = '2';
} else if ($cur_gnb == '실제 사례') {
    $img_path = '3';
} else if ($cur_gnb == '기관 소개') {
    $img_path = '4';
} else if ($cur_gnb == '솔루션 프로세스') {
    $img_path = '5';
} else if ($cur_gnb == '문의하기') {
    $img_path = '6';
} else if ($cur_gnb == 'YOUTUBE') {
    $img_path = '7';
}
?>

<section class="no-sub-visual" style="background-image: url('/resource/images/sub/sub_visual_<?= $img_path ?>.png');">
    <div class="no-container-xl">
        <div class="no-sub-visual-txt">
            <p class="no-body-xl --fw-500">
                <?=$cur_lnb_en?>
            </p>
            <h2 class="no-heading-xl ">
                <?=$cur_lnb?>
            </h2>
        </div>
    </div>
</section>