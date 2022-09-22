<!doctype html>
<html lang="en">

<head>
  <title>Pagina PHP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <h1>Datos Estudiantes</h1>
    <div class="container">
        <form class="d-flex" action="" method="post">
            <div class="col">
            <div class="mb-3">
                    <label for="lbl_id" class="form-label"><b>ID</b></label>
                    <input type="text" name="txt_id" id="txt_id" class="form-control" value=0 readonly>
                </div>
                <div class="mb-3">
                    <label for="lbl_codigo" class="form-label"><b>Carnet</b></label>
                    <input type="text" name="txt_carnet" id="txt_carnet" class="form-control" placeholder="Carnet: 12345678" required>
                </div>
                <div class="mb-3">
                    <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
                    <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Nombre1 Nombre2" required>
                </div>
                <div class="mb-3">
                    <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
                    <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="Apellido1 Apellido2" required>
                </div>
                <div class="mb-3">
                    <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="#casa av. calle" required>
                </div>
                <div class="mb-3">
                    <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
                    <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="5555-5555" required>
                </div>
                <div class="mb-3">
                  <label for="lbl_genero" class="form-label"><b>Genero</b></label>
                  <select class="form-select" name="drop_genero" id="drop_genero">
                    <option value=0>Genero</option>
                    <option value=1>Femenino</option>
                    <option value=2>Masculino</option>

                  </select>
                </div>
                <div class="mb-3">
                    <label for="lbl_email" class="form-label"><b>Email</b></label>
                    <input type="text" name="txt_email" id="txt_email" class="form-control" placeholder="ejemplo@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="lbl_fn" class="form-label"><b>Fecha Nacimiento</b></label>
                    <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="aaaa-mm-dd" required>
                </div>
                <div class="mb-3">
                    <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar" required>
                    <input type="submit" name="btn_actualizar" id="btn_actualizar" class="btn btn-success" value="Actualizar" required>
                    <input type="submit" name="btn_borrar" id="btn_borrar" class="btn btn-danger" value="Borrar" required>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-inverse table-responsive">
                <thead class="table-light">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Genero</th>
                        <th>Email</th>
                        <th>Fecha Nacimiento</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                include ("datos_conexion.php");
                $db_conexion=mysqli_connect($db_host, $db_usr, $db_pass, $db_nombre);
                while($fila()){
                    echo"<tr data=id =".$fila['id'].">";
                    echo"<td>". $fila['carnet']."</td>";
                    echo"<td>". $fila['nombres']."</td>";
                    echo"<td>". $fila['apellidos']."</td>";
                    echo"<td>". $fila['direccion']."</td>";
                    echo"<td>". $fila['telefono']."</td>";
                    echo"<td>". $fila['genero']."</td>";
                    echo"<td>". $fila['email']."</td>";
                    echo"<td>". $fila['fecha_nacimiento']."</td>";
                    echo"<tr>";
                }
                $db_conexion ->close();
                ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
            </table>
        </div>
         
    </div>
    <?php 
    if(isset ($_POST ["btn_agregar"])){
    include("datos_conexion.php");
    $db_conexion =mysqli_connect($db_host, $db_usr, $db_pass, $db_nombre);
    $txt_carnet = utf8_decode ($_POST ["txt_carnet"]);
    $txt_nombres = utf8_decode ($_POST ["txt_nombres"]);
    $txt_apellidos = utf8_decode ($_POST ["txt_apellidos"]);
    $txt_direccion = utf8_decode ($_POST ["txt_direccion"]);
    $txt_telefono = utf8_decode ($_POST ["txt_telefono"]);
    $txt_genero = utf8_decode ($_POST ["txt_genero"]);
    $txt_email = utf8_decode ($_POST ["txt_email"]);
    $txt_fn = utf8_decode ($_POST ["txt_fn"]);
    $sql= "INSERT INTO estudiantes(carnet,nombres,apellidos,direccion,telefono,genero,email,fecha_nacimiento)VALUE('".$txt_carnet."','".$txt_nombres."','".$txt_apellidos."','".$txt_direccion."','".$txt_telefono."','".$txt_genero."','".$txt_email."','".$txt_fn."',)"
    }
    ?>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>