<form class="flex flex-col">
  <input type="text" placeholder="Palabra clave..." class="h-12 bg-gray-200 mb-6 px-4 focus:outline-none">
  <div class="custom-select mb-6 text-gray-700">
    <select>
      <option disabled selected value>Ubicación</option>
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Ciudad de México">Ciudad de México</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Nuevo León">Nuevo León</option>
    </select>
  </div>
  <div class="custom-select mb-6">
    <select>
      <option disabled selected value>Tipo de propiedad</option>
      <option value="Casa">Casa</option>
      <option value="Departamento">Departamento</option>
      <option value="Terreno">Terreno</option>
      <option value="Oficinas">Oficinas</option>
    </select>
  </div>
  <div class="custom-select mb-6">
    <select>
      <option disabled selected value>Estatus</option>
      <option value="Venta">Venta</option>
      <option value="Renta">Renta</option>
    </select>
  </div>
  <div class="flex">
    <div class="w-1/2 mr-4 custom-select mb-6">
      <select>
        <option disabled selected value>Cuartos</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="w-1/2 custom-select mb-8">
      <select>
        <option disabled selected value>Baños</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  </div>
  <div class="mb-8">
    <p class="mb-2">
      <label for="amount">Rango de precios:</label>
      <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>
    <div id="slider-range"></div>
  </div>
  <div class="mb-8">
    <p class="mb-2">
      <label for="size">Área:</label>
      <input type="text" id="size" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>
    <div id="slider-range-size"></div>
  </div>

  <p class="cursor-pointer text-left mb-6" onclick="alert('hello')"><span class="font-bold text-2xl text-blue-600">+</span> Otras características</p>

  <button href="#" class="py-2 px-4 w-full bg-blue-500 text-white font-semibold shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
    <span class="text-lg tracking-widest">BUSCAR</span>
  </button>

</form>
