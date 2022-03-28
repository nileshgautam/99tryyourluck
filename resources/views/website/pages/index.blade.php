@extends('website.layouts.main')
@section('main-section')
    <header>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center flex-column">
                        <img src="assets/img/banner/Quiz-Event.png" alt="Banner Image" class="banner-img">
                        <button class="btn btn-warning rounded-pill py-2 px-5 m-3" type="button">Get Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative">
            <div class="banner-bottom">
                <div class="row">
                    <?php for($i=1; $i<=3; $i++){ ?>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/banner/bb<?= $i ?>.png" alt="banner<?= $i ?>" class="me-2" />
                            <div>
                                <h3>Get Started
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="level-up">
            <div class="container" style="background:#dbdada9e;padding:30px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>LEVEL UP! GET BEST REWARD
                            </h2>
                            <p class="text-black">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum soluta asperiores
                                accusantium nesciunt repellendus, numquam ex eum aspernatur rem quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 pb-3 align-items-center">
                    <div class="col-md-6 text-center">
                        <img src="assets/img/banner/quizImage2.png" width="400px" alt="level up image"
                            class="img img-fluid">
                    </div>
                    <div class="col-md-6 d-flex flex-column gap-3 right-box">
                        <?php
          $levels = [
            [
              'title' => 'Freespins',
              'img' => 'assets/img/level/l1.png'
            ],
            [
              'title' => 'Bonuses',
              'img' => 'assets/img/level/l2.png'
            ],
            [
              'title' => 'Tournaments',
              'img' => 'assets/img/level/l3.png'
            ]
          ];
          foreach ($levels as $level) { ?>
                        <div class="d-flex align-items-center gap-3">
                            <img src="<?= $level['img'] ?>" alt="freespins">
                            <h3 class="text-uppercase text-dark">
                                <?= $level['title'] ?>
                            </h3>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <section>
                    <div class="row align-items-center">
                        <div class="col-md-6 d-flex flex-column gap-3 right-box">
                            <h2 class="heading">About QuizWork
                            </h2>
                            <p class="text-dark text-part">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut
                                quisquam beatae unde laudantium aliquid temporibus, libero, fugiat, ad nobis quas aspernatur
                                distinctio. Repudiandae molestias vitae quae iure, sequi placeat autem! Lorem ipsum dolor
                                sit, amet consectetur adipisicing elit. Rerum eaque perspiciatis ratione cumque veritatis
                                adipisci commodi nam voluptate eum eius. Ullam eveniet consequatur quis in excepturi. Dicta
                                corrupti ratione quo.
                            </p>
                            <!-- <?php
                  $levels = [
                    [
                      'title' => 'Freespins',
                      'img' => 'assets/img/level/l1.png'
                    ],
                    [
                      'title' => 'Bonuses',
                      'img' => 'assets/img/level/l2.png'
                    ],
                    [
                      'title' => 'Tournaments',
                      'img' => 'assets/img/level/l3.png'
                    ]
                  ];
                  foreach ($levels as $level) { ?>
                                <div class="d-flex align-items-center gap-3">
                                <img src="<?= $level['img'] ?>" alt="freespins">
                                <h3 class="text-uppercase text-dark"><?= $level['title'] ?></h3>
                                </div>
                                <?php } ?> -->
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/quizImage3.png" alt="level up image" class="img img-fluid banner-img">
                        </div>
                    </div>
                </section>
                <section style="margin-top:-50px">
                    <div class="row Margin-Top flex-row-reverse align-items-center">
                        <div class="col-md-6 d-flex flex-column gap-3 right-box">
                            <h2 class="heading">Quizzing
                            </h2>
                            <p class="text-dark text-part">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut
                                quisquam beatae unde laudantium aliquid temporibus, libero, fugiat, ad nobis quas aspernatur
                                distinctio. Repudiandae molestias vitae quae iure, sequi placeat autem! Lorem ipsum dolor
                                sit, amet consectetur adipisicing elit. Rerum eaque perspiciatis ratione cumque veritatis
                                adipisci commodi nam voluptate eum eius. Ullam eveniet consequatur quis in excepturi. Dicta
                                corrupti ratione quo.
                            </p>
                            <!-- <?php
                  $levels = [
                    [
                      'title' => 'Freespins',
                      'img' => 'assets/img/level/l1.png'
                    ],
                    [
                      'title' => 'Bonuses',
                      'img' => 'assets/img/level/l2.png'
                    ],
                    [
                      'title' => 'Tournaments',
                      'img' => 'assets/img/level/l3.png'
                    ]
                  ];
                  foreach ($levels as $level) { ?>
                                <div class="d-flex align-items-center gap-3">
                                <img src="<?= $level['img'] ?>" alt="freespins">
                                <h3 class="text-uppercase text-dark"><?= $level['title'] ?></h3>
                                </div>
                                <?php } ?> -->
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/quizImage5.png" alt="level up image" class="img img-fluid banner-img">
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="how-it-works">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="Heading-color">HOW IT WORKS
                            </h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum soluta asperiores
                                accusantium nesciunt repellendus, numquam ex eum aspernatur rem quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <?php
        $hiws = [
          [
            'number' => '01',
            'title' => 'SIGN UP',
            'text' => 'Sign up for an account and start playing.'
          ],
          [
            'number' => '02',
            'title' => 'DEPOSIT',
            'text' => 'Deposit your funds to your account.'
          ],
          [
            'number' => '03',
            'title' => 'COMPETE',
            'text' => 'Compete with other players to win.'
          ],
          [
            'number' => '04',
            'title' => 'GET PAID',
            'text' => 'Get paid for your winnings and win more.'
          ]
        ];
        foreach ($hiws as $hiw) { ?>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center text-center">
                            <div class="hiw-box">
                                <h2>
                                    <?= $hiw['number'] ?>
                                </h2>
                                <h3>
                                    <?= $hiw['title'] ?>
                                </h3>
                                <p>
                                    <?= $hiw['text'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="active-games">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>LATEST ACTIVE GAMES
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
        for ($i = 0; $i < 6; $i++) { ?>
                    <div class="col-md-4 my-2">
                        @include('website.layouts.game-card')
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="all-games-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>ALL GAMES
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper all-games">
                            <div class="swiper-wrapper pb-5">
                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                <div class="swiper-slide">
                                    <div class="all-games-slider-box">
                                        <img src="assets/img/games/1.png" alt="game image" class="img img-fluid">
                                        <h4 class="text-capitalize text-black">game
                                            <?= $i ?> name
                                        </h4>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination">
                            </div>
                            <div class="swiper-button-prev">
                            </div>
                            <div class="swiper-button-next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" style="margin-bottom: -160px;padding-bottom: 145px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>PLAY GAME
                            </h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum soluta asperiores
                                accusantium nesciunt repellendus, numquam ex eum aspernatur rem quos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-text">
                            <img src="assets/img/play-games-2.png" alt="play games" class="banner-img">
                            <p class="text-dark">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius temporibus quae possimus
                                nobis suscipit, dolorem architecto totam, libero alias ad culpa modi consectetur sed ipsum
                                voluptates voluptatum veniam molestias.
                            </p>
                            <button class="btn btn-warning rounded-pill" type="button">Play Now
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="assets/img/play-games-1.png" alt="about image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
