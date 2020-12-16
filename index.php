<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>PHP en AWS</title>    
    <meta charset="UTF-8">
    <meta name="title" content="PHP en AWS">
    <meta name="description" content="Página web sobre PHP en AWS">    
  </head>  
  <body>
    <?php
    $servername = $_SERVER['RDS_HOSTNAME'];
    $database = $_SERVER['RDS_DB_NAME'];
    $username = $_SERVER['RDS_USERNAME'];
    $password = $_SERVER['RDS_PASSWORD'];
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Hubo un fallo en la conexión: " . mysqli_connect_error());
    }
    echo "Conectados a la base de datos correctamente.";
    $sql = "CREATE TABLE personas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    correo VARCHAR(50),
    fecha TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo " La tabla personas ha sido creada correctamente.";
    } else {
        echo " Hubo un error al crear la tabla personas: " . $conn->error;
    }
    $conn->close();
    ?>
    <header>
      <h1>PHP en AWS</h1>
    </header>
    <section>
      <article>
        <p>A continuación se mostrará un número aleatorio (actualice su navegador para ver un nuevo número):
        <strong>
        <?php 
            $num=rand() . "\n";
            echo $num;
        ?></strong></p>
      </article>
    </section>
  </body>  
</html>
