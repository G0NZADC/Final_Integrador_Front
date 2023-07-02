 
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS  -->

  <link rel="stylesheet" href="./estilo.css">

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
        <a class="navbar-brand" href="../index.php"><img src="../imagenes/codoacodo.png" alt="Logo" width=150px>Conf Bs As</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">La Conferencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#oradores">Los oradores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#lugar-fecha">El lugar y la fecha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../index.php#conv-orador">Conviértete en orador</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>



  <main>

    <section class="pt-5">
                
          <div class="modal-dialog modal-dialog-centered modal-lg pt-5 ">
              
            <div class="modal-content">

              <div class="row row-cols-3 row-cols-md-3g-3 pt-5">
                <div class="col text-center mb-3">
                  <div class="card border-primary rounded-0 border-2">
                    <div class="card-body pt-5">
                      <h5 class="card-title">Estudiante</h5>
                      <p class="card-text">Tiene un descuento</p>
                      <h5 class="card-title">80%</h5>
                      <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                    </div>
                  </div>
                </div>
                <div class="col text-center mb-3">
                  <div class="card border-success rounded-0 border-2">
                    <div class="card-body pt-5">
                      <h5 class="card-title">Trainee</h5>
                      <p class="card-text">Tiene un descuento</p>
                      <h5 class="card-title">50%</h5>
                      <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                    </div>
                  </div>
                </div>
                <div class="col text-center mb-3">
                  <div class="card border-warning rounded-0 border-2">
                    <div class="card-body pt-5">
                      <h5 class="card-title">Junior</h5>
                      <p class="card-text">Tiene un descuento</p>
                      <h5 class="card-title">15%</h5>
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
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>

                
                  <div class="col-md-6 card border-dark rounded-2 border-2 ">
                      <label for="regular-ticket">Sin descuento</label>
                    </div>    
                    <div class="col-md-6">
                      <input type="number" class="form-control" id="regular-ticket" min="0" value="0">
                    </div>    
                    <div class="col-md-6 card border-primary rounded-2 border-2">    
                      <label for="student-ticket">Estudiante:</label>
                    </div>     
                    <div class="col-md-6 ">
                      <input type="number" class="form-control" id="student-ticket" min="0" value="0">
                    </div>
                    <div class="col-md-6 card border-success rounded-2 border-2">
                      <label for="trainer-ticket">Trainee</label>
                    </div> 
                    <div class="col-md-6 ">  
                      <input type="number" class="form-control" id="trainer-ticket" min="0" value="0">
                    </div>  
                    <div class="col-md-6 card border-warning rounded-2 border-2">
                      <label for="junior-ticket">Junior</label>
                    </div> 
                      <div class="col-md-6 ">
                      <input type="number" class="form-control" id="junior-ticket" min="0" value="0">
                    </div>
                  
                    <div class="alert alert-info" id="aPagar">
                      Total a Pagar : $ <span id="total-price"></span>
                    </div>

                    <div class=" modal-footer row g-2 ">
                      <button class="btn btn-danger col-md-6 " type="button" onclick="borrarFormulario()">Borrar</button>
                      <button class="btn btn-success col-md-6 " type="button" id="miBoton" onclick="calculateTotalPrice()">Resumen</button>
                    </div>
                    <div>
                      <button class="btn btn-primary col-12" type="button">Comprar</button>
                    </div>
                </form>
              </div>
            </div>  
          </div>
        
      </section>
              
    </main>

     <!-- pie de página -->

     <?php include("piedepagina.php") ?>

    <!-- JavaScript-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
   <script src="main.js"></script>
</body>

</html>