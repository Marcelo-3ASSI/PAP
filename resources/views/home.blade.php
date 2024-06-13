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


</head>

<body>
@yield("scriptjs")
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="{{ route('home') }}" class=""><img src="assets/img/logo/logo_peq.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{  route('home') }}">Início</a></li>
          <li><a class="nav-link scrollto" href="#sobre">Sobre o Projeto</a></li>
          <li class="dropdown"><a href="#"><span>Produtos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('categoria' )}}">Todos os produtos</a></li>
              <li><a href="{{ route('categoria_por_id', 1 )}}">Relógios casuais</a></li>
              <li><a href="{{ route('categoria_por_id', 2 )}}">Relógios desportivos</a></li>
              <li><a href="{{ route('categoria_por_id', 3 )}}">Pulseiras</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Realizado por</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @if(!\Auth::user())
      <a href="{{route('login')}}" class="get-started-btn scrollto">Entrar</a>
      @else
      <a class="bi bi-chevron-down" href="{{  route('compra_historico') }}">Minhas Compras</a>
      <a class="nav-link" href="{{  route('sair') }}"><img src="{{URL::asset('/images/icones/icons8-logout-24.png')}}" alt="logo"></a>
      @endif
    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Universo dos Relógios<span>.</span></h1>
          <h2>Especialistas em relógios</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-watch"></i>
            <h3><a href="/categoria">Relógios</a></h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-bag"></i>
            <h3><a href="/3/categoria">Acessórios</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="sobre" class="sobre">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Tempo de estilo, elegância a cada segundo!</h3>
            <p class="fst-italic">
            É importante cuidar do nosso acessório.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Cada relógio tem as suas características.</li>
              <li><i class="ri-check-double-line"></i> Cada um deles distingue-se dos demais por cada característica única.</li>
            </ul>
            <p>
              Cada um de nós gosta de ter um acessório único e diferente dos que toda a gente possui. Aqui podes comprar o teu relógio único e indicado de maneira especial unicamente para ti.<br><br>Agora fazes parte da Família Universo dos Relógios!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Serviços</h2>
          <p>Verifica os nossos serviços</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>Entrega ao domicílio</a></h4>
              <p>Oferecemos entrega rápida e segura dos seus relógios diretamente para a sua porta. Faça as suas compras com comodidade e receba seus os relógios no conforto da sua casa.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>Ajustamento</a></h4>
              <p>Conte com os nossos especialistas para ajustar os seus relógios conforme a sua preferência. A nossa equipa está pronta para garantir que o seu relógio esteja perfeitamente ajustado e pronto para uso.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4>Métodos de pagamento</a></h4>
              <p>Facilitamos o processo de pagamento oferecendo diversas opções para a sua conveniência. Aceitamos pagamentos por PayPal, MB WAY e cartão de crédito. Escolha a opção que melhor se adequa às suas necessidades e desfrute de uma experiência de compra simples e segura.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4>Pagamento à cobrança</a></h4>
              <p>Oferecemos também a conveniência do pagamento à cobrança, onde você pode pagar pelo seu pedido no momento da entrega. Aproveite a comodidade de receber seu o relógio primeiro e efetuar o pagamento posteriormente, tornando a sua experiência de compra ainda mais fácil e sem complicações.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4>Satisfação dos clientes</a></h4>
              <p>A sua satisfação é a nossa prioridade. Estamos aqui para garantir uma experiência de compra excepcional, desde a seleção do produto até à entrega. Conte conosco para atender as suas necessidades e garantir a sua total satisfação.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4>A nossa história</a></h4>
              <p>Fundada com paixão e comprometimento, a nossa loja nasceu do desejo de oferecer aos clientes uma experiência de compra de relógios única. Desde o nosso início, temos-nos dedicado a selecionar cuidadosamente os melhores produtos e a proporcionar um serviço excepcional aos nossos clientes.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h4>Descubra a excelência do nosso atendimento: O nosso compromisso com a Satisfação do Cliente</h4>
              <br>
              <p>
              Bem-vindo ao nosso universo dedicado à satisfação do cliente, onde cada interação é mais do que uma transação, é uma oportunidade de criar experiências memoráveis. Na nossa jornada, priorizamos não apenas vender produtos ou serviços, mas construir relacionamentos sólidos e duradouros.
              </p>
              <br>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Clientes Satisfeitos</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Marcas de relógios</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Anos de Experiência</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Prémios</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Lucas Silva</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  A experiência de compra foi incrível! Desde o atendimento atencioso até a qualidade dos produtos, estou extremamente satisfeito." - Cliente Satisfeito, Braga
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Diogo Viana</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  A entrega foi rápida, e o produto superou as minhas expectativas. Cada vez que olho para o meu pulso, sinto uma onda de satisfação. Obrigada, Universo dos Relógios, por tornar o meu dia mais especial
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Afonso Silva</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Os relógios desta loja são verdadeiras obras de arte. Comprei um para cada ocasião, e sempre que os uso recebo elogios. A qualidade é notável, e o atendimento ao cliente é excepcional
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Tiago Maciel</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  O meu marido escolheu um relógio deslumbrante para o meu aniversário, e a embalagem é tão elegante quanto o presente. Sentir que fui tão bem cuidada como cliente deixou-me realmente emocionada
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Diogo Monteiro</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quando entrei no website da loja, fiquei impressionado com a variedade de opções. Eles entendem verdadeiramente a importância de um presente significativo. A minha esposa ficou emocionada com o relógio que escolhi, e eu fiquei ainda mais surpreso com a expressão de felicidade dela. Obrigado, Universo dos Relógios, por tornar este momento tão especial
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fundador</h2>
          <p>Verifique o fundador da nossa loja</p>
        </div>

        <div class="row">

          <div class="d-flex justify-content-center align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/marcelooccruz"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100083180315478"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/marcelolcruzz/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Marcelo Cruz</h4>
                <span>Fundador da loja</span>
              </div>
            </div>
          </div>

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