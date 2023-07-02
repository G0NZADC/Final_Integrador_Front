

const bsButton = new bootstrap.Button('#myButton')
document.querySelectorAll('.btn').forEach(buttonElement => {
  const button = bootstrap.Button.getOrCreateInstance(buttonElement)
    button.toggle()
 })

  function calculateTotalPrice() {
    const regularTicketPrice = 2000;
    const studentTicketPrice = regularTicketPrice * 0.2; 
    const trainerTicketPrice = regularTicketPrice * 0.5;
    const juniorTicketPrice = regularTicketPrice * 0.85; 
    
    let regularTicketQuantity = parseInt(document.getElementById('regular-ticket').value);
    let studentTicketQuantity = parseInt(document.getElementById('student-ticket').value);
    let trainerTicketQuantity = parseInt(document.getElementById('trainer-ticket').value);
    let juniorTicketQuantity = parseInt(document.getElementById('junior-ticket').value);
    
    let totalPrice = (regularTicketPrice * regularTicketQuantity) + (studentTicketPrice * studentTicketQuantity) + (trainerTicketPrice * trainerTicketQuantity) + (juniorTicketPrice * juniorTicketQuantity);
    
    document.getElementById('total-price').textContent =  totalPrice;
  }

  function borrarFormulario() {
    document.getElementById("formluario").reset();
    document.getElementById("aPagar").reset();
  }

  document.getElementById("miBoton").addEventListener("click", function() {
    document.getElementById("aPagar").style.display = "block";
  });




      // Obtén los valores de los campos del formulario
    var id = document.getElementById('id').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var tipoEntrada = document.getElementById('tipo_entrada').value;

    // Crea un objeto de datos con los valores
    var datos = {
      id: id,
      nombre: nombre,
      apellido: apellido,
      email: email,
      tipo_entrada: tipoEntrada
    };

    // Realiza una solicitud AJAX para enviar los datos a PHP
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'guardar_datos.php', true);
    xhr.setRequestHeader('Content-type', 'application/json');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Se ha completado la solicitud y se han guardado los datos
        alert('Los datos se han guardado correctamente.');
      }
    };
    xhr.send(JSON.stringify(datos));