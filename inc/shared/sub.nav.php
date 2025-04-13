<section class="no-sub-nav">
    <div class="no-container-xl">
        <div class="no-sub-nav-swiper swiper">
            <ul class="swiper-wrapper">
                <?php foreach ($CUR_PAGE_ITEMS as $pi => $cur_page): 
					$cur_page_active = $cur_page['isActive'] ? 'active' : '';    
				?>
                <li class="swiper-slide">
                    <a href="<?=$cur_page['path']?>" class="<?=$cur_page_active?>"><?=$cur_page['title']?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>