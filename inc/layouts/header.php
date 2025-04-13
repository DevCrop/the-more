</head>

<body>

    <div class="no-header-bg"></div>
    <header id="no-header-full">
        <div class="no-header">
            <div class="no-header-container">
                <div class="no-header__inner">
                    <h1 class="no-header-logo">
                        <a href="/">
                            <div class="--blind">A&Z 파트너스</div>
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

                    <button type="button" class="no-header-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>