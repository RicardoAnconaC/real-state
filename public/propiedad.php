<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INmobi | Casa en Villas Altas</title>
  <link rel="stylesheet" href="./assets/css/mtr-datepicker.min.css">
  <link rel="stylesheet" href="./assets/css/mtr-datepicker.default-theme.min.css">
  <link rel="stylesheet" href="./assets/css/swiperjs.css">
  <style>
    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }
    .swiper-button-prev:after,
    .swiper-button-next:after {
      font-size: 2rem;
      font-weight: 900;
      color: #3B82F6;
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
      <a href="index.php" class="flex items-center text-blue-900">
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
            <a href="about.php">NOSOTROS</a>
          </li>
          <li class="nav-link">
            <a href="contact.php">CONTACTO</a>
          </li>
        </ul>
      </nav>
      <!-- Login -->
      <a href="login.php" class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-75">
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

  <main class="bg-gray-100 mb-24">
    <section class="relative h-screen max-w-screen-2xl mx-auto">
      <?php include 'propiedad_swiper.php';  // Carousel ?>
    </section>

    <section class="max-w-screen-2xl mx-auto">
      <article class="flex flex-row items-start p-6">
        <div class="w-2/3 mr-4 p-6">
          <div class="flex flex-row items-center justify-start mb-8">
            <p class="bg-yellow-500 py-1 px-4 mr-6 text-white font-semibold tracking-widest">FEATURED</p>
            <p class="bg-blue-500 py-1 px-4 mr-6 text-white font-semibold tracking-widest">EN VENTA</p>
            <p class="mr-6 text-gray-600"><i class="far fa-clock mr-1"></i>Hace 2 meses</p>
            <p class="text-gray-600"><i class="far fa-eye mr-1"></i>1039 visitas</p>
          </div>
          <div class="flex flex-row items-center justify-between mb-12">
            <div class="flex flex-col">
              <h1 class="text-4xl font-semibold text-gray-900 mb-4">Casa en Villas Altas</h1>
              <p class="text-gray-600"><i class="fas fa-map-marker-alt mr-1"></i>398 Pete Pascale Pl, New York</p>
            </div>
            <div class="flex flex-col">
              <h1 class="text-3xl font-semibold text-gray-900 mb-4">$1,250,000</h1>
              <p class="text-gray-600">$9,350/m2</p>
            </div>
          </div>
          <div class="flex flex-col mb-16">
            <h1 class="text-2xl font-semibold text-gray-900 mb-4">Descripción</h1>
            <p class="text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam cupiditate debitis iste autem eaque quidem commodi officiis voluptas quo omnis consectetur est reiciendis nemo earum quod deserunt, voluptatum sint ipsum, aut laboriosam fugiat porro! Quo earum, saepe beatae delectus ut corporis dignissimos eligendi expedita. Voluptatibus necessitatibus ipsam numquam culpa laborum debitis cum dolore natus? Reprehenderit hic fugiat autem distinctio. Provident?</p>
          </div>
          <div class="flex flex-col mb-12">
            <h1 class="text-2xl font-semibold text-gray-900 mb-4">Características</h1>
            <div class="text-gray-900 flex flex-row flex-wrap">
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">TIPO</h5>
                  <p class="font-semibold">Una familia</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">AÑO DE CONSTRUCCIÓN</h5>
                  <p class="font-semibold">2020</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">CALEFACCIÓN</h5>
                  <p class="font-semibold">Calor radiante</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">METROS CUADRADOS</h5>
                  <p class="font-semibold">979.0</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">HABITACIONES</h5>
                  <p class="font-semibold">3</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">BAÑOS</h5>
                  <p class="font-semibold">2</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">GARAGE</h5>
                  <p class="font-semibold">1</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><i class="far fa-question-circle"></i></div>
                <div class="flex flex-col ml-4">
                  <h5 class="tracking-wider">STATUS</h5>
                  <p class="font-semibold">Active</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col mb-16">
            <h1 class="text-2xl font-semibold text-gray-900 mb-4">Tour virtual</h1>
            <div class="flex flex-row justify-center my-4">
              <iframe width="700" height="500" src="https://www.youtube.com/embed/M8KgSa-r4TU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="flex flex-col mb-16">
            <h1 class="text-2xl font-semibold text-gray-900">Ubicación</h1>
            <div class="flex flex-row justify-center my-4">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="700" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embed google map</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:700px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:700px;}</style></div>
            </div>
          </div>
        </div>
        <div class="w-1/3 p-6 sticky top-4">
          <div class="h-16 bg-blue-900 text-white flex justify-center">
            <button class="h-full px-4 tracking-widest text-xl tablink bg-blue-400 hover:bg-yellow-500" onclick="openContainer(event,'agendar')">Agendar visita</button>
            <button class="h-full px-4 tracking-widest text-xl tablink hover:bg-yellow-500" onclick="openContainer(event,'info')">Pedir informes</button>
          </div>
          <div id="agendar" class="search-form bg-white flex flex-col px-12 pb-12">
            <!-- Form -->
            <div id="demo"></div>
            <input type="text" placeholder="Nombre completo" class="h-12 bg-gray-200 mb-6 px-4 focus:outline-none">
            <input type="email" placeholder="E-mail" class="h-12 bg-gray-200 mb-6 px-4 focus:outline-none">
            <input type="phone" placeholder="Teléfono" class="h-12 bg-gray-200 mb-6 px-4 focus:outline-none">
            <button href="#" class="py-2 px-4 w-full bg-blue-500 text-white font-semibold shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
              <span class="tracking-widest">AGENDAR</span>
            </button>
          </div>
          <div id="info" class="search-form bg-white hidden px-12 pb-12">
            <div class="text-gray-900 flex flex-col">
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><img src="./assets/images/expertos/agent-1.jpg" alt="agent 1" class="h-12 w-12"></div>
                <div class="flex flex-col ml-4">
                  <h5 class="font-semibold">Oliver Yánez</h5>
                  <p class="tracking-wider">Ejecutivo de ventas</p>
                  <p class="tracking-wider">(+123) 1900 68668</p>
                </div>
              </div>
              <div class="flex flex-row items-center my-2 py-2 px-4 w-72">
                <div class="text-blue-500 text-5xl"><img src="./assets/images/expertos/agent-2.jpg" alt="agent 2" class="h-12 w-12"></div>
                <div class="flex flex-col ml-4">
                <h5 class="font-semibold">Oliver Yánez</h5>
                  <p class="tracking-wider">Ejecutivo de ventas</p>
                  <p class="tracking-wider">(+123) 1900 68668</p>
                </div>
              </div>
              <input type="text" placeholder="Nombre completo" class="h-12 bg-gray-200 mb-6 px-4 focus:outline-none">
              <input type="email" placeholder="E-mail" class="h-12 bg-gray-200 mb-6 px-4 focus:outline-none">
              <input type="phone" placeholder="Teléfono" class="h-12 bg-gray-200 mb-6 px-4 focus:outline-none">
              <button href="#" class="py-2 px-4 w-full bg-blue-500 text-white font-semibold shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                <span class="tracking-widest">PEDIR INFORMES</span>
              </button>
            </div>
          </div>
        </div>
      </article>
    </section>
    <!-- Similar section -->
    <section class="text-center max-w-7xl mx-auto relative">
      <h2 class="py-12 text-4xl font-light">Propiedades similares que pueden gustarte</h2>
      <div class="flex flex-row justify-evenly max-w-screen-2xl mx-auto">
        <div class="bg-white p-4 mx-6 shadow-2xl w-1/3">
          <img src="./assets/images/venta/properties-grid-01.jpg" alt="propiedad 1" class="w-full">
          <div class="flex flex-col justify-evenly">
            <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
            <h3 class="text-gray-500 italic mb-2">1421 San Pedro St, Los Angeles</h3>
            <div class="flex flex-col w-max mx-auto text-left justify-evenly">
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-bed w-full"></i>
                </div>
                <span>3 cuartos</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-bath w-full"></i>
                </div>
                <span>3 baños</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-ruler-combined w-full"></i>
                </div>
                <span>2300 m2</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-warehouse w-full"></i>
                </div>
                <span>1 garage</span>
              </div>
            </div>
            <div class="flex items-center justify-between mt-6 px-8 text-xl">
              <p class="font-bold">$1,500,000</p>
              <i class="far fa-heart"></i>
            </div>
          </div>
        </div>
        <div class="bg-white p-4 mx-6 shadow-2xl w-1/3">
          <img src="./assets/images/venta/properties-grid-02.jpg" alt="propiedad 1" class="w-full">
          <div class="flex flex-col justify-evenly">
            <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
            <h3 class="text-gray-500 italic mb-2">1421 San Pedro St, Los Angeles</h3>
            <div class="flex flex-col w-max mx-auto text-left justify-evenly">
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-bed w-full"></i>
                </div>
                <span>3 cuartos</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-bath w-full"></i>
                </div>
                <span>3 baños</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-ruler-combined w-full"></i>
                </div>
                <span>2300 m2</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-warehouse w-full"></i>
                </div>
                <span>1 garage</span>
              </div>
            </div>
            <div class="flex items-center justify-between mt-6 px-8 text-xl">
              <p class="font-bold">$1,500,000</p>
              <i class="far fa-heart"></i>
            </div>
          </div>
        </div>
        <div class="bg-white p-4 mx-6 shadow-2xl w-1/3">
          <img src="./assets/images/venta/properties-grid-03.jpg" alt="propiedad 1" class="w-full">
          <div class="flex flex-col justify-evenly">
            <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
            <h3 class="text-gray-500 italic mb-2">1421 San Pedro St, Los Angeles</h3>
            <div class="flex flex-col w-max mx-auto text-left justify-evenly">
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-bed w-full"></i>
                </div>
                <span>3 cuartos</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-bath w-full"></i>
                </div>
                <span>3 baños</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-ruler-combined w-full"></i>
                </div>
                <span>2300 m2</span>
              </div>
              <div>
                <div class="w-6 text-blue-800 inline-block">
                  <i class="fas fa-warehouse w-full"></i>
                </div>
                <span>1 garage</span>
              </div>
            </div>
            <div class="flex items-center justify-between mt-6 px-8 text-xl">
              <p class="font-bold">$1,500,000</p>
              <i class="far fa-heart"></i>
            </div>
          </div>
        </div>
      </div>
    </section><!-- END Similar section -->
  </main>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script src="./assets/js/swiperjs.js"></script>
  <script src="./assets/js/mtr-datepicker-timezones.min.js"></script>
  <script src="./assets/js/mtr-datepicker.min.js"></script>

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

    datepickerDefault = new MtrDatepicker({
      target: "demo",
      disableAmPm: true,
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
