@extends('website.layouts.main')
@section('main-section')
    <main class="main">
        <section class="single-game-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Game title</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
            for($i=0; $i<6; $i++){?>
                    <div class="col-md-6 my-2">
                        @include('website.layouts.game-card')
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </main>
@endsection
