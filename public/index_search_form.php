<form class="flex flex-wrap justify-evenly items-center py-4">
  <div class="flex flex-col m-2">
    <label for="tipo" class="mb-2">¿Qué buscas?</label>
    <select name="tipo" id="tipo" class="border-2 border-gray-400 h-12 px-2" required>
      <option disabled selected value> -- Tipo de inmueble -- </option>
      <option value="todas">Todas</option>
      <option value="comercial">Comercial</option>
      <option value="terreno">Terreno</option>
      <option value="casa">Casa</option>
      <option value="terreno">Departamento</option>
      <option value="departamento">Oficinas</option>
    </select>
  </div>
  <div class="flex flex-col m-2">
    <label for="ubicacion" class="mb-2">Ubicación</label>
    <input type="text" name="ubicacion" placeholder="Ciudad, estado o clave" class="border-2 border-gray-400 h-12 px-2" required>
  </div>
  <button type="submit" class="m-2 py-2 px-4 bg-yellow-500 text-white text-xl tracking-widest rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-75">Buscar</button>
</form>