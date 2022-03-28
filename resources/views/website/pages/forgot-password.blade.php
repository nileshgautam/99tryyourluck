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
                                    <a href="#" class="text-decoration-none">Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Forgot password
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="forgot-password">
            <div class="blob bottom left bg-primary">
            </div>
            <div class="blob bottom right bg-success">
            </div>
            <div class="blob top left bg-danger">
            </div>
            <div class="blob top right bg-warning">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-md-7 ">
                                <div class="forgot-password-image">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <form action="#" method="PUT" class="Password-form px-5 py-3" id="password-form">
                                    <div class="form-floating mb-3 text-center">
                                        <img src="assets/img/banner/icon-forgot-password.png" width="150px" alt="">
                                        <p class="p-2">Enter your Email Address or Phone number to recieve an
                                            OTP.
                                        </p>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                    <p class="text-center fw-bold">Or
                                    </p>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone" maxlength="10">
                                        <label for="phone">Phone</label>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-custom-sec w-100">Generate OTP
                                        </button>
                                    </div>
                                </form>
                                <div class="Password-form  p-0">
                                    <div id="MyForm">
                                        <div class="form-floating mb-2 mt-1">
                                            <input type="text" class="form-control" name="OTP" id="field"
                                                placeholder="OTP" maxlength="6">
                                            <label for="OTP">Enter OTP
                                            </label>
                                        </div>
                                        <div class="form-group ">
                                            <!-- <button type="submit" id="verifybtn" class="btn btn-primary w-100">Verify</button> -->
                                            <button type="button" id="OTPfilled" class="btn btn-primary w-100">
                                                Verify
                                            </button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="margin-top:75px">
                                                        <div class="modal-header bg-primary">
                                                            <h5 class="modal-title text-white" id="exampleModalLabel">
                                                                Reset Password
                                                            </h5>
                                                            <button type="button" class="btn-close bg-white"
                                                                data-bs-dismiss="modal" aria-label="btn-close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="#" method="POST" class="px-5 py-3"
                                                                id="Reset-Password">
                                                                <div class="form-floating mb-3">
                                                                    <input type="password" class="form-control"
                                                                        id="matchPassword" name="password"
                                                                        placeholder="password" maxlength="6">
                                                                    <label for="password">New Password
                                                                    </label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="password" name="confirmPassword"
                                                                        class="form-control text-black"
                                                                        placeholder="Confirm password"
                                                                        id="matchConfirmPassword" maxlength="6">
                                                                    <label for="confirmPassword">Confirm
                                                                        Password</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer bg-primary">
                                                            <button type="submit" class="btn btn-success ">Save Password
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function() {
            $('#OTPfilled').on('click', function() {
                const field = $('#field').val().length;
                if (field === 6) {
                    $("#exampleModal").modal('show');
                }
            });
        });

        $(document).ready(function() {
            $("#Reset-Password").validate({
                errorClass: "is-invalid",
                errorElement: "span",
                rules: {
                    password: {
                        required: true,
                        minlength: 6,
                    },
                    confirmPassword: {
                        required: true,
                        minlength: 6,
                        equalTo: "#matchPassword",
                    },
                },
                messages: {
                    password: {
                        required: "Please enter your password",
                        minlength: "Your password must be at least 6 characters long",
                    },
                    confirmPassword: {
                        required: "Please enter your password",
                        minlength: "Your password must be at least 6 characters long",
                        equalTo: "Password does not match",
                    },
                }
            });
        });
    </script>
@section('main-section')
