@extends('layouts.auth.app')

@section('title', 'Info')

@section('content')
    <div class="bg-image" style="background-image: url('image/sedekah.jpg');">
        <div class="row mx-0 bg-black-op">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                <div class="p-30 invisible" data-toggle="appear">
                    <p class="font-size-h3 font-w600 text-white">
                        “Barangsiapa memberi pinjaman kepada Allah dengan pinjaman yang baik, maka Allah akan melipatgandakan balasan pinjaman itu untuknya dan dia akan memperoleh pahala yang banyak”
                    </p>
                    <p class="font-size-h5 text-white">
                        (QS. Al Hadid: 11)
                    </p>
                    <p class="font-italic text-white-op">
                        Coded with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://github.com/fuaddary/SSH" target="_blank">Kelompok IMK</a>
                    </p>
                </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                <div class="content content-full">
                    {{-- <!-- Header --> --}}
                    <div class="px-30 py-10">
                        <a class="link-effect font-w700" action="/dashboard">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">SSH</span>
                        </a>
                        <h1 class="h4 font-w700 mt-30 mb-10">
                            <i class="si si-check"> Donasi Berhasil</i>
                        </h1>
                        <h1 class="h4 font-w700 mt-30 mb-10">
                            <i class="si si-check"> Secepatnya kami verifikasi</i>
                        </h1>
                        <h1 class="h4 font-w700 mt-30 mb-10">
                            <i class="si si-check"> Terima kasih</i>
                        </h1><br></br>
                        <a href="/">
                            <button class="btn btn-sm btn-hero btn-alt-primary">
                                <i class="fa fa-home mr-10"></i> Halaman Utama
                            </button>       
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection