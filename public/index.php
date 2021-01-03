<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INmobi | Inicio</title>
  <link rel="stylesheet" href="./assets/css/swiperjs.css">
  <style>
    .swiper-pagination-bullet {
      margin: 0 0.25rem;
      height: 0.65rem;
      width: 0.65rem;
    }
    .swiper-pagination-bullet:focus {
      outline: none !important;
    }
    .swiper-pagination-bullet-active {
      background-color: #3B82F6;
    }
  </style>
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://kit.fontawesome.com/3c2b369f6b.js" crossorigin="anonymous"></script>
</head>
<body class="h-full">

  <!-- Header -->
  <header class="bg-transparent absolute w-full z-50">
    <div class="max-w-screen-2xl p-6 h-full mx-auto flex justify-between items-center">
      <!-- Logo -->
      <a href="." class="flex items-center text-white">
        <i class="fas fa-campground text-5xl mr-4"></i>
        <div class="text-3xl">
          <strong>IN</strong><span>mobi</span>
        </div>
      </a>
      <!-- Navigation links -->
      <nav class="h-full w-7/12">
        <ul class="flex items-center justify-evenly w-full h-full font-semibold text-white">
          <li class="nav-link">
            <a href="index.php">INICIO</a>
          </li> 
          <li class="nav-link">
            <a href="list.php">PROPIEDADES</a>
          </li>
          <li class="nav-link">
            <a href="#">NOSOTROS</a>
          </li>
          <li class="nav-link">
            <a href="#">CONTACTO</a>
          </li>
        </ul>
      </nav>
      <!-- Login -->
      <a href="#" class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-75">
        <span class="text-xl">Iniciar sesión</span>
      </a>
    </div>
  </header><!-- END Header -->

  <!-- Big image container -->
  <section class="relative flex flex-col h-screen w-full bg-big-house bg-cover bg-center bg-no-repeat">
    <h1 class="relative top-52 text-center text-white text-7xl font-light">LA PROPIEDAD DE TUS SUEÑOS</h1>
    <!-- Search forms container -->
    <div class="relative top-1/2 w-6/12 max-w-4xl mx-auto">
      <div class="h-16 bg-blue-900 text-white flex">
        <button class="h-full px-4 tracking-widest text-xl tablink bg-blue-400 hover:bg-yellow-500" onclick="openContainer(event,'venta')">VENTA</button>
        <button class="h-full px-4 tracking-widest text-xl tablink hover:bg-yellow-500" onclick="openContainer(event,'renta')">RENTA</button>
      </div>
      <!-- Venta search form -->
      <div id="venta" class="search-form bg-white">
        <!-- Form -->
        <?php include 'index_search_form.php';  // Formulario ?>
      </div><!-- END Venta search form -->
      <!-- Renta search form -->
      <div id="renta" class="search-form bg-white hidden">
        <?php include 'index_search_form.php';  // Formulario ?>
      </div><!-- END Renta search form -->
    </div><!-- END Search form container -->
  </section><!-- END Big image container -->

  <!-- Destacados section -->
  <section class="text-center max-w-7xl mx-auto relative">
    <h2 class="py-12 text-4xl font-light">Destacados</h2>
    <!-- Carousel container -->
    <article class="relative flex justify-between items-center">
      <?php include 'index_swiper_destacados.php';  // Carousel ?>
    </article><!-- END Carousel container -->
    <div class="swiper-pagination relative mx-auto mt-4"></div>
  </section><!-- END Destacados section -->

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script src="./assets/js/swiperjs.js"></script>

  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: false,
      slidesPerView: 3,
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

  <script>
    function openContainer(evt, condition) {
    var i, x, tablinks;

    x = document.getElementsByClassName("search-form");
    for (i = 0; i < x.length; i++) {
      x[i].classList.add("hidden");
    }

    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" bg-blue-400", "");
    }

    document.getElementById(condition).classList.replace("hidden", "block");
    evt.currentTarget.className += " bg-blue-400";
    }
  </script>
</body>
</html>