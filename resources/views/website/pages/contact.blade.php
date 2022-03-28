@extends('website.layouts.main')
@section('main-section')
    <main class="main contact-main">
        <section class="breadcrumb-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="blob bottom left bg-primary"></div>
            <div class="blob bottom right bg-success"></div>
            <div class="blob top left bg-danger"></div>
            <div class="blob top right bg-warning"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-md-7 Contact-Us">
                            </div>
                            <div class="col-md-5">
                                <form action="#" method="POST" class="contact-form px-5 py-3" id="contact-form">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone" maxlength="10">
                                        <label for="phone">Phone</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-custom-sec w-100">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
