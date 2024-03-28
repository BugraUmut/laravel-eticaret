@extends('frontend.layout.layout')

@section('content')

<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Yeni Ürünlerimiz</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Son Eklenen Ürünler</h2>
                    <span>Tüm ürünlerimize göz at.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if (!empty($products) && $products->count() > 0)
                @foreach ($products as $product)
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ route('urundetay', $product->slug) }}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="{{ route('urundetay', $product->slug) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="down-content">
                                <h4>{{ $product->name }}</h4>
                                <span>{{ number_format($product->price, 2) }}₺</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            {{ $products->links('pagination::default') }}

        </div>
    </div>
</section>
@endsection
