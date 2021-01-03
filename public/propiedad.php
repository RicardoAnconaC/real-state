<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INmobi | Casa en Villas Altas</title>
  <link rel="stylesheet" href="./assets/css/swiperjs.css">
  <style>
    .swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .gallery-top {
      height: 80%;
      width: 100%;
    }

    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
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
      <a href="." class="flex items-center text-blue-900">
        <i class="fas fa-campground text-5xl mr-4"></i>
        <div class="text-3xl">
          <strong>IN</strong><span>mobi</span>
        </div>
      </a>
      <!-- Navigation links -->
      <nav class="h-full w-7/12">
        <ul class="flex items-center justify-evenly w-full h-full font-semibold text-blue-900">
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
  
  <!-- Breadcrumb -->
  <div class="max-w-screen-2xl mx-auto pt-28 px-12">
    <ul class="breadcrumb tracking-widest uppercase text-gray-800">
      <li class="inline"><a href="./index.php" class="text-gray-400 hover:text-gray-800">INICIO</a></li>
      <li class="inline"><a href="./list.php" class="text-gray-400 hover:text-gray-800">PROPIEDADES</a></li>
      <li class="inline">CASA EN VILLAS ALTAS</li>
    </ul>
  </div><!-- END Breadcrumb -->

  <h1 class="text-5xl font-semibold text-black max-w-screen-2xl mx-auto pt-8 pb-16 px-12">Casa en Villas Altas</h1>

  <main class="bg-gray-100 h-screen mb-24">
    <!-- Swiper -->
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/001.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/002.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/003.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/004.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/005.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/001.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/002.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/003.jpg)"></div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/001.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/002.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/003.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/004.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/005.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/001.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/002.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./assets/images/propiedad/003.jpg)"></div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Swiper JS -->
  <script src="./assets/js/swiperjs.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
  </script>

</body>
</html>
