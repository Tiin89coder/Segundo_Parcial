<!doctype html>
<html lang="es">
<head>
  <title>PHP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <h1>Parcial #2 Desarrollo Web</h1>
    <div class="container">
<form class="d-flex" action="crud_estudiantes.php" method="post">
    <div class="col">
    <div class="mb-3">
            <label for="lbl_id" class="form-label"><b>Id Estudiantes</b></label>
            <input type="txt" name="txt_id" id="txt_id" class="form-control" value="0" readonly>          
        </div>
        <div class="mb-3">
            <label for="lbl_carnet" class="form-label"><b>Carnet</b></label>
            <input type="txt" name="txt_carnet" id="txt_carnet" class="form-control" placeholder="Carne: Codigo_Carrera/Año/Codigo_Alumno" required>          
        </div>
        <div class="mb-3">
            <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
            <input type="txt" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Nombres: Nombre 1 Nombre 2" required>            
        </div>
        <div class="mb-3">
            <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
            <input type="txt" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="Apellidos: Apellido 1 Apellido 2" required>            
        </div>
        <div class="mb-3">
            <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
            <input type="txt" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Direccion: Numero de Casa/Avenida/Zona " required>            
        </div>
        <div class="mb-3">
            <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
            <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="Telefono: ######## " required>            
        </div>
        <div class="mb-3">
            <label for="lbl_genero" class="form-label"><b>Genero</b></label>
            <input type="txt" name="txt_genero" id="txt_genero" class="form-control" placeholder="Genero: -------- " required>            
        </div>
        <div class="mb-3">
            <label for="lbl_email" class="form-label"><b>Correo Electronico</b></label>
            <input type="txt" name="txt_email" id="txt_email" class="form-control" placeholder="Correo Electronico" required>            
        </div>
        <div class="mb-3">
            <label for="lbl_fecha_nacimiento" class="form-label"><b>Fecha de Nacimiento</b></label>
            <input type="date" name="txt_fecha_nacimiento" id="txt_email" class="form-control" placeholder="DD/MM/AA" required>            
        </div>
        <div class="mb-3">
        <input type="submit" name="btn_crear" id="btn_crear" class="btn btn-primary" value="Crear">
        <input type="submit" name="btn_actualizar" id="btn_crear" class="btn btn-success" value="Actualizar">
        <input type="submit" name="btn_borrar" id="btn_crear" class="btn btn-danger" value="Borrar">
         </div>
    </div> 
</form> 
<div class="table-responsive-lg">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Carnet</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Genero</th>
                    <th>Email</th>
                    <th>Fecha Nacimiento</th>
                </tr>
            </thead>
            <tbody id="tbl-estudiantes">
                <?php
                include("datos_conexion.php");
                $db_conexion=mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
                $resultado=$db_conexion->use_result();
                while($fila=$resultado->fetch_assoc()){
                    echo"<tr data-id=". $fila['id'].">";
                    echo"<td>". $fila['carnet']."</td>";
                    echo"<td>". $fila['nombres']."</td>";
                    echo"<td>". $fila['apellidos']."</td>";
                    echo"<td>". $fila['direccion']."</td>";
                    echo"<td>". $fila['telefono']."</td>";
                    echo"<td>". $fila['genero']."</td>";
                    echo"<td>". $fila['email']."</td>";
                    echo"<td>". $fila['fecha_nacimiento']."</td>";
                    echo"</tr>";
                }
                $db_conexion->close();
                ?>
                <td scope="table-primary"></td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
            </tbody>
        </table>

    </div>

  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>