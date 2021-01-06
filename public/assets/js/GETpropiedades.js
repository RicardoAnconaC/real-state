var url = 'http://2b.gbts.com.mx/bribrorest/rest/propiedades/queryPropiedades';

fetch(url)
  .then(response => response.json())
  .then(data => dataPrint(data))
  .catch(e => {
    console.log(e);
  });


function dataPrint(datos) {
  // console.log(datos);
  const container = document.getElementById('datosContenedor');
  let content = '';

  for (let i = 0; i < datos.length; i ++) {
    let estatusColor = '';
    if (datos[i]["estatus"] == "Renta" ) {
      datos[i]["cost"] += " /mes";
      estatusColor = "blue"
    } else {
      estatusColor = 'yellow';
    }
    content += `
      <article class="bg-white p-4 mb-10 flex-col hover:shadow-2xl">
        <div class="mb-2 flex">
          <div class="h-52 w-80 mr-2 bg-list-${ Math.floor( Math.random() * datos.length) + 1 } bg-cover bg-center bg-no-repeat">
            <div class="bg-favorite h-full w-full bg-black bg-opacity-50 flex flex-row items-center justify-center transition opacity-0">
              <button class="bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center transition-colors hover:bg-blue-400 hover:text-white focus:outline-none">
                <i class="far fa-heart text-xl"></i>
              </button>
            </div>
          </div>
          <div class="flex flex-col">
            <a href="propiedad.php" class="font-semibold mb-2 text-xl hover:text-blue-400">${datos[i]["name"]}</a>
            <h3 class="text-gray-500 mb-2">Colonia ${datos[i]["colonia"]}, ${datos[i]["municipio"]}, ${datos[i]["estado"]}</h3>
            <p class="font-bold mb-4 text-lg">$${datos[i]["cost"]}</p>
            <p class="text-gray-700">${datos[i]["descripcion"]}</p>
          </div>
        </div>
        <div class="flex items-center justify-between">
          <div class="w-3/4 pr-40 flex justify-between">
            <div>
              <div class="w-6 text-blue-800 inline-block">
                <i class="fas fa-bed w-full"></i>
              </div>
              <span>${datos[i]["room"]} cuartos</span>
            </div>
            <div>
              <div class="w-6 text-blue-800 inline-block">
                <i class="fas fa-bath w-full"></i>
              </div>
              <span>${datos[i]["bath"]} baños</span>
            </div>
            <div>
              <div class="w-6 text-blue-800 inline-block">
                <i class="fas fa-ruler-combined w-full"></i>
              </div>
              <span>${datos[i]["size"]} m2</span>
            </div>
            <div>
              <div class="w-6 text-blue-800 inline-block">
                <i class="fas fa-warehouse w-full"></i>
              </div>
              <span>1 garage</span>
            </div>
          </div>
          <div class="w-1/4 text-right flex justify-end">
            <p class="bg-${estatusColor}-500 py-2 px-4 mr-4 text-white font-semibold tracking-widest uppercase">${datos[i]["estatus"]}</p>
          </div>
        </div>
      </article>
    `;
  }
  container.innerHTML = content;
}