@extends('website.layouts.main')
@section('main-section')
    <main class="main">
        <section class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-dark profile-card shadow-lg card-bgColor">
                            <div class="card-body py-4">
                                <div class="text-center">
                                    <img src="assets/img/avatar.png" alt="profile image" class="img img-fluid mb-2"
                                        width="100px" height="100px">
                                    <div class="ml-3">
                                        <h5 class="text-capitalize">john doe</h5>
                                        <h6>john@gmail.com</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <i class="fas fa-coins"></i>
                                            <span class="ps-2">3000</span>
                                        </div>
                                        <a href="add-money.php" class="btn btn-custom-sec w-100 btn-sm">Add Coins</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-dark mt-3 card-bgColor">
                                <div class="card-body profile-links card-bgColor ">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">Settings</a>
                                        <a href="#" class="list-group-item list-group-item-action">Change Password</a>
                                        <a href="#" class="list-group-item list-group-item-action">Settings</a>
                                        <a href="#" class="list-group-item list-group-item-action">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-dark shadow-lg card-bgColor">
                            <div class="card-body card-bgColor">
                                <div class="row">
                                    <?php for($i=1; $i<=3; $i++){ ?>
                                    <div class="col-md-4 my-2 ">
                                        <div class="profile-widgit bg-light">
                                            <div class="icon text-primary">
                                                <i class="fas fa-coins"></i>
                                            </div>
                                            <div class="stats">
                                                <h5>Wallet</h5>
                                                <h6>3000</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 ">
                                        <div class="profile-widgit bg-light">
                                            <div class="icon text-info">
                                                <i class="fa-solid fa-trophy"></i>
                                            </div>
                                            <div class="stats">
                                                <h5>Game Won</h5>
                                                <h6>10</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="card text-dark shadow-lg my-2 card-bgColor">
                            <div class="card-body card-bgColor ">
                                <div class="row">
                                    <?php for($i=1; $i<=3; $i++){ ?>
                                    <div class="col-md-12 my-2">
                                        <div class="profile-widgit bg-light">
                                            <div class="icon text-primary">
                                                <i class="fas fa-coins"></i>
                                            </div>
                                            <div class="stats">
                                                <h5>Added Money to Wallet</h5>
                                                <p>Added 3000 on 12/12/2020 at 12:00 AM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-2">
                                        <div class="profile-widgit bg-light">
                                            <div class="icon text-info">
                                                <i class="fa-solid fa-trophy"></i>
                                            </div>
                                            <div class="stats">
                                                <h5>Game Won</h5>
                                                <h6>10</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-custom-primary btn-lg w-100 my-2" type="button">Show
                                            More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
