<? require_once "components/head.php" ?>
    <title>Клуб собаководства</title>
</head>
<body>
    <? require_once "components/header.php" ?>
    <main class="bg-green text-white pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-4">
                        <span>Клуб для тебя и твоего</span>
                        <span class="text-lime">лучшего друга</span>
                    </h1>
                    <p class="lead mb-4">Мы предлагаем возможность познакомиться с единомышленниками и сблизиться со своей собакой</p>
                    <a href="about.php" class="btn btn-lg px-4">
                        О нас <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="col-lg-6">
                    <img src="public/images/banner-image.jpg" alt="Счастливая собака" class="img-fluid">
                </div>
            </div>
        </div>
    </main>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Последние новости клуба</h2>
            
            <div class="row gap-3 column-gap-0">
                <div class="col-lg-4">
                    <div class="card h-100">
                        <img src="public/images/test1.jpg" class="card-img-top" alt="Новость 1" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title text-green fw-bold">Событие месяца</h5>
                            <p class="card-text lead">Приглашаем всех на ежегодную выставку собак, которая пройдет в центральном парке города.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="news?id=1" class="btn">Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100">
                        <img src="public/images/test2.jpg" class="card-img-top" alt="Новость 2" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title text-green fw-bold">Новый курс дрессировки</h5>
                            <p class="card-text lead">Открыт набор на курс "Основы послушания" для щенков и взрослых собак. Начало занятий с 1 июня.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="news?id=1" class="btn">Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card h-100">
                        <img src="public/images/test3.jpg" class="card-img-top" alt="Новость 3" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title text-green fw-bold">Встреча кинологов</h5>
                            <p class="card-text lead">Приглашаем на встречу с известным кинологом, который поделится секретами воспитания идеальной собаки.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="news?id=1" class="btn">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="news.php" class="btn px-4">Все новости</a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-5">Почему стоит присоединиться</h3>
            
            <div class="row g-4 text-center text-white">
                <div class="col-md-4">
                    <div class="p-4 rounded bg-green h-100">
                        <i class="fas fa-paw fa-3x text-lime mb-3"></i>
                        <h4 class="text-lime">Профессиональные тренеры</h4>
                        <p>Опытные кинологи помогут вам в воспитании и дрессировке вашего питомца</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 rounded bg-green h-100">
                        <i class="fas fa-users fa-3x text-lime mb-3"></i>
                        <h4 class="text-lime">Сообщество</h4>
                        <p>Общайтесь с единомышленниками и делитесь опытом</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 rounded bg-green h-100">
                        <i class="fas fa-calendar-alt fa-3x text-lime mb-3"></i>
                        <h4 class="text-lime">Мероприятия</h4>
                        <p>Участвуйте в выставках, соревнованиях и других интересных событиях</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <? require_once "components/footer.php" ?>
</body>
</html>