<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>@yield('title')</title>
  @yield('meta-tag')

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/myawesome.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <nav class="light-blue lighten-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#contact">Hubungi Kami</a></li>
        <li><a href="#siapa-kami">Tentang Kami</a></li>

      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#contact">Hubungi Kami</a></li>
        <li><a href="#siapa-kami">Tentang Kami</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- konten -->
  @yield('konten')
  <!-- end of konten -->
  <footer class="page-footer light-blue" id="siapa-kami">
    <div class="container">
      <div class="row">
        <div class="col l12 s12">
          <h5 class="white-text">Siapa Kami ?</h5>
          <p class="grey-text text-lighten-4">
          Kami adalah sekumpulan orang - orang yang kritis akan Teknologi yang ada di Dunia. Kami memperlajari, Memahami, dan membagikan apa yang telah kami pelajari kepada duni ..
          </p>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col s6">
            <div class="made_by left">
                Dibuat dengan <a class="brown-text" href="http://materializecss.com">Materialize</a> CSS dan <a class="brown-text" href="http://laravel.org">Laravel 5.3</a>
            </div>
          </div>
          <div class="col s6">
            <div class="copyright right">
              <stong>info@allblue.technology</stong>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/jquery.matchHeight-min.js"></script>
  <script src="js/init.js"></script>
  <script>
  $(document).ready(function(){
    $('.sample').matchHeight();
    $(document).on('click', 'a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
});
  });

  </script>
</body>
</html>
