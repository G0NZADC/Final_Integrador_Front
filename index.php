 
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS  -->

  <link rel="stylesheet" href="./desarrollo/estilo.css">

  <!-- Bootstrap  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">

  <title>Final Integrador Front y Back</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#nav">

  <header >

      <!--Navegador -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="nav">
      <div class="container justify-content-md-end">
        <a class="navbar-brand" href="#"><img src="./imagenes/codoacodo.png" alt="Logo" width=150px>Conf Bs As</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#la-conf">La Conferencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#oradores">Los oradores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#lugar-fecha">El lugar y la fecha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#conv-orador">Conviértete en orador</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-success" href="./desarrollo/compratickets.php" >Compra tickets</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>    

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
                  <a role="button" class="btn btn-success" href="./desarrollo/compratickets.php">Comprar Tickets</a>
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

     <footer class="py-2 my-1 fondo sticky-bottom">
        <ul class="nav justify-content-center pb-1 mb-1">
          <li class="nav-item"><a href="#" class="nav-link px-5 text-white">Preguntas frecuentes</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-5 text-white">Contáctanos</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-5 text-white">Prensa</a></li>
          <li class="nav-item"><a href="#la-conf" class="nav-link px-5 text-white">Conferencias</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-5 text-white">Términos y condiciones</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-5 text-white">Privacidad</a></li>
          <li class="nav-item"><a href="./desarrollo/tickets.php" class="nav-link px-5 text-white">Tickets</a></li>
        </ul>
   </footer>

    <!-- JavaScript-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
   <script src="./desarrollo/main.js"></script>
</body>

</html>