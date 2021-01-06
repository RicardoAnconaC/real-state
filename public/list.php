<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INmobi | Propiedades</title>

  <!-- Range slider styles -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://kit.fontawesome.com/3c2b369f6b.js" crossorigin="anonymous"></script>

  <!-- Range slider scripts -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="./assets/js/range_slider.js"></script>
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
      <li class="inline">PROPIEDADES</li>
    </ul>
  </div><!-- END Breadcrumb -->

  <h1 class="text-5xl font-semibold text-black max-w-screen-2xl mx-auto pt-8 pb-16 px-12">Propiedades</h1>

  <main class="bg-gray-100 -mb-24">
    <article class="max-w-screen-2xl mx-auto py-12 flex items-start">
      <aside class="bg-white w-1/3 mx-8 p-6 sticky bottom-12">
        <h2 class="font-semibold text-xl mb-8">Especifica lo que deseas</h2>
        <?php include 'lista_filter_form.php'; // formulario ?>
      </aside>
      <div class="w-2/3 mr-8 flex flex-col">
        <div class="flex items-center justify-between pt-2 pb-6">
          <p class="py-2 px-4 text-lg">Encontramos <strong class="text-blue-700">45</strong> propiedades disponibles para ti</p>
          <div class="py-2 px-4 bg-white flex items-center">
            <i class="fas fa-align-left pr-2"></i>
            <p class="pr-2">ORDENAR POR:</p>
            <div class="flex items-center">
              <div class="custom-select">
                <select>
                  <option selected value="Top ventas">Top ventas</option>
                  <option value="Más vistos">Más vistos</option>
                  <option value="Precio (descendente)">Precio (descendente)</option>
                  <option value="Precio (ascendente)">Precio (ascendente)</option>
                </select>
              </div>
              <div class="pl-6 w-20 flex items-center justify-between">
                <button><i class="fas fa-list text-xl"></i></button>
                <button><i class="fas fa-th-large text-xl opacity-25"></i></button>
              </div>
            </div>
          </div>
        </div>
        <section class="flex-col">
          <article class="bg-white p-4 mb-10 flex-col hover:shadow-2xl">
            <div class="mb-2 flex">
              <div class="h-52 w-80 mr-2 bg-list-1 bg-cover bg-center bg-no-repeat">
                <div class="bg-favorite h-full w-full bg-black bg-opacity-50 flex flex-row items-center justify-center transition opacity-0">
                  <button class="bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center transition-colors hover:bg-blue-400 hover:text-white focus:outline-none">
                    <i class="far fa-heart text-xl"></i>
                  </button>
                </div>
              </div>
              <div class="flex flex-col">
                <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
                <h3 class="text-gray-500 mb-2">1421 San Pedro St, Los Angeles</h3>
                <p class="font-bold mb-4 text-lg">$1,500,000</p>
                <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusamus officia impedit quis iusto tempore commodi ipsum laudantium ea illo.</p>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="w-3/4 pr-40 flex justify-between">
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
              <div class="w-1/4 text-right flex justify-end">
                <p class="bg-blue-500 py-2 px-4 mr-4 text-white font-semibold tracking-widest">VENTA</p>
              </div>
            </div>
          </article>
          <article class="bg-white p-4 mb-10 flex-col hover:shadow-2xl">
            <div class="mb-2 flex">
              <div class="h-52 w-80 mr-2 bg-list-2 bg-cover bg-center bg-no-repeat">
                <div class="bg-favorite h-full w-full bg-black bg-opacity-50 flex flex-row items-center justify-center transition opacity-0">
                  <button class="bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center transition-colors hover:bg-blue-400 hover:text-white focus:outline-none">
                    <i class="far fa-heart text-xl"></i>
                  </button>
                </div>
              </div>
              <div class="flex flex-col">
                <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
                <h3 class="text-gray-500 mb-2">1421 San Pedro St, Los Angeles</h3>
                <p class="font-bold mb-4 text-lg">$1,500,000</p>
                <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusamus officia impedit quis iusto tempore commodi ipsum laudantium ea illo.</p>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="w-3/4 pr-40 flex justify-between">
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
              <div class="w-1/4 text-right flex justify-end">
                <p class="bg-yellow-500 py-2 px-4 mr-4 text-white font-semibold tracking-widest">COMPRA</p>
              </div>
            </div>
          </article>
          <article class="bg-white p-4 mb-10 flex-col hover:shadow-2xl">
            <div class="mb-2 flex">
              <div class="h-52 w-80 mr-2 bg-list-3 bg-cover bg-center bg-no-repeat">
                <div class="bg-favorite h-full w-full bg-black bg-opacity-50 flex flex-row items-center justify-center transition opacity-0">
                  <button class="bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center transition-colors hover:bg-blue-400 hover:text-white focus:outline-none">
                    <i class="far fa-heart text-xl"></i>
                  </button>
                </div>
              </div>
              <div class="flex flex-col">
                <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
                <h3 class="text-gray-500 mb-2">1421 San Pedro St, Los Angeles</h3>
                <p class="font-bold mb-4 text-lg">$1,500,000</p>
                <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusamus officia impedit quis iusto tempore commodi ipsum laudantium ea illo.</p>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="w-3/4 pr-40 flex justify-between">
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
              <div class="w-1/4 text-right flex justify-end">
                <p class="bg-blue-500 py-2 px-4 mr-4 text-white font-semibold tracking-widest">VENTA</p>
              </div>
            </div>
          </article>
          <article class="bg-white p-4 mb-10 flex-col hover:shadow-2xl">
            <div class="mb-2 flex">
              <div class="h-52 w-80 mr-2 bg-list-4 bg-cover bg-center bg-no-repeat">
                <div class="bg-favorite h-full w-full bg-black bg-opacity-50 flex flex-row items-center justify-center transition opacity-0">
                  <button class="bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center transition-colors hover:bg-blue-400 hover:text-white focus:outline-none">
                    <i class="far fa-heart text-xl"></i>
                  </button>
                </div>
              </div>
              <div class="flex flex-col">
                <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
                <h3 class="text-gray-500 mb-2">1421 San Pedro St, Los Angeles</h3>
                <p class="font-bold mb-4 text-lg">$1,500,000</p>
                <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusamus officia impedit quis iusto tempore commodi ipsum laudantium ea illo.</p>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="w-3/4 pr-40 flex justify-between">
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
              <div class="w-1/4 text-right flex justify-end">
                <p class="bg-yellow-500 py-2 px-4 mr-4 text-white font-semibold tracking-widest">COMPRA</p>
              </div>
            </div>
          </article>
          <article class="bg-white p-4 mb-10 flex-col hover:shadow-2xl">
            <div class="mb-2 flex">
              <div class="h-52 w-80 mr-2 bg-list-5 bg-cover bg-center bg-no-repeat">
                <div class="bg-favorite h-full w-full bg-black bg-opacity-50 flex flex-row items-center justify-center transition opacity-0">
                  <button class="bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center transition-colors hover:bg-blue-400 hover:text-white focus:outline-none">
                    <i class="far fa-heart text-xl"></i>
                  </button>
                </div>
              </div>
              <div class="flex flex-col">
                <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">Casa en Villas Altas</a>
                <h3 class="text-gray-500 mb-2">1421 San Pedro St, Los Angeles</h3>
                <p class="font-bold mb-4 text-lg">$1,500,000</p>
                <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusamus officia impedit quis iusto tempore commodi ipsum laudantium ea illo.</p>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="w-3/4 pr-40 flex justify-between">
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
              <div class="w-1/4 text-right flex justify-end">
                <p class="bg-blue-500 py-2 px-4 mr-4 text-white font-semibold tracking-widest">VENTA</p>
              </div>
            </div>
          </article>
          <div class="mt-12 w-full flex flex-row justify-center items-center">
            <div class="flex justify-center items-center h-12 w-12 mx-1 cursor-pointer text-2xl rounded-full transition-all hover:bg-blue-400 hover:text-white"><<</div>
            <div class="flex justify-center items-center h-12 w-12 mx-1 cursor-pointer text-2xl rounded-full transition-all hover:bg-blue-400 hover:text-white">1</div>
            <div class="flex justify-center items-center h-12 w-12 mx-1 cursor-pointer text-2xl rounded-full transition-all bg-blue-400 text-white">2</div>
            <div class="flex justify-center items-center h-12 w-12 mx-1 cursor-pointer text-2xl rounded-full transition-all hover:bg-blue-400 hover:text-white">3</div>
            <div class="flex justify-center items-center h-12 w-12 text-2xl rounded-full">...</div>
            <div class="flex justify-center items-center h-12 w-12 mx-1 cursor-pointer text-2xl rounded-full transition-all hover:bg-blue-400 hover:text-white">6</div>
            <div class="flex justify-center items-center h-12 w-12 mx-1 cursor-pointer text-2xl rounded-full transition-all hover:bg-blue-400 hover:text-white">>></div>
          </div>
        </section>
      </div>
    </article>
  </main>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script src="./assets/js/custom_select.js"></script>
  <script>
    let favorite = document.querySelectorAll(".bg-favorite");

    for (let i = 0; i < favorite.length; i ++) {
      favorite[i].addEventListener("mouseover", () => {
        favorite[i].classList.replace("opacity-0", "opacity-1");
      })
    }

    for (let i = 0; i < favorite.length; i ++) {
      favorite[i].addEventListener("mouseout", () => {
        favorite[i].classList.replace("opacity-1", "opacity-0");
      })
    }
  </script>

</body>
</html>
