@extends('website.layouts.main')
@section('main-section')
    <main class="main" style="background: linear-gradient(45deg, #5f5fd352, transparent);">
        <section class="breadcrumb-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="checkout">
            <div class="container">
                <div class="section-title">
                    <h2>Checkout</h2>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <ul class="list-group mb-3 sticky-top" style="z-index:1; top:100px">
                            <li class="list-group-item d-flex bg-primary justify-content-between shadow lh-condensed">
                                <div>
                                    <h4 class="my-0 text-light p-2">Details</h4>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Add Coins</h6>
                                    <small class="text-muted">300</small>
                                </div>
                                <span class="text-muted"><i class="fa-solid fa-indian-rupee-sign"></i> 500</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-danger">
                                    <h6 class="my-0">Service Charge</h6>
                                    <small>2%</small>
                                </div>
                                <span class="text-danger">+ <i class="fa-solid fa-indian-rupee-sign"></i> 100</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>EXAMPLECODE</small>
                                </div>
                                <span class="text-success">- <i class="fa-solid fa-indian-rupee-sign"></i> 150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (INR)</span>
                                <strong><i class="fa-solid fa-indian-rupee-sign"></i> 450</strong>
                            </li>
                            <li>
                                <form class="card p-2 mt-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Promo code">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Redeem</button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-8 order-md-1 col-bgImg">
                        <h4 class="mb-3">Account Details</h4>
                        <form class="check-out-form" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="firstName">
                                </div>
                                <div class="col-md-6  mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">Save this information for next
                                    time</label>
                            </div>
                            <hr class="my-4">

                            <h4 class="mb-3">Payment Method</h4>

                            <div class="d-block my-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="pmccdc" checked>
                                    <label class="form-check-label" for="pmccdc">
                                        Credit/Debit Card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="upi">
                                    <label class="form-check-label" for="upi">
                                        UPI
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-cvv">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg w-100" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
