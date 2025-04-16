<footer class="no-footer">
    <div class="no-container-3xl">
        <div class="no-footer-top">
            <h1 class="no-footer-logo">
                <a href="#">
                    <figure>
                        <img src="<?=IMG_PATH?>/logo/logo_white.png" alt="">
                    </figure>
                    <div class="--blind">THE MORE ENT.</div>
                </a>
            </h1>
            <div class="no-footer-menu">
                <ul>
                    <?php foreach ($MENU_ITEMS as $di => $depth):
                        $depth_active = $depth['isActive'] ? 'active' : '';
                    ?>
                    <li>
                        <a href="<?= $depth['path'] ?>" class="<?= $depth_active ?>"><?= $depth['title'] ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="no-footer-bottom">
            <div class="no-footer-info">
                <ul>
                    <li>
                        <span>상호명</span>
                        <p>THE MORE 엔터테인먼트</p>
                    </li>
                    <li>
                        <span>사업자등록번호</span>
                        <p>409-44-21166</p>
                    </li>
                    <li>
                        <span>주소</span>
                        <p>서울특별시 강동구 천중로 264 상가동 2층 201, 206호(길동, 강동 헤리티지 자이)</p>
                    </li>
                    <li>
                        <span>전화번호</span>
                        <p>02-0000-0000</p>
                    </li>
                </ul>
            </div>
            <div class="no-footer-social">
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?=IMG_PATH?>/icon/youtube.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?=IMG_PATH?>/icon/facebook.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?=IMG_PATH?>/icon/insta.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="<?=IMG_PATH?>/common/footer_title.png" alt="">
    </div>
</footer>

<aside class="no-top-btn active">
    <ul>
        <li>
            <a href="/pages/cs/parking.php">
                <img src="<?=IMG_PATH?>/icon/aside_insta.png" alt="">
            </a>

        </li>
        <li>
            <a href="/pages/cs/parking.php">
                <img src="<?=IMG_PATH?>/icon/aside_blog.png" alt="">
            </a>

        </li>
        <li>
            <a href="/pages/cs/parking.php">
                <img src="<?=IMG_PATH?>/icon/aside_contact.png" alt="">
            </a>

        </li>
        <li>
            <a href="/pages/cs/parking.php">
                <img src="<?=IMG_PATH?>/icon/aside_location.png" alt="">
            </a>
        </li>
    </ul>

    <button type="button" class="active">
        <div class="arrow">
            <i class="fa-regular fa-arrow-up-long" aria-hidden="true"></i>
        </div>
    </button>
</aside>

</body>

</html>