@extends('layout.master')
@section('title', 'Allblue Technology')
@section('meta-tag')
@endsection
@section('konten')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center light-blue-text text-lighten-1">Allblue Technology</h1>
        <div class="row center">
          <h5 class="header col s12">Solusi Digital untuk bisnis andas</h5>
        </div>
        <div class="row center">
          <a href="#have" id="download-button" class="btn-large waves-effect waves-light light-blue">Lihat apa yang kita punya</a>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="images/background.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container" id="have">
    <div class="section">
      <h1 class="center">Apa yang kita punya ?</h1>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block card-panel hoverable sample">
            <h2 class="center blue-text"><i class="material-icons">business</i></h2>
            <h5 class="center title">Pemasaran Online</h5>
            <p class="light">Bayangkan jika anda punya banyak produk. dan anda bingung Pasar mana lagi yang akan anda "Jajal". Allblue Technology Siap membantu anda untuk memasarkan produk yang anda miliki Ke dunia Digital.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block card-panel hoverable sample">
            <h2 class="center blue-text"><i class="material-icons">web</i></h2>
            <h5 class="center title">Aplikasi Berbasis Website</h5>
            <p class="light">Didunia yang serba digital ini Teknologi Cloud Computing sedang pesat. Maka dari itu kami menawarkan Webapps Berbasis Cloud. Nikmati Aplikasi yang dapat diakses darimana saja, kapan saja. dari perangkat gadget Apa saja yang mendukung Browser.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block card-panel hoverable sample">
            <h2 class="center blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center title">Konsultasi Maslah IT anda</h5>
            <p class="light">Terapkan Sistem IT yang baik pada bisnis Anda. Kami Allblue Technology Siap membantu anda dalam penerapan IT disetiap bagian - bagian bisnis anda</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Miliki Aplikasi dengan teknologi Terbaru pada Bisnis Anda</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/programmer_background.jpg" alt="Penting nya IT dalam bisnins"></div>
  </div>
  <div class="container">
    <div class="section" id="contact">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Hubungi Kami</h4>
          <div class="row">
            <form class="col s12" action="/email/new" method="post">
              <input type="hidden" name="_method" value="POST">
              {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s6">
                  <input id="nama_anda" type="text" name="nama_anda" class="validate" required/>
                  <label for="nama_anda">Nama Anda</label>
                </div>
                <div class="input-field col s6">
                  <input id="email_anda" type="email" name="email_anda" class="validate" required/>
                  <label for="email_anda">Email Anda</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="catatan" class="materialize-textarea" name="catatan" required></textarea>
                  <label for="catatan">Catatan Anda</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <div class="center">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Kirim
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 grey-text text-darken-4">Jadilah Partner kerja kami</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/partner.jpg" alt="Unsplashed background img 3"></div>
  </div>
@endsection
