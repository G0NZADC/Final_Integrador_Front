

const bsButton = new bootstrap.Button('#myButton')
document.querySelectorAll('.btn').forEach(buttonElement => {
  const button = bootstrap.Button.getOrCreateInstance(buttonElement)
    button.toggle()
 })


function mostrarResumen() {
  let nombre = document.getElementById("nombre").value;
  let apellido = document.getElementById("apellido").value;
  let email = document.getElementById("email").value;
  let cantidad = document.getElementById("cantidad").value;
  let categoria = document.getElementById("categoria").value;

  let precio = 2000;
  let descuento = 0;
  if (categoria === "estudiante") {
        descuento = 0.2;
    } else if (categoria === "trainee") {
        descuento = 0.5;
    } else if (categoria === "junior") {
        descuento = 0.85;
    } else  if(categoria === "general"){
      descuento = 1;
    } 

  let precioFinal = (precio * descuento) * cantidad;

  let objetivo = document.getElementById('aPagar');
      objetivo.innerHTML = precioFinal;
    
  
}

function borrarDatos() {
  document.getElementById("formluario").reset();

  
}

// comprar y borrar

document.addEventListener('DOMContentLoaded', function(){
  let borrarFormulario = document.getElementById('formulario');
  borrarFormulario.addEventListener('submit', function() {
  borrarFormulario.reset();
});
});