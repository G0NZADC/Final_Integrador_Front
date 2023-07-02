 
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

    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark " id="nav">
      <div class="container justify-content-md-end ">
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

    <main class="">
        <div class="container col-lg-4 text-center my-5">
            <table class="table table-striped">
                <thead>
                   <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Ticket</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                     <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Email</th>
                      <th>Tipo de entrada</th>  
                    </tr>
                <?php foreach ($resultados as $fila) { ?>
                  <tr>
                  <td><?php echo $fila['ID']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['apellido']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['tipo_entrada']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>
    </main>
     <!-- pie de página -->

     <?php include("piedepagina.php") ?>
 
    <!-- JavaScript-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
   <script src="main.js"></script>

</body>
   
</html>