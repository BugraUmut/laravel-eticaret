<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="{{ asset('/') }}images/white-logo.png" alt="">
                    </div>
                    <ul>
                        <li><a href="#">{{ $settings['adres'] }}</a></li>
                        <li><a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a></li>
                        <li><a href="tel:{{ $settings['telefon'] }}">{{ $settings['telefon'] }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>İhtiyacınız Olabilir</h4>
                <ul>
                    <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                    {{-- <li><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li> --}}
                    <li><a href="{{ route('iletisim') }}">SSS</a></li>
                    <li><a href="{{ route('iletisim') }}">İletişim</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Yardım</h4>
                <ul>
                    <li><a href="{{ route('iletisim') }}">Yardım</a></li>
                    <li><a href="{{ route('iletisim') }}">SSS</a></li>
                    <li><a href="{{ route('iletisim') }}">Kargolama</a></li>
                    <li><a href="{{ route('iletisim') }}">Kargo Takip</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>
                        Copyright &copy;
                        {{ date('Y') }} Tüm Hakları Saklıdır
                    </p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
