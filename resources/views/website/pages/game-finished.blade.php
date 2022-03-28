@extends('website.layouts.main')
@section('main-section')
    <main class="main align-items-center justify-content-center"
        style="background: linear-gradient(45deg, #685cad6b, transparent);">
        <section class="container py-5">
            <div class="Ticket-div">
                <div class="lottery-header">
                    <span class="ticket-number ms-5">Ticket #1</span>
                    <ul class="selected-number lottery-single__number d-flex mt-2">
                        <li class="active">33</li>
                        <li class="active">99</li>
                        <li class="active">11</li>
                        <li class="active">44</li>
                        <li class="active">110</li>
                    </ul>
                </div>

                <div class="lottery-single__body">
                    <ul class="lottery-single__number">
                        <li>00</li>
                        <li>11</li>
                        <li>22</li>
                        <li class="active">33</li>
                        <li>44</li>
                        <li>55</li>
                        <li>66</li>
                        <li>77</li>
                        <li>88</li>
                        <li class="active">99</li>
                        <li>110</li>
                        <li>00</li>
                        <li class="active">11</li>
                        <li>22</li>
                        <li>33</li>
                        <li class="active">44</li>
                        <li>55</li>
                        <li>66</li>
                        <li>77</li>
                        <li>88</li>
                        <li>99</li>
                        <li class="active">110</li>



                    </ul>
                </div>

                <div class="lottery-single__footer">
                    <hr>
                    <div class="text-center pb-4 pt-2">
                        <button class="btn btn-success">Generate Manually</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="thankyou h-100">
            <div class="box text-center m-auto" style="background-image: var(--mbr-primary-500);">
                <div class="icon">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M83.4167 42.0117V45.5C83.412 53.6764 80.7644 61.6323 75.8687 68.1811C70.973 74.7299 64.0916 79.5207 56.2507 81.839C48.4098 84.1573 40.0296 83.8789 32.3598 81.0453C24.6901 78.2117 18.1418 72.9748 13.6915 66.1156C9.24128 59.2563 7.12752 51.1423 7.6655 42.9835C8.20349 34.8248 11.3644 27.0586 16.6768 20.8431C21.9892 14.6276 29.1685 10.2958 37.1439 8.4939C45.1193 6.69196 53.4635 7.51638 60.9321 10.8442"
                            stroke=" var(--mbr-primary-800)" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path class="tcheck" d="M43.4167 78.707l18.647 23.646L112.5 50.5"
                            stroke=" var(--mbr-primary-800)" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <h2 class="title">Thank you for playing!</h2>
                <p>Your quiz has been submitted and will be reviewed by our administrators. </br>
                    You will receive an email when your quiz has been approved. Thank you for your participation!</p>
            </div>
        </section>
    </main>
    <script>
        $('.lottery-single__number li').on('click', function() {
            $(this).toggleClass('active');
        });
    </script>
@endsection
