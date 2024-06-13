<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Universo dos Relógios</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  @yield("scriptjs")
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex text-bg-dark p-3">
    <div class="navbar">
      <nav id="navbar" class="navbar navbar-dark navbar-expand-md bg-dark pl-5 pr-5 mb-5">
      <a href="{{ route('home') }}" class=""><img src="assets/img/logo/logo_peq.png" alt="" class="img-fluid"></a>
      
      <div class="collapse navbar-collapse">
            <a class="nav-link scrollto active" href="{{  route('home') }}">Início</a>


        
        <li class="dropdown">
            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              </ul>
        </li>
        
      </div>
      <div class="navbar-nav">
          @if(!\Auth::user())
            <a href="{{route('login')}}" class="get-started-btn scrollto">Entrar</a>
          <a href=" {{route('ver_carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
          @else
             <a class="bi bi-chevron-down" href="{{  route('compra_historico') }}">As Minhas Compras</a>
             <a class="nav-link" href="{{  route('sair') }}"><img src="{{URL::asset('/images/icones/icons8-logout-24.png')}}" alt="logo"></a>
          @endif
      </div>

    
      </nav><!-- .navbar -->

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="produtos" class="produtos">
    <div class="row">

          @if(\Auth::user())
              <div class="col-12">
                  <a href="{{ route('sair') }}"><img src="{{URL::asset('/images/icones/icons8-logout-48.png')}}" alt="logo"></a><p class="text-right">Olá, {{\Auth::user()->nome }}</p><p class="text-right">Código de Utilizador: {{\Auth::user()->id }}</p>
              </div>
          @endif

          @if($message = Session::get("err"))
              <div class="col-12">
                  <div class="alert alert-danger">{{ $message }}</div>
              </div>
          @endif

          @if($message = Session::get("ok"))
              <div class="col-12">
                  <div class="alert alert-success">{{ $message }}</div>
              </div>
          @endif

          <!-- Nesta Div terá uma área que os arquivos irão adicionar conteúdo -->
          <br>
          @yield("conteudo")
          <br>
          </div>
          </div>
    </section><!-- End Produtos Section -->


  <!-- Contact-->
  <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Morada</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Travessa do Douro, N1</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">universodosrelogios@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telemóvel</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+351 936 059 047</div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://twitter.com/?lang=pt"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://www.facebook.com/?locale=pt_PT"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>



        </div>

      </div>
    </section><!-- End Team Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">

    <div class="container">
      <div class="copyright">
        &copy; Copyright &copy; Marcelo Cruz &copy; PAP ESHM
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>