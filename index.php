 <<?php
         include './desarrollo/menu.php';
      ?>
    <!--modal ticket.-->
    <section>
      <div class="modal col-6" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        <div class="modal-dialog modal-dialog-centered modal-lg">
            
          <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            <div class="row row-cols-3 row-cols-md-3g-3 pt-5">
              <div class="col text-center mb-3">
                <div class="card border-primary rounded-0 border-2">
                  <div class="card-body ">
                    <h5 class="card-title">Estudiante</h5>
                    <p class="card-text">Tiene un descuento</p>
                    <h5 class="card-title">80%</h5>
                    <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                  </div>
                </div>
              </div>
              <div class="col text-center mb-3">
                <div class="card border-success rounded-0 border-2">
                  <div class="card-body">
                    <h5 class="card-title">Trainee</h5>
                    <p class="card-text">Tiene un descuento</p>
                    <h5 class="card-title">50%</h5>
                    <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                  </div>
                </div>
              </div>
              <div class="col text-center mb-3">
                <div class="card border-warning rounded-0 border-2">
                  <div class="card-body content">
                    <h5 class="card-title">Junior</h5>
                    <p class="card-text">Tiene un descuento</p>
                    <h5 class="card-title">20%</h5>
                    <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-center">
              <p class="fs-6 ">VENTA</p>
              <h2 class="modal-title fs-4" id="exampleModalLabel">VALOR DE TICKET $2000</h2> 
            </div>

            <div class="modal-body">
              <form class="row g-2" id="formluario">
                <div class="col-md">
                  <label for="name" class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="name" id="name" value="" required>
                </div>
                <div class="col-md">
                  <label for="apellido" class="form-label">Apellido</label>
                  <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Correo Electrónico</label>
                  <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email"  aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div>
                <div class="col-md-4 offset-md-4 ">
                  <label for="regular-ticket">Sin descuento</label>
                  <input type="number" class="form-control" id="regular-ticket" min="0" value="">
                                
                  <label for="student-ticket">Estudiante:</label>
                  <input type="number" class="form-control" id="student-ticket" min="0" value="">
                </div>
                <div class="col-md-4 offset-md-4 ">
                  <label for="trainer-ticket">Trainee</label>
                  <input type="number" class="form-control" id="trainer-ticket" min="0" value="">
                
                  <label for="junior-ticket">Junior</label>
                  <input type="number" class="form-control" id="junior-ticket" min="0" value="">
                </div>
                
                <div class="alert alert-success" role="alert" id="aPagar">
                  Total a Pagar : $ <span id="total-price"></span>
                </div>

                <div class=" modal-footer row g-2 ">
                  <button class="btn btn-danger col-md" type="button" onclick="borrarFormulario()">Borrar</button>
                  <button class="btn btn-success col-md" type="button" id="miBoton"  onclick="calculateTotalPrice()">Total a Pagar</button>
                </div>
              </form>
            </div>
          </div>  
        </div>
      </div>
    </section>

  <main>
    
    <!--conf. Bs As.-->

    <section id="la-conf">      
          <div id="carousel" class="carousel carousel-dark slide d-flex vh-100 bg-black align-items-center justify-content-end bg-opacity-50" data-bs-ride="carousel">
            <div class="container-fluid text-white m-0 me-md-5 col-lg-5 text-end">
                <h1 class="fw-semibold">Conf Bs As</h1>
                <p class="fs-5">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento
                  y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros
                  estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. ¡Te esperamos!</p>
                <div class="d-flex justify-content-end column-gap-3">
                    <a role="button" class="btn btn-outline-light" href="#conv-orador">Quiero ser orador</a>
                    <a role="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Comprar Tickets</a>
                </div>
            </div>

              <div class="carousel-inner position-absolute vh-100 z-n1">
                <div class="carousel-item active">
                  <img src="./imagenes/ba1.jpg" class="d-block" alt="Bs.As.1">
                </div>
                <div class="carousel-item">
                  <img src="./imagenes/ba2.jpg" class="d-block" alt="Imagen Buenos Aires 2">
                </div>
                <div class="carousel-item">
                  <img src="./imagenes/ba3.jpg" class="d-block" alt="Imagen Buenos Aires 3">
                </div>
              </div>
          </div>
      </section>
     <!--oradores -->


          <section  id="oradores">       
            <div class="container">
              <div class="row">
                <h6 class="text-center" id="scrollspyHeading2">CONOCE A LOS</h6>
                <h2 class="text-center">ORADORES</h2>

                  <div class="row row-cols-1 row-cols-md-3 ">
                      <div class="col mb-4" >
                        <div class="card h-100">
                          <img src="./imagenes/steve.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <button type="button" class="btn btn-warning btn-sm ">JavaScript</button>
                            <button type="button" class="btn btn-info btn-sm text-white">React</button>
                            <h4 class="card-title">Steve Jobs</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod in placeat sit aut
                              ratione magnam assumenda laudantium provident? Architecto quibusdam
                              expedita ut unde, eum minus rerum asperiores. Deleniti, distinctio accusantium.</p>
                          </div>
                        </div>
                      </div>

                      <div class="col mb-4">
                        <div class=" card h-100">
                          <img src="./imagenes/bill.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <button type="button" class="btn btn-warning btn-sm">JavaScript</button>
                            <button type="button" class="btn btn-info btn-sm text-white">React</button>
                            <h4 class="card-title">Bill Gates</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam odio temporibus
                              aliquid laboriosam voluptas laborum quas, dicta ipsum iste totam?
                              Alias maxime dolores, labore provident sapiente quia cupiditate consequuntur corrupti!</p>
                        </div>
                      </div>
                    </div>

                    <div class="col mb-4" >
                      <div class="card h-100">
                        <img src="./imagenes/ada.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <button type="button" class="btn btn-secondary btn-sm">Negocios</button>
                          <button type="button" class="btn btn-danger btn-sm text-white">Startups</button>
                          <h4 class="card-title">Ada Lovelace</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ipsam enim, ab
                            modi repellat at assumenda ad excepturi sed exercitationem fuga!
                            Doloribus doloremque maiores reiciendis veritatis sunt hic quos obcaecati?</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
      
          </section>
        <!--el lugar y la fecha -->

        <section id="lugar-fecha">
          <div class="card mb-6  mb-15" style="width:100%;">
            <div class="row g-0">
              <div class="col-md-6">
                <img src="./imagenes/honolulu.jpg" class="img-fluid" style="height: 100%;">
              </div>
              <div class="col-md-6 text-white bg-dark border border-white me-0">
                <div class="card-body ">
                  <h3 class="card-title">Bs As - Octubre</h3>
                  <p class="card-text fs-6">Buenos Aires,es la capital y
                  ciudad más poblada de la República Argentina. Esta metrópolis es una ciudad autónoma que constituye uno de los 24
                  distritos, o que conforman el país. Tiene sus propios poderes ejecutivo,legislativo y judicial. Está situada en la
                  región centro-este del país, sobre la orilla sur del Río de la Plata, fue cedida en 1880 por la Provincia de Buenos
                  Aires para que fuera lacapital federal del país; a partir de 2020 es considerada capital principal, junto a 24 
                  capitales alternas.
                  </p>
                  <button type="button"  href="#conv-orador" class="btn btn-outline-light mb-25">Conocé mas</button>
                </div>
              </div>
            </div>
          </div>

        </section>
            <!-- conviértete en un orador -->

        <section id="conv-orador">
          <div class="d-grid gap-2 col-6 mx-auto pt-5" >
            <h6 class="text-center" ">CONVIÉRTETE EN UN</h6>
            <h2 class="text-center">ORADOR</h2>
            <div class="row g-3  mb-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido">
                </div>
            </div>

            <div class="mb-20">
              <textarea class="form-control" placeholder="Sobre qué quieres hablar?" id="exampleFormControlTextarea1"
                rows="3"></textarea>
            </div>

          <P class="mb-3 text-center fs-6">Recuerda incluir un título para tu charla</P>

            <button class=" btn btn-success " type="button">Enviar</button>
          </div>
      
        </section>
            
  </main>

     <!-- pie de página -->


     <<?php
         include './desarrollo/piedepagina.php';
      ?>
  