</head>

<body>

    <header id="no-header-single">
        <div class="no-header">
            <div class="no-container-3xl">
                <div class="no-header-inner">
                    <h1 class="no-header-logo">
                        <a href="/">
                            <figure>
                                <img src="<?=IMG_PATH?>/logo/logo_white.png" alt="">
                            </figure>
                            <div class="--blind">THE MORE ENT.</div>
                        </a>
                    </h1>
                    <nav class="no-header-menu">
                        <ul class="no-header-gnb">
                            <?php foreach ($MENU_ITEMS as $di => $depth):
                                    $depth_active = $depth['isActive'] ? 'active' : '';
                                ?>
                            <li>
                                <a href="<?= $depth['path'] ?>" class="<?= $depth_active ?>"><?= $depth['title'] ?></a>
                                <?php if (array_key_exists('pages', $depth) && count($depth['pages']) > 0) : ?>
                                <ul class="no-header-lnb ">
                                    <?php foreach ($depth['pages'] as $pi => $PAGE): 
											$page_active = $PAGE['isActive'] ? 'active' : '';    
											?>
                                    <li class="<?=$page_active?>">
                                        <a href="<?=$PAGE['path']?>" class="">
                                            <?=$PAGE['title']?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
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