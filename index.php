<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Diflen Global</title>
  <meta content="Conferência We are Global" name="description">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="Diflen Global">
  <!-- Favicons -->
  <link href="<?php echo assetsurl ?>/img/favicon.png" rel="icon">
  <link href="<?php echo assetsurl ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo assetsurl ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo assetsurl ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo assetsurl ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo assetsurl ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo assetsurl ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo assetsurl ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo assetsurl ?>/css/style.css" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138371304-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-138371304-1');
  </script>
</head>

<body id="page-top">

  <!--/ Nav Init /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img class="logo" src="<?php echo assetsurl ?>/img/logo.png"></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">Movimento</a>
          </li>
          <!-- <li class="nav-item">
                        <a class="nav-link js-scroll" href="#preletores">Preletores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#bandas">Bandas</a>
                    </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#subscriber">Inscrição</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#local">Local</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Destaque Init /-->
  <div id="home" class="intro route bg-image" style="background-image: url(<?php echo assetsurl ?>/img/global.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h4 class="display-6 color-d space-top fontGlobal">ALL IN</h4>
          <h1 class="intro-title mb-4 fontGlobal">DIFLEN GLOBAL 2019</h1>
          <p class="intro-subtitle space-bottom"><span class="text-slider-items">Discipulando,e Formando,Líderes,Em nações,Somos todos Diflen</span><strong class="text-slider"></strong></p>
          <h2 class="mb-4 fontGlobal light subtitleGlobal">15 e 16 de Novembro 2019</h2>
          <a class="nav-link js-scroll" href="#subscriber">
            <button class="button button-a button-big button-rouded">Mais Informações</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Destaque End /-->

  <!--/ Section Countdown Init /-->
  <section id="countdown" class="route">
    <div class="section-counter paralax-mf bg-image" style="background-image: url(<?php echo assetsurl ?>/img/banner.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-lg-2"></div>
          <div class="col-3 col-md-2 col-lg-2">
            <div class="counter-box">
              <div class="counter-box pt-2 pt-md-0">
                <div class="counter-num">
                  <p class="counter" id="dias"></p>
                  <span class="counter-text fontGlobal">Dias</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3 col-md-2 col-lg-2">
            <div class="counter-box pt-2 pt-md-0">
              <div class="counter-num">
                <p class="counter" id="horas"></p>
                <span class="counter-text fontGlobal">Horas</span>
              </div>
            </div>
          </div>
          <div class="col-3 col-md-2 col-lg-2">
            <div class="counter-box pt-2 pt-md-0">
              <div class="counter-num">
                <p class="counter" id="minutos"></p>
                <span class="counter-text fontGlobal">Min</span>
              </div>
            </div>
          </div>
          <div class="col-3 col-md-2 col-lg-2">
            <div class="counter-box pt-2 pt-md-0">
              <div class="counter-num">
                <p class="counter" id="segundos"></p>
                <span class="counter-text fontGlobal">Seg</span>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-lg-2"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fontGlobal">Movimento Diflen</h1>
            <p class="lead"><strong>Nossa missão é</strong> inspirar e levantar jovens para que sejam verdadeiros discípulos de Cristo, e que, de acordo com seu potencial, talento e chamado, sejam influentes em todas as esferas da sociedade e em todas as nações. Portanto ide, fazei discípulos de todas as nações, batizando-os em nome do Pai, e do Filho, e do Espírito Santo; Ensinando-os a guardar todas as coisas que eu vos tenho mandado; e eis que eu estou convosco todos os dias, até a consumação dos séculos. Amém. Mateus 28:19,20.
              <br />
              <br /><strong>DIFLEN - Discipulando e formando líderes em nações</strong></p>
            <br />
            <br />
            <h4 class="display-6 fontGlobal">Diflen Global</h4>
            <p class="lead">Nossa conferência reúne jovens de todo Brasil e de todo mundo para trocar experiências, crescer espiritualmente, estabelecer relacionamentos, com muitas palavras que edificam, workshops e programações incríveis com vários convidados nacionais e internacionais.
              <br />
              <br /><strong>Confira o que rolou na conferência do ano passado:</strong></p>
          </div>
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9 space-bottom">
            <iframe src="https://www.youtube.com/embed/fjdgxAg9tD0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
  </section>
  <!--/ Section Countdown End /-->

  <!-- Comentar preletores e banda - Pr Isaias -->

  <!--/ Section Preletores Init /-->
  <!-- <section id="preletores" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a fontGlobal">Preletores Confirmados</h3>
                        <p class="subtitle-a">Veja os preletores convidados até o momento...</p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <img src="<?php echo assetsurl ?>/img/nelson.png"></img>
                        <h4 class="display-7 text-center fontGlobal">Pr. Nelson Junior</h4>
                        <p class="subtitle-a text-center">Pastor, escritor, palestrante, capelão internacional, coordenador e idealizador do movimento Eu escolhi esperar. Bacharel em Teologia, Mestrado em Comportamento e Pós Graduado em Gestão e Liderança.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <img src="<?php echo assetsurl ?>/img/isaias.png"></img>
                        <h4 class="display-7 text-center fontGlobal">Pr. Isaías Huber</h4>
                        <p class="subtitle-a text-center">Líder internacional do movimento DIFLEN. Pastor de jovens há muitos anos, ele tem atuado na missão de inspirar e levantar jovens, para que sejam influentes em todas as esferas da sociedade e em todas as nações.</p>
                    </div>
                </div>
                <div class="col-md-4">`
                    <div class="box">
                        <img src="img/anderson.png"></img>
                        <h4 class="display-7 text-center fontGlobal">Pr. Anderson Silva</h4>
                        <p class="subtitle-a text-center">Pastor sênior da Igreja Vivo por Ti, escritor, formado pelo Centro de Treinamento Rhema Brasil, líder apostólico da Igreja Em Movimento. Líder mobilizador do Entre Amigos, clube de mentoria para jovens pastores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
  <!--/ Section Preletores End /-->

  <!--/ Section Banda Init /-->
  <!-- <section id="bandas" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a fontGlobal">Bandas</h3>
                        <p class="subtitle-a">Veja as bandas que estarão na conferência</p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <img src="<?php echo assetsurl ?>/img/zoe.png"></img>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <img src="<?php echo assetsurl ?>/img/daniel.png"></img>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <img src="<?php echo assetsurl ?>/img/diflenMusic.png"></img>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
  <!--/ Section Banda End /-->

  <?php
  $registrations = array(
    "24h" => array(
      "name" => "Lote Especial Somente por 24 Horas",
      "description" => "Vagas Limitadas",
      "price" => "89,00",
      "from" => "05/05",
      "to" => "05/05",
      "link" => "https://www.e-inscricao.com/diflen/diflen-global/"
    ),
    "1Lote" => array(
      "name" => "Primeiro Lote",
      "description" => "Vagas Limitadas!",
      "price" => "99,00",
      "from" => "06/05",
      "to" => "15/06",
      "link" => "https://www.e-inscricao.com/diflen/diflen-global/"
    ),
    "2Lote" => array(
      "name" => "Segundo Lote",
      "description" => "Vagas Limitadas!",
      "price" => "114,00",
      "from" => "16/06",
      "to" => "25/07",
      "link" => "https://www.e-inscricao.com/diflen/diflen-global/"
    ),
    "3Lote" => array(
      "name" => "Terceiro Lote",
      "description" => "Vagas Limitadas!",
      "price" => "129,00",
      "from" => "26/07",
      "to" => "03/09",
      "link" => "https://www.e-inscricao.com/diflen/diflen-global/"
    ),
    "4Lote" => array(
      "name" => "Quarto Lote",
      "description" => "Vagas Limitadas!",
      "price" => "149,00",
      "from" => "04/09",
      "to" => "04/11",
      "link" => "https://www.e-inscricao.com/diflen/diflen-global/"
    ),
  )
  ?>

  <!--/ Section Subscriber Init /-->
  <section id="subscriber" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(<?php echo assetsurl ?>/img/banner.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a light fontGlobal">Quanto custa?</h3>
            <p class="subtitle-a light">Garanta seu ingresso agora!</p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        foreach ($registrations as $key => $lote) :

          $hoje = strtotime(date("Y-m-d H:i:s"));
          // $hoje = strtotime("2019-11-03 10:00:00");
          $from = explode('/', $lote['from']);
          $to = explode('/', $lote['to']);

          $fromD = strtotime("2019-" . $from[1] . "-" . $from[0] . " 00:00:00");
          $toD = strtotime("2019-" . $to[1] . "-" . $to[0] . " 23:59:59");
          $class = "registration-card";
          $comprar = false;

          if ($hoje > $fromD && $hoje < $toD) {
            $lote['status'] = "Comprar";
            $class = "registration-comprar";
            $comprar = true;
          } elseif ($hoje < $toD) {
            $lote['status'] = "Aguarde";
            $lote['description'] = "Vagas Limitadas!";
            $class = "registration-aguarde";
          } else {
            $lote['status'] = "Sold Out";
            $lote['description'] = "Ingressos esgotados!";
            $class = "registration-esgotado";
          }
          ?>
          <?php
          if ($key == "24h") :
            ?>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 <?php echo $class; ?>">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 <?php echo $class; ?>">
                <?php
              else :
                ?>
                  <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 <?php echo $class; ?>">
                  <?php
                endif;
                ?>
                  <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal"><?php echo $lote['name'] ?></h4>
                      </div>
                      <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                          <li><?php echo $lote['description'] ?></li>
                          <!-- <li>De <?php echo $lote['from'] ?> até <?php echo $lote['to'] ?></li> -->
                        </ul>
                        <h1 class="card-title pricing-card-title value">R$ <?php echo $lote['price'] ?></h1>
                        <?php if ($comprar) : ?>
                          <a target="_new" href="<?php echo $lote['link'] ?>">
                            <button class="button button-a button-big button-rouded my-4"><?php echo $lote['status'] ?></button>
                          </a>
                        <?php else : ?>
                          <button class="button button-disable button-big button-rouded my-4"><?php echo $lote['status'] ?></button>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                if ($key == "24h") :
                  ?>
                </div>
              </div>
            <?php
          endif;
          ?>
          <?php
        endforeach;
        ?>
        </div>
        <!--/ Table Price End /-->
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            <h3 class="title-a display-7 text-center space-top light fontGlobal">Outras Informações</h3>
            <br />
            <p class="subtitle-a light text-center">O valor da inscrição é individual e pode ser pago no boleto, cartão de crédito ou de débito.</p>
            <p class="subtitle-a light text-center">As vagas são limitadas.</p>
            <p class="subtitle-a light text-center">Política de reembolso e cancelamento: somente até 7 dias antes do evento será devolvido o valor integral pago.</p>
          </div>
          <div class="col-1"></div>
        </div>
      </div>
  </section>
  <!--/ Section Subscriber End /-->

  <!--/ Section Local Init /-->
  <section id="local" class="paralax-mf footer-paralax bg-image route" style="background-image: url(<?php echo assetsurl ?>/img/banner.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-box text-center">
                <h3 class="title-a light fontGlobal">Onde Será?</h3>
                <p class="subtitle-a light">Igreja Apostólica Novidade de Vida</p>
                <p>Av. Eng. Eusébio Stevaux, 1159 - Jurubatuba, São Paulo - SP</p>
                <div class="line-mf"></div>
              </div>
            </div>
          </div>
          <iframe class="space-bottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.002939125009!2d-46.698205685020056!3d-23.675852884626142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce51b45342eeb5%3A0x70279f2e7a00e04f!2sIgreja+Apost%C3%B3lica+Novidade+de+Vida!5e0!3m2!1spt-BR!2sbr!4v1555184611675!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Diflen</strong>. Todos os direitos reservados</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Local End /-->

  <!--/ <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
                            <div id="preloader"></div> /-->

  <!-- JavaScript Libraries -->
  <script src="<?php echo assetsurl ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/popper/popper.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/counterup/jquery.counterup.js"></script>
  <script src="<?php echo assetsurl ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo assetsurl ?>/lib/typed/typed.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo assetsurl ?>/js/main.js"></script>

  <!-- Countdown -->
  <script src="<?php echo assetsurl ?>/js/countdown.js"></script>

</body>

</html>
