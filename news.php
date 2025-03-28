<? require_once "components/head.php" ?>
    <title>Новости клуба</title>
</head>
<body>
    <? require_once "components/header.php" ?>
    <main>
        <div class="container py-5">
            <? if (isset($_GET["id"])) { ?>
                <a href="news" class="btn mb-3">
                    <i class="fas fa-arrow-left me-2"></i> Все новости
                </a>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="public/images/test1.jpg" class="w-100" alt="Новость 1" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-green fw-bold">Событие месяца</h2>
                        <p class="lead">Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города. Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города. Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города. Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города. Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города.</p>

                        <p class="lead">Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города. Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города. Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города. Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города.</p>
                    </div>
                </div>
            <? } else { ?>
                <h2 class="text-green fw-bold mb-5">Новости клуба</h2>
                <div class="row gap-3 column-gap-0">
                    <? for ($i = 1; $i < 10; $i++) { ?>
                        <div class="col-lg-4">
                            <div class="card h-100">
                                <img src="public/images/test1.jpg" class="card-img-top" alt="Новость 1" loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title text-green fw-bold">Событие месяца</h5>
                                    <p class="card-text lead">Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города.</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="news?id=<?= $i ?>" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            <? } ?>
        </div>
    </main>
    <? require_once "components/footer.php" ?>
</body>