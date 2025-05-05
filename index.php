<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсовая КОПИИИЯЯЯ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adaptive.css">
    <link rel="stylesheet" href="curtain.css">
</head>

<body class="container-fluid d-flex flex-column min-vh-100 text-white">

    <div class="curtain position-fixed w-100 h-100 overflow-hidden top-0 start-0" id="curtain">
        <p class="curtain-title text-center fw-bold">Кафе-кондитерская</p>
        <p class="curtain-subtitle text-center fw-bold p-3">"Эйфория"</p>
        <div class="circles position-absolute top-50 start-50 translate-middle">
            <div class="block block1"></div>
            <div class="block block2"></div>
            <div class="block block3"></div>
            <div class="block block4"></div>
        </div>
        <img src="IMG/лого.jpg" alt="" class="curtain-logo position-absolute top-50 start-50 translate-middle rounded mt-3">

        <div class="switch-container text-center p-1 position-absolute">
            <img src="IMG/on.png" alt="" style="width: 65px;" id="on" class="p-1">
            <img src="IMG/off.png" alt="" hidden id="off" style="width: 65px;" class="p-1">
            <label class="switch">
                <input type="checkbox" id="curtain-switch">
                <span class="slider2"></span>
            </label>
        </div>
    </div>

    <nav id="smart-navbar" class="navbar navbar-expand-lg bg-opacity-75 p-2 sticky-top text-white transition-all">
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
                    <h2 class="display-4">Мастер-класс "Наполеон"</h2>
                    <p class="lead">Научитесь создавать десерты как профессионал</p>
                    <a href="#registration" class="btn btn-lg px-4 text-white">Записаться</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="IMG/ингридиенты.jpg" class="d-block w-100" alt="Ингредиенты">
                <div class="carousel-caption animate__animated animate__fadeInRight">
                    <br>
                    <br>
                    <h2 class="display-4">Премиальные ингредиенты</h2>
                    <p class="lead">Работаем только с лучшими продуктами и проверенными поставщиками</p>
                    <a href="#" class="btn btn-lg px-4 text-white">Подробнее</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="IMG/секреты.jpg" class="d-block w-100" alt="Процесс">
                <div class="carousel-caption animate__animated animate__fadeInLeft">
                    <h2 class="display-4">Секретные техники</h2>
                    <p class="lead">Узнайте профессиональные хитрости от нашего шеф-кондитера</p>
                    <a href="#about-masterclass" class="btn btn-lg px-4 text-white">Программа</a>
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
        <h2 class="p-4 text-center" id="for-mk">Для кого мастер класс</h2>
        <div class="content row flex-nowrap overflow-x-auto py-3">
            <article class="col-12 col-md-6 flex-shrink-0" style="min-width: 300px;">
                <div class="gal-block p-3 rounded-2 text-white mb-5" data-image="IMG/family.jpg">Хотите порадовать
                    близких</div>
                <div class="gal-block p-3 rounded-2 text-white mb-5" data-image="IMG/collage.jpg">Есть желание начать...</div>
                <div class="gal-block p-3 rounded-2 text-white mb-5" data-image="IMG/girl-profile.jpg">Постоянно
                    вдохновляетесь...</div>
                <div class="gal-block p-3 rounded-2 text-white mb-5" data-image="IMG/homeKon.jpg">Любите готовить
                    десерты...</div>
            </article>
            <div class="gallery col-12 col-md-5 flex-shrink-0">
                <div class="gallery-block gallery rounded-3 text-white mb-5" style="width: 500px; height: 400px;">
                    <img id="initialGif" src="IMG/output-onlinegiftools.gif" alt="" style="width: 420px;">
                </div>
                <div class="gallery-text rounded-2 text-white mb-5 p-3" style="width: 520px;">Вы можете не переживать из-за Вашего
                    уровня в кондитерском деле. На
                    нашем
                    мастер классе, под руководством опытных шеф-кондитеров у Вас всё получится, мы даём 100% гарантию
                </div>
            </div>
        </div>
    </section>

    <section id="about-masterclass" class="about-masterclass py-4">
        <h2 class="text-center p-4">О мастер-классе</h2>
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-1 order-2 mb-4 mb-lg-0">
                    <div class="text-content">
                        <p style="font-size: 28px;">Ведущий мастер класса - <span id="name-master" class="position-relative"><i>Фёдор Маффин</i></span></p>
                        <p class="pb-4" style="font-size: 22px;">
                            известный шеф-кондитер с многолетним опытом,
                            который научит вас секретам кондитерского искусства. Вы узнаете, как создавать настоящие
                            шедевры, которые
                            порадуют ваших близких и друзей. <br> <br>
                            Это отличная возможность развить свои навыки, получить новые знания и провести время в дружеской
                            атмосфере🌸 <br><br>
                            Длительность мастер-класса: ≈ 4 часа
                        </p>
                        <a href="#registration" id="aboutBtn" class="btn btn-primary text-white text-decoration-none rounded-4 py-3 px-4">Записаться на мастер-класс</a>
                    </div>

                </div>

                <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                    <div class="swiper-container coverflow-container overflow-hidden mx-auto">
                        <div class="swiper-wrapper text-center">

                            <figure class="swiper-slide coverflow-swiper-slide p-4 rounded-4" id="masterPhoto">
                                <img src="IMG/шеф-сертификат.jpg"
                                    alt="Диплом победителя международного образца в конкурсе 'The Best Confectioner 2025'"
                                    class="border border-dark-subtle w-100 h-auto rounded-2">
                                <figcaption class="text-black p-1 text-center"><i>Диплом победителя международного образца
                                        в конкурсе "The Best Confectioner
                                        2025"</i></figcaption>
                            </figure>

                            <figure class="swiper-slide coverflow-swiper-slide p-4 rounded-4">
                                <img src="IMG/кондитер_готовит.jpg"
                                    alt="Фёдор Маффин в процессе приготовления свадебного торта"
                                    class="border border-dark-subtle  w-100 h-auto rounded-2">
                                <figcaption class="text-black mt-1 text-center"><i class="mt-2">Фёдор Маффин в процессе приготовления
                                        свадебного торта</i></figcaption>
                            </figure>

                            <figure class="swiper-slide coverflow-swiper-slide p-4 rounded-4">
                                <img src="IMG/output-onlinetools.png"
                                    alt="Мастер-класс '20 WoW декоров' под руководством нашего опытного шефа"
                                    class="border border-dark-subtle w-100 h-auto rounded-2">
                                <figcaption class="text-black mt-1 text-center"><i class="mt-2">Мастер-класс "20 WoW декоров" под
                                        руководством нашего опытного шефа</i>
                                </figcaption>
                            </figure>

                            <figure class="swiper-slide coverflow-swiper-slide p-4 rounded-4">
                                <img src="IMG/сертификат-кондитер.jpg" alt="Сертификат первого образца о квалификации"
                                    class="border border-dark-subtle w-100 h-auto rounded-2">
                                <figcaption class="text-black mt-1 text-center"><i class="mt-2">Сертификат первого образца о
                                        квалификации</i></figcaption>
                            </figure>

                            <figure class="swiper-slide coverflow-swiper-slide p-4 rounded-4">
                                <img src="IMG/ученик.jpg" alt="Лучший ученик II потока курса 'Чизкейки и муссовые торты'"
                                    class="border border-dark-subtle w-100 h-auto rounded-2">
                                <figcaption class="text-black mt-1 text-center"><i class="mt-2">Лучший ученик II потока курса "Чизкейки и
                                        муссовые торты"</i></figcaption>
                            </figure>

                            <figure class="swiper-slide coverflow-swiper-slide p-4 rounded-4">
                                <img src="IMG/квалификация.jpg"
                                    alt="Фёдор Маффин - руководитель курсов по повышению квалификации"
                                    class="border border-dark-subtle w-100 h-auto rounded-2">
                                <figcaption class="text-black mt-1 text-center"><i class="mt-2">Фёдор Маффин - руководитель курсов по
                                        повышению квалификации</i></figcaption>
                            </figure>
                        </div>
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
            <span class="close fw-bold d-flex flex-row-reverse">&times;</span>
            <div class="modal-content-container d-flex flex-row">
                <div class="tetris-container text-center rounded-4 p-3" id="gameFrame">
                    <div class="game-window rounded-2 position-relative overflow-hidden">
                        <iframe src="game.php" height="400px" class="w-100" title="Игра"></iframe>
                    </div>
                </div>
                <div class="text-modal w-50 m-3">
                    <p>Хотите получить приятный бонус? Тогда, пройдите нашу мини-игру. Вам нужно прокликать ячейки за 20
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
        <h2 class="p-5 text-center">Отзывы</h2>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="lead mb-4" style="font-size: 1.6rem;">Более 100 довольных учеников уже прошли наши мастер-классы и поделились своими
                        впечатлениями.</h2>

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
                                <div class="text-muted">Средняя оценка</div>
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
                                <h4>Отзыв 1</h4>
                                <h3>Анжела</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p style="font-size: 18px;">Мастер-класс был потрясающим! Десерт получился очень эстетичный, прям жалко есть</p>
                                <p class="float-end"><i>28.03.2025г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 2</h4>
                                <h3>Виолетта</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p style="font-size: 18px;">Получился прекрасный десерт, спасибо за новые знания. Мастер-класс интересный</p>
                                <p class="float-end"><i>12.04.2025г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 4</h4>
                                <h3>Ivan</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p style="font-size: 18px;">Thanks, master-class is perfect! Now, I can cooking great dessert OwO. I love Russian
                                    sweetness</p>
                                <p class="float-end"><i>11.02.2025г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 4</h4>
                                <h3>Bella</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p style="font-size: 18px;">Thanks, master-class is perfect! Now, I can cooking great dessert OwO. I love Russian
                                    sweetness</p>
                                <p class="float-end"><i>06.09.2024г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 5</h4>
                                <h3>Кира</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <p style="font-size: 18px;">Очень познавательно, но у меня получился десерт не как на картинке 😢</p>
                                <p class="float-end"><i>18.08.2024г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 6</h4>
                                <h3>Аркадий</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <p style="font-size: 18px;">Всё супер, вкусный торт получился. Жена заценила, приду в следующий раз вместе с ней
                                </p>
                                <p class="float-end"><i>19.04.2025г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 7</h4>
                                <h3>Фёдор</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p style="font-size: 18px;">Всё супер, вкусный торт получился. Жена заценила, приду в следующий раз вместе с ней
                                </p>
                                <p class="float-end"><i>11.05.2025г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 8</h4>
                                <h3>Вероника</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p style="font-size: 18px;">Я в восторге, у меня впервые получился такая бомбезная вкусняшка, спасибооо</p>
                                <p class="float-end"><i>28.03.2025г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>
                            </div>

                            <div
                                class="swiper-slide d-flex flex-column align-items-center justify-content-center p-3 rounded-4 bg-white border border-light-subtle">
                                <h4>Отзыв 9</h4>
                                <h3>Вероника</h3>
                                <img src="IMG/user_11255965.png" alt="" style="width: 50px; height: 50px;">
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <p style="font-size: 18px;">Я в восторге, у меня впервые получился такая бомбезная вкусняшка, спасибооо</p>
                                <p class="float-end"><i>28.03.2025г</i></p>
                                <div class="img-reviews-container overflow-hidden">
                                    <div class="img-reviews d-flex">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">

                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                        <img src="IMG/лого.jpg" alt="" class="w-25">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="geo" class="location-section py-5">
        <h2 class="p-4 text-center">Место</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 geo-text">
                    <h2>Кафе-кондитерская "Эйфория"</h2>
                    <p>Наш мастер-класс пройдет в уютном кафе "Эйфория", где вы сможете не только научиться готовить
                        торт "Наполеон", но и насладиться атмосферой творчества и вдохновения.</p>
                    <p><strong>Адрес:</strong> ул. Кулинарная, 15, Калининград</p>
                    <p><strong>Дата и время:</strong> 5 мая 2025 года, 14:00 - 17:00</p>
                    <p>Приходите с друзьями и близкими, нас ждёт много интересного!</p>
                    <h3>Как добраться:</h3>
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
        <h2 class="p-4 text-center">Пройти тест</h2>
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
        <h2 class="p-4 text-center">Записаться</h2>
        <div class="row gap-4">
            <div class="col-md-5 order-md-1 p-4 offset-md-1">
                <div class="price-box text-white p-4 rounded-4 shadow">
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

                        <div class="mb-3">
                            <label for="promo" class="form-label fw-bold text-black">Промокод*</label>
                            <input type="tel" class="form-control" id="promo" name="promo" required disabled>
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
        <div class="p-2">
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

    <!-- <script src="js/bootstrap.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>