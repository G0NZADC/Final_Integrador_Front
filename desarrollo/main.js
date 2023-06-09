const bsButton = new bootstrap.Button('#myButton')
document.querySelectorAll('.btn').forEach(buttonElement => {
    const button = bootstrap.Button.getOrCreateInstance(buttonElement)
    button.toggle()
  })

  function calculateTotalPrice() {
    const regularTicketPrice = 2000;
    const studentTicketPrice = regularTicketPrice * 0.2; // 80% discount
    const trainerTicketPrice = regularTicketPrice * 0.5; // 50% discount
    const juniorTicketPrice = regularTicketPrice * 0.8; // 20% discount
    
    let regularTicketQuantity = parseInt(document.getElementById('regular-ticket').value);
    let studentTicketQuantity = parseInt(document.getElementById('student-ticket').value);
    let trainerTicketQuantity = parseInt(document.getElementById('trainer-ticket').value);
    let juniorTicketQuantity = parseInt(document.getElementById('junior-ticket').value);
    
    let totalPrice = (regularTicketPrice * regularTicketQuantity) + (studentTicketPrice * studentTicketQuantity) + (trainerTicketPrice * trainerTicketQuantity) + (juniorTicketPrice * juniorTicketQuantity);
    
    document.getElementById('total-price').textContent =  totalPrice;
  }

  function borrarFormulario() {
    document.getElementById("formluario").reset();
    document.getElementById("aPagar").style.display = "none";
  }

  document.getElementById("miBoton").addEventListener("click", function() {
    document.getElementById("aPagar").style.display = "block";
  });
  
