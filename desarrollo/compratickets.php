<?php
  // Configuración de la base de datos
  $host = "files.000webhost.com"; 
  $username = "id20976123_gdelcampo";
  $password = "Titan.2023"; 
  $database = "id20976123_tickets"; 

  // Crear conexión a la base de datos
  $mysqli = new mysqli($host, $username, $password, $database);

  // Verificar la conexión
  if ($mysqli->connect_error) {
    die("Error al conectar a la base de datos: " . $mysqli->connect_error);
  }

  // Variables para almacenar los datos del formulario

  $firstName = "";
  $lastName = "";
  $email = "";

  // Variables para almacenar las cantidades de entradas seleccionadas

  $generalQty = 0;
  $studentQty = 0;
  $traineeQty = 0;
  $juniorQty = 0;

  // Variables para almacenar los montos de las entradas seleccionadas

  $generalAmount = 0;
  $studentAmount = 0;
  $traineeAmount = 0;
  $juniorAmount = 0;

  // Verificar si se ha enviado el formulario

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    
    $generalQty = $_POST["general"];
    $studentQty = $_POST["student"];
    $traineeQty = $_POST["trainee"];
    $juniorQty = $_POST["junior"];

   
    $generalAmount = $generalQty * 2000;
    $studentAmount = $studentQty * 2000 * 0.8;
    $traineeAmount = $traineeQty * 2000 * 0.5;
    $juniorAmount = $juniorQty * 2000 * 0.2;

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO tickets (first_name, last_name, email, general_qty, student_qty, trainee_qty, junior_qty)
            VALUES ('$firstName', '$lastName', '$email', $generalQty, $studentQty, $traineeQty, $juniorQty)";

    if ($mysqli->query($sql) === false) {
      echo "Error al insertar los datos: " . $mysqli->error;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Venta de Entradas</title>
  <style>
    /* Estilos CSS para el formulario y la página */
    body {
      font-family: Arial, sans-serif;
    }

    form {
      margin-bottom: 20px;
    }

    label {
      display: inline-block;
      width: 120px;
    }

    button {
      margin-top: 10px;
    }

    .summary {
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Venta de Entradas</h1>

  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Nombre:</label>
    <input type="text" name="firstName" required value="<?php echo $firstName; ?>"><br>

    <label>Apellido:</label>
    <input type="text" name="lastName" required value="<?php echo $lastName; ?>"><br>

    <label>Email:</label>
    <input type="email" name="email" required value="<?php echo $email; ?>"><br>

    <label>Entrada General ($2000):</label>
    <input type="number" name="general" min="0" value="<?php echo $generalQty; ?>"><br>

    <label>Entrada Estudiante (80% descuento):</label>
    <input type="number" name="student" min="0" value="<?php echo $studentQty; ?>"><br>

    <label>Entrada Trainee (50% descuento):</label>
    <input type="number" name="trainee" min="0" value="<?php echo $traineeQty; ?>"><br>

    <label>Entrada Junior (20% descuento):</label>
    <input type="number" name="junior" min="0" value="<?php echo $juniorQty; ?>"><br>

    <button type="submit" onclick="calculateAmounts()">Calcular</button>
    <button type="button" onclick="resetForm()">Borrar</button>
  </form>

  <div class="summary">
    <h2>Resumen de Compra:</h2>
    <p>Nombre: <?php echo $firstName; ?> <?php echo $lastName; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Entrada General: <?php echo $generalQty; ?> ($<?php echo $generalAmount; ?>)</p>
    <p>Entrada Estudiante: <?php echo $studentQty; ?> ($<?php echo $studentAmount; ?>)</p>
    <p>Entrada Trainee: <?php echo $traineeQty; ?> ($<?php echo $traineeAmount; ?>)</p>
    <p>Entrada Junior: <?php echo $juniorQty; ?> ($<?php echo $juniorAmount; ?>)</p>
  </div>

  <script>
    // Función para calcular los montos de las entradas
    function calculateAmounts() {
      let generalQty = parseInt(document.getElementsByName("general")[0].value);
      let studentQty = parseInt(document.getElementsByName("student")[0].value);
      let traineeQty = parseInt(document.getElementsByName("trainee")[0].value);
      let juniorQty = parseInt(document.getElementsByName("junior")[0].value);

      let generalAmount = generalQty * 2000;
      let studentAmount = studentQty * 2000 * 0.8;
      let traineeAmount = traineeQty * 2000 * 0.5;
      let juniorAmount = juniorQty * 2000 * 0.2;

      const summaryElement = document.querySelector(".summary");
      summaryElement.innerHTML = "<h2>Resumen de Compra:</h2>" +
                                 "<p>Nombre: <?php echo $firstName; ?> <?php echo $lastName; ?></p>" +
                                 "<p>Email: <?php echo $email; ?></p>" +
                                 "<p>Entrada General: " + generalQty + " ($" + generalAmount + ")</p>" +
                                 "<p>Entrada Estudiante: " + studentQty + " ($" + studentAmount + ")</p>" +
                                 "<p>Entrada Trainee: " + traineeQty + " ($" + traineeAmount + ")</p>" +
                                 "<p>Entrada Junior: " + juniorQty + " ($" + juniorAmount + ")</p>";
    }

    // Función para borrar el formulario
    function resetForm() {
      document.querySelector("form").reset();
      var summaryElement = document.querySelector(".summary");
      summaryElement.innerHTML = "";
    }
  </script>
</body>
</html>