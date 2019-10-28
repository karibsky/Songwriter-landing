<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Владислав Коряков</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/freelancer.css" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-sm fixed-top text-uppercase" id="mainNav">
    <button class="navbar-toggler navbar-toggler-right text-uppercase text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Navigation">
      Меню
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <div class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1 mx-sm-3">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger about" data-toggle="collapse">Обо мне</a>
        </li>
        <li class="nav-item mx-0 mx-lg-1 mx-sm-3">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger songs" data-toggle="collapse">Творчество</a>
        </li>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto rounded-circle" src="img/profile.jpg" alt="artist_photo">
      <h1 class="text-uppercase mb-0">Влад Коряков</h1>
      <hr class="star-dark mb-5">
      <h2 class="font-weight-light mb-0">Вокалист, композитор и сонграйтер</h2>
    </div>
  </header>
  <!-- About Section -->
  <section class="bg-secondary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Обо мне</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="text-justify container">
          <h2 class="lead">
            Родился 20 мая 1998 года в Еманжелинске (Россия). 
            После окончания школы переехал в Челябинск, поступил в колледж на программиста.
            Уверенный в себе, мужественный и галантный мужчина, тонко чувствующий женщин и раскрывающий в своем творчестве зрелое понимание отношений и любви. 
            С самого детства занимался музыкой и добивался успеха в творчестве вопреки жизненным обстоятельствам. 
          </h2>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light contact">
          <i class="fas fa-phone-square mr-2"></i>
          Связаться со мной
        </a>
      </div>
    </div>
  </section>
  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Творчество</h2>
      <hr class="star-light mb-5">
      <div class="row">
        @foreach($songs as $song)
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              </div>
            </div>
            <img class="img-fluid" src="{{$song->image_path}}" alt="">
          </a>
          <h3 class="text-center">{{$song->name}}</h3>
          <br>
          <audio controls class="embed-responsive-item mb-4 col-sm-12">
            <source src="{{$song->song_path}}">
            </audio>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer text-center bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0"></div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4 text-primary">Социальные сети</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://vk.com/officialloves" target="_blank">
                  <i class="fab fa-fw fa-vk"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/valoveskk/" target="_blank">
                  <i class="fab fa-fw fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.youtube.com/channel/UC943E7M8XYl5qUgr_w4Dn7g/videos" target="_blank">
                  <i class="fab fa-fw fa-youtube"></i>
                </a>
              </li>
            </ul>
            <br/>
            <h5 class="text-uppercase text-primary">#officialloves</h5>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/navigation.js"></script>
  </html>
