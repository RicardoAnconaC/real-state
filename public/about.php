<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INmobi | Propiedades</title>
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
  <div class="max-w-screen-2xl mx-auto pt-28 pb-8 px-12">
    <ul class="breadcrumb tracking-widest uppercase text-gray-800">
      <li class="inline"><a href="./index.php" class="text-gray-400 hover:text-gray-800">INICIO</a></li>
      <li class="inline">NOSOTROS</li>
    </ul>
  </div><!-- END Breadcrumb -->

  <!-- Big image container -->
  <section class="relative flex flex-col h-1/2 w-full bg-cover bg-top bg-no-repeat bg-fixed" style="background-image: url(./assets/images/bg_contact.jpg);">
    <h1 class="relative top-52 text-center text-white text-7xl font-light">TU EQUIPO DE CONFIANZA</h1>
  </section><!-- END Big image container -->

  <section class="flex flex-row max-w-screen-2xl mx-auto h-5/6 w-full pt-20 px-8">
    <div class="h-full w-1/3 bg-cover bg-top bg-no-repeat border-2 border-gray-200" style="background-image: url(./assets/images/propiedad/003.jpg);"></div>
    <div class="w-2/3 flex flex-col px-40">
      <h2 class="text-center text-gray-700 text-4xl font-semibold pt-20 mb-12">Nuestra historia</h2>
      <p class="text-gray-700 text-xl mb-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa accusamus fuga necessitatibus quibusdam ipsa officiis velit eos, odit est, rem quidem. Corporis fuga libero, nam blanditiis quisquam facere harum enim eius ad. Vel cupiditate corrupti tempora veritatis provident cum sit consequatur aut laboriosam laborum repudiandae voluptatum rem quo delectus, nesciunt natus commodi voluptas dolorem sequi optio. Assumenda vitae nobis accusamus!</p>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script src=""></script>
  <script></script>

</body>
</html>
