const proxyurl = "https://cors-anywhere.herokuapp.com/";
const url = "http://2b.gbts.com.mx/cbtogorest/rest/togo/getFecha";

let btnMostrarFecha = document.getElementById('ver-fecha')
let fechaContenedor = document.getElementById('mostrar-fecha')

fetch(proxyurl + url)
.then(response => response.json())
.then(data => {
  var d = new Date(data);
  var utc = d.getTime() + (d.getTimezoneOffset() * 60000);  //Convierte a UTC 00:00
  var nd = new Date(utc + (3600000  *(-6)));
  var local_date = nd.toLocaleString();
  fechaContenedor.innerHTML = `<p class="p-4 relative z-50 font-semibold text-xl">${local_date}</p>`
  // console.log(local_date)
})
.catch(err=>{
  // console.log(err)
  fechaContenedor.innerHTML = `<p class="p-4 relative z-50 font-semibold text-xl">${err}</p>`
})

btnMostrarFecha.addEventListener('click', () => {
  if(fechaContenedor.classList.contains('hidden') == true ) {
    fechaContenedor.classList.replace('hidden', 'block');
  } else {
    fechaContenedor.classList.replace('block', 'hidden')
  }
})