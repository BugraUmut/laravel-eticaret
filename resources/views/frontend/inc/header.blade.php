<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('anasayfa') }}" class="logo">
                        <img src="{{ asset('') }}images/logo.png">
                        {{-- <h2>{{ config('app.name') }}</h2> --}}
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('anasayfa') }}" class="active">Anasayfa</a></li>
                            @if (!empty($categories) && $categories->count() > 0)

                                @foreach ($categories as $category)
                                    @if ($category->cat_ust == null)
                                        <li class="submenu">
                                            <a href="javascript:;">{{ $category->name }}</a>
                                            <ul>
                                                @foreach ($categories as $subCategory)
                                                    @if ($subCategory->cat_ust == $category->id)
                                                        <li><a href="#">{{ $subCategory->name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach

                            @endif
                            {{-- <li class="scroll-to-section"><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li> --}}
                            <li class="scroll-to-section"><a href="{{ route('urunler') }}">Ürünler</a></li>
                            <li class="scroll-to-section"><a href="{{ route('iletisim') }}">İletişim</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
