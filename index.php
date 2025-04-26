<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсовая</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="style.css">

</head>

<body class="container-fluid d-flex flex-column min-vh-100">
    <div class="curtain position-fixed w-100 h-100 overflow-hidden top-0 start-0" id="curtain">
        <p class="text-center fw-bold" style="font-size: 40px;">Кафе-кондитерская</p>
        <p class="text-center fw-bold p-3" style="font-size: 70px;">"Эйфория"</p>
        <div class="circles position-absolute top-50 start-50 translate-middle">
            <div class="block block1"></div>
            <div class="block block2"></div>
            <div class="block block3"></div>
            <div class="block block4"></div>
        </div>
        <img src="IMG/лого.jpg" alt="" class="position-absolute top-50 start-50 translate-middle rounded mt-3"
            style="width: 300px;">

        <div class="rainbow-button text-center p-1 fw-bold position-absolute rounded-4">
            <h2> <i class="bi bi-arrow-down"></i><i class="bi bi-arrow-down"></i><i class="bi bi-arrow-down"></i></h2>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-opacity-75 p-2 sticky-top text-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Переключатель навигации" style="background-color: #7482ff59;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-white">
                    <li class="nav-item">
                        <a href="#for-mk" class="nav-link">Для кого мастер-класс <i class="bi bi-people"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-masterclass" class="nav-link">О мастер-классе <i
                                class="bi bi-info-circle"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#reviews" class="nav-link">Отзывы <i class="bi bi-envelope-paper-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" id="start-quiz" class="nav-link">Пройти тест <i class="bi bi-emoji-smile"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#geo" class="nav-link">Место <i class="bi bi-geo-alt"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#registration" class="nav-link">Записаться <i class="bi bi-person-check"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="IMG/стиль.jpg" class="d-block w-100" alt="Торты">
                <div class="carousel-caption animate__animated animate__fadeInUp">
                    <h2 class="display-4">Мастер-класс от шеф-кондитера</h2>
                    <p class="lead">Научитесь создавать десерты как профессионал</p>
                    <a href="#registration" class="btn btn-primary btn-lg px-4">Записаться</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="IMG/ингридиенты.jpg" class="d-block w-100" alt="Ингредиенты">
                <div class="carousel-caption animate__animated animate__fadeInRight">
                    <br>
                    <br>
                    <h2 class="display-4">Премиальные ингредиенты</h2>
                    <p class="lead">Работаем только с лучшими продуктами</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="IMG/секреты.jpg" class="d-block w-100" alt="Процесс">
                <div class="carousel-caption animate__animated animate__fadeInLeft">
                    <h2 class="display-4">Секретные техники</h2>
                    <p class="lead">Узнайте профессиональные хитрости</p>
                    <a href="#about-masterclass" class="btn btn-danger btn-lg px-4">Программа</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </section>

    <section id="gallery">
        <h2 class="p-4" id="for-mk">Для кого мастер класс</h2>
        <div class="content row gap-3">
            <article class="col-5 ms-5">
                <div class="gal-block p-2 rounded-2 text-white mb-4" data-image="IMG/family.jpg">Хотите порадовать
                    близких</div>
                <div class="gal-block p-2 rounded-2 text-white mb-4" data-image="IMG/collage.jpg">Есть желание начать
                    развиваться в кондитерском
                    направлении</div>
                <div class="gal-block p-2 rounded-2 text-white mb-4" data-image="IMG/girl-profile.jpg">Постоянно
                    залипаете на профили кондитеров</div>
                <div class="gal-block p-2 rounded-2 text-white mb-4" data-image="IMG/homeKon.jpg">Любите готовить
                    десерты дома и хотите
                    научиться чему-то новому</div>
            </article>
            <div class="gallery col-5">
                <div class="gallery-block gallery rounded-3 text-white mb-3" style="width: 500px; height: 400px;">
                    <img id="galleryImage" src="" alt="" class="img-fluid rounded mx-auto d-block">
                </div>
                <div class="gallery-text gal-block rounded-2 text-white mb-4 p-3">Вы можете не переживать из-за Вашего
                    уровня в кондитерском деле. На
                    нашем
                    мастер классе, под руководством опытных шеф-кондитеров у Вас всё получится, мы даём 100% гарантию
                </div>
            </div>
        </div>
    </section>

    <section id="about-masterclass" class="about-masterclass">
        <h2 class="p-4">О мастер классе</h2>
        <div class="container">
            <div class="master-info d-flex align-items-start justify-content-between gap-5">
                <div class="text-content position-relative d-inline">
                    <p>Ведущий мастер класса - <span id="name-master" class="position-relative"><i>Фёдор
                                Маффин</i></span></p>
                    <p style="width: 500px;" class="pb-5">
                        известный шеф-кондитер с многолетним опытом,
                        который научит вас секретам кондитерского искусства. Вы узнаете, как создавать настоящие
                        шедевры, которые
                        порадуют ваших близких и друзей. <br> Приходите, и вы не пожалеете! Присоединяйтесь к нашему
                        захватывающему мастер-классу по кондитерскому искусству, где вы
                        научитесь создавать великолепные десерты под руководством нашего опытного мастера.
                        Это отличная возможность развить свои навыки, получить новые знания и провести время в дружеской
                        атмосфере🌸
                        Длительность мастер-класса: ≈ 4 часа
                    </p>
                    <a href="#registration"
                        class="btn d-inline text-white text-decoration-none rounded-4 p-4">Записаться на
                        мастер-класс</a>
                </div>

                <div class="swiper-container coverflow-container overflow-hidden ">
                    <div class="swiper-wrapper text-center">

                        <figure class="w-50 swiper-slide coverflow-swiper-slide p-3 rounded-4" id="masterPhoto">
                            <img src="IMG/шеф-сертификат.jpg"
                                alt="Диплом победителя международного образца в конкурсе 'The Best Confectioner 2025'"
                                class="border border-dark-subtle">
                            <figcaption class="text-black fs-6 text-center"><i>Диплом победителя международного образца
                                    в конкурсе "The Best Confectioner
                                    2025"</i></figcaption>
                        </figure>

                        <figure class="w-50 swiper-slide coverflow-swiper-slide p-3 rounded-4">
                            <img src="IMG/кондитер_готовит.jpg"
                                alt="Фёдор Маффин в процессе приготовления свадебного торта"
                                class="border border-dark-subtle">
                            <figcaption class="text-black fs-6 text-center"><i>Фёдор Маффин в процессе приготовления
                                    свадебного торта</i></figcaption>
                        </figure>

                        <figure class="w-50 swiper-slide coverflow-swiper-slide p-3 rounded-4">
                            <img src="IMG/output-onlinetools.png"
                                alt="Мастер-класс '20 WoW декоров' под руководством нашего опытного шефа"
                                class="border border-dark-subtle">
                            <figcaption class="text-black fs-6 text-center"><i>Мастер-класс "20 WoW декоров" под
                                    руководством нашего опытного шефа</i>
                            </figcaption>
                        </figure>

                        <figure class="w-50 swiper-slide coverflow-swiper-slide p-3 rounded-4">
                            <img src="IMG/сертификат-кондитер.jpg" alt="Сертификат первого образца о квалификации"
                                class="border border-dark-subtle">
                            <figcaption class="text-black fs-6 text-center"><i>Сертификат первого образца о
                                    квалификации</i></figcaption>
                        </figure>

                        <figure class="w-50 swiper-slide coverflow-swiper-slide p-3 rounded-4">
                            <img src="IMG/ученик.jpg" alt="Лучший ученик II потока курса 'Чизкейки и муссовые торты'"
                                class="border border-dark-subtle">
                            <figcaption class="text-black fs-6 text-center"><i>Лучший ученик II потока курса "Чизкейки и
                                    муссовые торты"</i></figcaption>
                        </figure>

                        <figure class="w-50 swiper-slide coverflow-swiper-slide p-3 rounded-4">
                            <img src="IMG/квалификация.jpg"
                                alt="Фёдор Маффин - руководитель курсов по повышению квалификации"
                                class="border border-dark-subtle">
                            <figcaption class="text-black fs-6 text-center"><i>Фёдор Маффин - руководитель курсов по
                                    повышению квалификации</i></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="advertisement align-items-center justify-content-center rounded-4" id="ad">
        <img src="IMG/icons8-close-69.png" alt="" id="closeModal" style="width: 20px;
      right: 116px;
      margin-top: -47px;
      position: sticky">
        <img src="IMG/love-letter-render-1 (1).png" alt="" style="height: 115px;">
    </div>
    <div id="myModal" class="modal z-1 w-100 h-100 pt-4 overflow-auto position-fixed start-0 top-0">
        <div class="modal-content p-4">
            <span class="close fw-bold float-start">&times;</span>
            <div class="modal-content-container d-flex flex-row">
                <div class="tetris-container text-center rounded-4 p-3" id="gameFrame">
                    <div class="game-window rounded-2 position-relative overflow-hidden">
                        <iframe src="game.php" height="400px" class="w-100" title="Игра"></iframe>
                    </div>
                </div>
                <div class="text-modal w-50 m-3">
                    <p>Хотите получить приятный бонус? Тогда, пройдите нашу мини-игру. Вам нужно прокликать ячейки за 30
                        секунд и найти 5 капкейков, удачи🍀</p>

                    <div id="modal" style="display: none;">
                        <div id="modalContent" class="p-4 text-center">
                            <p id="modalMessage"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section id="reviews">
        <h2 class="p-4">Отзывы</h2>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <p class="lead mb-4">Более 100 довольных учеников уже прошли наши мастер-классы и поделились своими
                        впечатлениями.</p>

                    <div class="stats mb-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="display-4 text-primary me-3">4.9</div>
                            <div>
                                <div class="rating fs-5 mb-1">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div>Средняя оценка</div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap">
                            <div class="me-4 mb-3">
                                <div class="h3 mb-0 text-black">127+</div>
                                <div class="text-muted">Учеников</div>
                            </div>
                            <div class="mb-3">
                                <div class="h3 mb-0 text-black">96%</div>
                                <div class="text-muted">Рекомендуют</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="swiper-container gallery-swiper text-black m-auto">
                        <div class="swiper-wrapper">
                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 1</h6>
                                <h4>Анжела</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Мастер-класс был потрясающим! Десерт получился очень эстетичный, прям жалко есть</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 2</h6>
                                <h4>Виолетта</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Получился прекрасный десерт, спасибо за новые знания. Мастер-класс интересный</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 4</h6>
                                <h4>Ivan</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Thanks, master-class is perfect! Now, I can cooking great dessert OwO. I love Russian
                                    sweetness</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 4</h6>
                                <h4>Bella</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Thanks, master-class is perfect! Now, I can cooking great dessert OwO. I love Russian
                                    sweetness</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 5</h6>
                                <h4>Кира</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <p>Очень познавательно, но у меня получился десерт не как на картинке 😢</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 6</h6>
                                <h4>Аркадий</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <p>Всё супер, вкусный торт получился. Жена заценила, приду в следующий раз вместе с ней
                                </p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 7</h6>
                                <h4>Фёдор</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Всё супер, вкусный торт получился. Жена заценила, приду в следующий раз вместе с ней
                                </p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 8</h6>
                                <h4>Вероника</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Я в восторге, у меня впервые получился такая бомбезная вкусняшка, спасибооо</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 9</h6>
                                <h4>Вероника</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Я в восторге, у меня впервые получился такая бомбезная вкусняшка, спасибооо</p>

                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 10</h6>
                                <h4>Вероника</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Я в восторге, у меня впервые получился такая бомбезная вкусняшка, спасибооо</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 11</h6>
                                <h4>Вероника</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Я в восторге, у меня впервые получился такая бомбезная вкусняшка, спасибооо</p>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h6>Отзыв 12</h6>
                                <h4>Вероника</h4>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p>Я в восторге, у меня впервые получился такая бомбезная вкусняшка, спасибооо</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="feedbackModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Оставьте ваш отзыв</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="feedbackForm">
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">Ваше имя</label>
                                        <input type="text" class="form-control" id="userName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Оценка</label>
                                        <div class="rating-input">
                                            <span class="star" data-value="1">☆</span>
                                            <span class="star" data-value="2">☆</span>
                                            <span class="star" data-value="3">☆</span>
                                            <span class="star" data-value="4">☆</span>
                                            <span class="star" data-value="5">☆</span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userFeedback" class="form-label">Ваш отзыв</label>
                                        <textarea class="form-control" id="userFeedback" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="geo" class="location-section py-5">
        <h2 class="p-4">Место</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Кафе-кондитерская "Эйфория"</h3>
                    <p>Наш мастер-класс пройдет в уютном кафе "Эйфория", где вы сможете не только научиться готовить
                        торт "Наполеон", но и насладиться атмосферой творчества и вдохновения.</p>
                    <p><strong>Адрес:</strong> ул. Кулинарная, 15, Калининград</p>
                    <p><strong>Дата и время:</strong> 5 мая 2025 года, 14:00 - 17:00</p>
                    <p>Приходите с друзьями и близкими, нас ждёт много интересного!</p>
                    <h4>Как добраться:</h4>
                    <p>Студия находится в центре города, в шаговой доступности от центральной площади. Вы также можете
                        воспользоваться общественным транспортом или такси.</p>
                </div>
                <div class="col-md-6">
                    <div id="flashlight" class="rounded-3">
                        <img src="IMG/кафе.jpg" alt="" style="width: 500px; height: 500px;" class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quiz-section" class="d-none py-5">
        <h2 class="p-4">Пройти тест</h2>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="quiz-container bg-light p-4 rounded-4 shadow-sm">
                        <div class="quiz-header text-center mb-4">
                            <h2 class="fw-bold">Какой ты Наполеон?</h2>
                            <p class="text-muted">Ответь на 3 вопроса и узнай, какой торт тебе подходит!</p>
                        </div>

                        <div class="quiz-step active" data-step="1">
                            <h3 class="mb-3 text-black">Какой крем вам больше нравится?</h3>
                            <div class="quiz-options d-grid gap-2">
                                <button class="btn btn-outline-secondary text-white"
                                    data-value="vanilla">Ванильный</button>
                                <button class="btn btn-outline-secondary text-white"
                                    data-value="caramel">Карамельный</button>
                                <button class="btn btn-outline-secondary text-white"
                                    data-value="chocolate">Шоколадный</button>
                                <button class="btn btn-outline-secondary text-white"
                                    data-value="sour">Кисло-сладкий</button>
                            </div>
                        </div>

                        <div class="quiz-step d-none" data-step="2">
                            <h3 class="mb-3 text-black">Какой текстурой должны быть коржи?</h3>
                            <div class="quiz-options d-grid gap-2">
                                <button class="btn btn-outline-secondary text-white"
                                    data-value="crispy">Хрустящие</button>
                                <button class="btn btn-outline-secondary text-white" data-value="soft">Мягкие</button>
                                <button class="btn btn-outline-secondary text-white" data-value="layered">Слоистые, но
                                    нежные</button>
                            </div>
                        </div>

                        <div class="quiz-step d-none" data-step="3">
                            <h3 class="mb-3 text-black">Какой чай вы бы заварили к торту?</h3>
                            <div class="quiz-options d-grid gap-2">
                                <button class="btn btn-outline-secondary text-white" data-value="earl_grey">Чёрный с
                                    бергамотом</button>
                                <button class="btn btn-outline-secondary text-white" data-value="jasmine">Зелёный с
                                    жасмином</button>
                                <button class="btn btn-outline-secondary text-white" data-value="herbal">Травяной (мята,
                                    ромашка)</button>
                            </div>
                        </div>

                        <div class="quiz-result text-center d-none">
                            <h3 class="fw-bold mb-3">Вы — <span id="result-title">Классический Наполеон</span>!</h3>
                            <p id="result-text" class="mb-3 text-black">Ваш идеальный торт — нежные коржи с ванильным
                                кремом...</p>
                            <img id="result-image" src="classic-napoleon.jpg" alt="Торт"
                                class="img-fluid rounded-3 mb-3">
                            <button id="quiz-restart" class="btn btn-primary">Пройти ещё раз</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="registration">
    <h2 class="p-4">Записаться</h2>
    <div class="row">
        <div class="col-md-5 order-md-1 p-4">
            <div class="price-box text-white p-4 rounded shadow">
                <h4>Специальное предложение!</h4>
                <p>Стоимость мастер-класса:</p>
                <div class="price-amount fs-4 fw-bold">
                    <span class="current-price">3 900 ₽</span>
                    <span class="old-price text-decoration-line-through ms-2">5 000 ₽</span>
                </div>
                <p>Что вы получаете по итогам мастер класса:</p>
                <div class="price-details mt-2 fs-6">
                    <p><i class="bi bi-check2-circle me-2"></i>Практику в приготовлении десерта</p>
                    <p><i class="bi bi-check2-circle me-2"></i>Уникальный PDF-файл "20 вау-декоров"</p>
                    <p><i class="bi bi-check2-circle me-2"></i>Сертификат участника</p>
                </div>

                <div class="price-details mt-2 fs-6">
                    <p><i class="bi bi-check-circle-fill me-2"></i>Продолжительность: 4 часа</p>
                    <p><i class="bi bi-check-circle-fill me-2"></i>Все материалы включены</p>
                    <p><i class="bi bi-check-circle-fill me-2"></i>Спец.форму предоставим</p>
                </div>
                <div class="discount-badge bg-danger text-white p-2 rounded mt-2 fs-6">
                    Экономия 1 100 ₽
                </div>
            </div>
        </div>

        <div class="col-md-5 order-md-2 p-4">
            <form id="registrationForm" action="register.php" class="d-flex justify-content-center flex-column rounded-4 p-5 needs-validation" method="post" novalidate>
                <h4 class="text-center">Регистрация</h4>
                <div class="reg">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold text-black">Ваше имя</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback fw-bold">
                            Пожалуйста, введите ваше имя.
                        </div>
                    </div>

                    <div class="mb-3" id="phoneGroup">
                        <label for="phone" class="form-label fw-bold text-black">Телефон</label>
                        <input type="tel" class="form-control" id="phone" name="phone" oninput="formatPhone(this)" required>
                        <div class="invalid-feedback fw-bold">
                            Пожалуйста, введите телефон в формате +7 (XXX) XXX-XX-XX.
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn w-100 text-white" id="regButton">Записаться на мастер класс</button>
            </form>
        </div>
    </div>
</section>

<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Успешно!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ваша запись успешно зафиксирована! Спасибо за доверие, будем ждать Вас!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

    <footer class="mt-auto bg-opacity-75 p-2 text-center">
        <div class="container p-2">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-2">
                    <h1 class="footer-logo">Кафе-кондитерская "Эйфория"</h1>
                    <img src="IMG/лого.jpg" alt="" class="w-50 img-fluid rounded-2">
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <h6>Полезные ссылки</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">О нас</a></li>
                        <li><a href="#" class="text-white">Курсы</a></li>
                        <li><a href="#" class="text-white">Контакты</a></li>
                        <li><a href="#" class="text-white">Часто задаваемые вопросы</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <h6>Контакты</h6>
                    <p>Телефон: +7 (123) 456-78-90</p>
                    <p>Email: info@euphoria-cafe.com</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <h6>Социальные сети</h6>
                    <div class="social-media">
                        <a href="#"><i class="bi bi-pinterest me-2"></i></a>
                        <a href="#"><i class="bi bi-whatsapp me-2"></i></a>
                        <a href="#"><i class="bi bi-telegram me-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-1">
            <p class="mb-0">&copy; 2025 Кафе-кондитерская "Эйфория". Все права защищены.</p>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>