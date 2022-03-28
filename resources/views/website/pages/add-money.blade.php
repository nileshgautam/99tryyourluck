@extends('website.layouts.main')
@section('main-section')
    <main class="main" style="padding-block-end: 0px;">
        <section class="breadcrumb-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Money</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="add-money contact" style="padding-bottom:165px">
            <div class="blob bottom left bg-primary"></div>
            <div class="blob bottom right bg-success"></div>
            <div class="blob top left bg-danger"></div>
            <div class="blob top right bg-warning"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Add Coins</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper add-money-card">
                            <div class="swiper-wrapper pb-5">
                                <?php for($i=1; $i<=5; $i++){?>
                                <div class="swiper-slide">
                                    <div class="card text-dark">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-white">
                                                <i class="fas fa-coins"></i> <?php echo $i * 300; ?>
                                            </h5>
                                            <img src="assets/img/coins.png" alt="coins">
                                            <a href="checkout.php" class="btn btn-primary w-100 btn-anim-scale">
                                                Buy Now
                                                ( <i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $i * 500; ?>)
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
