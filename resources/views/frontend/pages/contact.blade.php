@extends('frontend.layout.layout')

@section('content')

<div class="page-heading about-page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Bize Ulaş</h2>
                    <span>En yakın zamanda ekibimiz mesajınıza dönüş sağlayacaktır.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90186.37207676383!2d-80.13495239500924!3d25.9317678710111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ad1877e4a82d%3A0xa891714787d1fb5e!2sPier%20Park!5e1!3m2!1sen!2sth!4v1637512439384!5m2!1sen!2sth" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>İletişim Formu</h2>
                    <span>Mesajınız en geç 24 saat içerisinde yanıtlanacaktır.</span>
                </div>
                @if (session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif

                    @if (count($errors))
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                <form id="contact" action="{{ route('iletisim.kaydet') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-lg-6">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Adınız" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input name="email" type="text" id="email" placeholder="E-posta Adresiniz" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12" style="margin-top: 30px">
                        <fieldset>
                          <input name="subject" type="text" id="subject" placeholder="Konu" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6" id="message" placeholder="Mesajınız" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
