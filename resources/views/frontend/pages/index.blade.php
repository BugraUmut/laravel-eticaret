@extends('frontend.layout.layout')

@section('content')
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>{{ config('app.name') }}</h4>
                                <span>Güvenli e-ticaret</span>
                                <div class="main-border-button">
                                    <a href="{{ route('urunler') }}">Alışverişe Başla</a>
                                </div>
                            </div>
                            <img src="{{ asset('/') }}images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kadın</h4>
                                            <span>Kadınlar için en iyileri</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Kadın Giyim</h4>
                                                <p>Kısa Açıklama</p>
                                                <div class="main-border-button">
                                                    <a href="#">Keşfet</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('/') }}images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Erkek</h4>
                                            <span>Erkekler için en iyileri</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Erkek</h4>
                                                <p>Kısa Açıklama</p>
                                                <div class="main-border-button">
                                                    <a href="#">Keşfet</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('/') }}images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Çocuk</h4>
                                            <span>Çocuklar için en iyileri</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Çocuk</h4>
                                                <p>Kısa Açıklama</p>
                                                <div class="main-border-button">
                                                    <a href="#">Keşfet</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('/') }}images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Aksesuarlar</h4>
                                            <span>Yeni moda aksesuarlar</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Aksesuarlar</h4>
                                                <p>Kısa Açıklama</p>
                                                <div class="main-border-button">
                                                    <a href="#">Keşfet</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('/') }}images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Erkek Giyim</h2>
                        <span>Kısa Açıklama</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/men-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Erkek Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/men-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Erkek Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/men-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Erkek Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/men-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Erkek Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kadın Giyim</h2>
                        <span>Kısa Açıklama</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/women-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Kadın Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/women-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Kadın Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/women-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Kadın Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/women-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Kadın Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Çocuk Giyim</h2>
                        <span>Kısa Açıklama</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/kid-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Çocuk Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/kid-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Çocuk Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/kid-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Çocuk Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('urundetay', 'urun-1') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('/') }}images/kid-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Çocuk Giyim</h4>
                                    <span>150.00₺</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->
@endsection
