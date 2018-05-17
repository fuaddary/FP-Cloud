@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('header')
    @include('layouts.header')    
@endsection

@section('content')

           <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('image/backgroud.jpg');">
                    <div class="hero bg-black-op">
                        <div class="hero-inner">
                            <div class="content content-full">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 py-30 text-center">
                                        <h1 class="display-4 font-w700 text-white mb-10">CTFQ</h1>
                                        <h2 class="h4 font-w400 text-white-op pb-30 mb-20 border-white-op-b">Platform Capture The Flag Terpercaya</h2>

                                        <!-- Countdown.js (class is initialized in js/pages/op_coming_soon.js), for more examples you can check out https://github.com/hilios/jQuery.countdown -->
                                        <div class="js-countdown mb-20"></div>

                                        <a class="btn btn-hero btn-noborder btn-rounded btn-outline-warning" href="/masuk">
                                             Mulai <i class="fa fa-arrow-right mr-10"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>

@endsection