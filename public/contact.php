<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INmobi | Propiedades</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
    iframe {
      width: 100%;
      height: 100%;
    }
  </style>
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
      <li class="inline">CONTACTO</li>
    </ul>
  </div><!-- END Breadcrumb -->

  <h1 class="text-5xl font-semibold text-blue-700 text-center max-w-screen-2xl mx-auto pt-8 pb-16 px-12">Contacto</h1>

  <main class="flex flex-row max-w-screen-2xl mx-auto mb-24">
    <img src="./assets/images/bg-contact.svg" alt="contact" class="w-1/3">
    <article class="pl-20 w-2/3 flex flex-col">
      <p class="pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, alias aut? Eum, deserunt illum molestiae, quisquam voluptatum commodi numquam repellat, harum omnis nisi doloribus!</p>
      <div class="flex flex-row items-center my-2 py-4 px-4">
        <div class="text-blue-700 text-5xl w-20"><i class="fab fa-facebook-messenger"></i></div>
        <div class="flex flex-col ml-4">
          <h5 class="font-semibold">Contáctanos en Facebook Messenger</h5>
          <a class="text-blue-500" href="#">www.messenger.com/inmobi</a>
        </div>
      </div>
      <div class="flex flex-row items-center my-2 py-4 px-4">
        <div class="text-blue-700 text-5xl w-20"><i class="fas fa-phone"></i></div>
        <div class="flex flex-col ml-4">
          <h5 class="font-semibold">Teléfono</h5>
          <p class="tracking-wider">(+123) 1900 68668</p>
        </div>
      </div>
      <div class="flex flex-row items-center my-2 py-4 px-4">
        <div class="text-blue-700 text-5xl w-20"><i class="fas fa-at"></i></div>
        <div class="flex flex-col ml-4">
          <h5 class="font-semibold">Email</h5>
          <a class="text-blue-500" href="#">contacto@inmobi.com</a>
        </div>
      </div>
      <div class="flex flex-row items-center my-2 py-4 px-4">
        <div class="text-blue-700 text-5xl w-20"><i class="fas fa-map-marker-alt"></i></div>
        <div class="flex flex-col ml-4">
          <h5 class="font-semibold">Oficinas</h5>
          <p class="tracking-wider">Avenida Periérico Norte, Col. Granada, C.P 22334, CDMX</p>
        </div>
      </div>
    </article>
  </main>

  <section class="flex max-w-screen-2xl mx-auto h-5/6">
    <div class="w-2/3">
      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=casa%20brice%C3%B1o&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">fmovies the accountant</a></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
    </div>
    <div class="w-1/3 p-6">
      <form class="w-full">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2" for="grid-first-name">
              Nombre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Nombre...">
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2" for="grid-last-name">
              Apellido
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Apellido...">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2" for="grid-password">
              E-mail
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2" for="grid-password">
              Mensage
            </label>
            <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
          </div>
        </div>
        <div class="md:flex md:items-center">
          <div class="md:w-1/3">
            <button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-75" type="button">
              Enviar
            </button>
          </div>
          <div class="md:w-2/3"></div>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script src=""></script>
  <script></script>

</body>
</html>
