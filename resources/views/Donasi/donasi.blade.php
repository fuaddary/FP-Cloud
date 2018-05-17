@extends('layouts.app')

@section('title', 'Pricing')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('header')
    @include('layouts.header')    
@endsection

@section('content')
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Modern Design -->
                    
                    <h2 class="content-heading">Variations <small>Hover animations, colors and style</small></h2>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <!-- Developer Plan -->
                            <a class="block block-rounded text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">Developer</h3>
                                </div>
                                <div class="block-content bg-primary">
                                    <div class="h1 font-w700 mb-10 text-white">$19</div>
                                    <div class="h5 text-muted text-white-op">per month</div>
                                </div>
                                <div class="block-content">
                                    <p><strong>2</strong> Projects</p>
                                    <p><strong>10GB</strong> Storage</p>
                                    <p><strong>15</strong> Clients</p>
                                    <p><strong>Email</strong> Support</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-primary">Pay Now</span>
                                </div>
                            </a>
                            <!-- END Developer Plan -->
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <!-- Startup Plan -->
                            <a class="block block-rounded text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">Startup</h3>
                                </div>
                                <div class="block-content bg-warning">
                                    <div class="h1 font-w700 mb-10 text-white">$39</div>
                                    <div class="h5 text-muted text-white-op">per month</div>
                                </div>
                                <div class="block-content">
                                    <p><strong>10</strong> Projects</p>
                                    <p><strong>30GB</strong> Storage</p>
                                    <p><strong>100</strong> Clients</p>
                                    <p><strong>FULL</strong> Support</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-warning">Pay Now</span>
                                </div>
                            </a>
                            <!-- END Startup Plan -->
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <!-- Business Plan -->
                            <a class="block block-link-shadow block-rounded text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">Business</h3>
                                </div>
                                <div class="block-content bg-danger">
                                    <div class="h1 font-w700 mb-10 text-white">$99</div>
                                    <div class="h5 text-muted text-white-op">per month</div>
                                </div>
                                <div class="block-content">
                                    <p><strong>50</strong> Projects</p>
                                    <p><strong>100GB</strong> Storage</p>
                                    <p><strong>1000</strong> Clients</p>
                                    <p><strong>FULL</strong> Support</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-danger">Pay Now</span>
                                </div>
                            </a>
                            <!-- END Business Plan -->
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <!-- VIP Plan -->
                            <a class="block block-link-shadow block-rounded text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">VIP</h3>
                                </div>
                                <div class="block-content bg-info">
                                    <div class="h1 font-w700 mb-10 text-white">$249</div>
                                    <div class="h5 text-muted text-white-op">per month</div>
                                </div>
                                <div class="block-content">
                                    <p><strong>Unlimited</strong> Projects</p>
                                    <p><strong>Unlimited</strong> Storage</p>
                                    <p><strong>Unlimited</strong> Clients</p>
                                    <p><strong>FULL</strong> Support</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-info">Pay Now</span>
                                </div>
                            </a>
                            <!-- END VIP Plan -->
                        </div>
                    </div>
                    <!-- END Modern Design -->
                    <!-- END Classic Design -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
@endsection

