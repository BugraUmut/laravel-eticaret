@extends('frontend.layout.layout')

@section('content')
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>{{ $product->name ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img src="{{ asset('/' . $product->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{ $product->name ?? '' }}</h4>
                    <span class="price">{{ number_format($product->price,2) }}₺</span>

                    <span>{!! $product->content ?? '' !!}</span>
                    {{-- <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                    </div> --}}
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>Adet Sayısı</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>{{ number_format($product->price,2) }}₺</h4>
                        <div class="main-border-button"><a href="#">Sepete Ekle</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
