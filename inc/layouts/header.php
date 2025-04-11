</head>
<!-- 
<div class="no-headline">
    <div class="no-headline__inner">
        <p>
            블루스퀘어 사이트가 새롭게 오픈되었습니다! 공연 정보부터 티켓 예매까지,
            한눈에 확인할 수 있는 편리한 서비스를 제공합니다. 지금 방문하여 다양한
            문화 콘텐츠를 만나보세요. 더 나은 서비스로 여러분을 찾아뵙겠습니다!
        </p>
        <a href="#">View More</a>
    </div>
</div> -->



<body>

    <div class="no-header-bg"></div>
    <header id="no-header-full">
        <div class="no-header">
            <div class="no-header-container">
                <div class="no-header__inner">
                    <h1 class="no-header-logo">
                        <a href="/">
                            <div class="--blind">나인원랩스 템플릿</div>
                        </a>
                    </h1>
                    <nav class="no-header-menu">
                        <ul class="no-header-gnb">
                            <?php foreach ($MENU_ITEMS as $di => $depth):
                                    $depth_active = $depth['isActive'] ? 'active' : '';
                                ?>
                            <!-- 회사 소개 -->
                            <li>
                                <a href="<?= $depth['path'] ?>" class="<?= $depth_active ?>"><?= $depth['title'] ?></a>
                                <?php if (array_key_exists('pages', $depth) && count($depth['pages']) > 0) : ?>

                                <?php endif; ?>
                            </li>
                            <?php endforeach; ?>

                        </ul>
                    </nav>


                    <a href="#" class="no-btn-arrow no-btn">
                        문의하기
                        <i class="fa-regular fa-arrow-right-long"></i>
                    </a>

                    <button type="button" class="no-header-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>