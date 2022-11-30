<?php include("../includes/header.php");?>


<div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Editar cliente</h3>
        <?php
         include("../model/open_connection.php");
         include("../controller/edit_client.php");
        ?>
        <div class="mb-3">
        <input type="text" class="form-control" name="id" placeholder="ID del Cliente" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de los clientes</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido de los clientes</label>
        <input type="text" class="form-control" name="apellido">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cedula de los clientes</label>
        <input type="number" class="form-control" name="cedula">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefono de los clientes</label>
        <input type="number" class="form-control" name="telefono">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo de los clientes</label>
        <input type="email" class="form-control" name="correo">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion de los clientes</label>
        <input type="text" class="form-control" name="direccion">
    </div>

    <button type="submit" class="btn btn-warning"name="btnEdit" >Editar</button>
    </form>

    <div class="col-8 p-4">
            <table class="table">
        <thead class="bg-info ">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cedula</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
         $sql = $conexion ->query("select * from clientes");
         while ($datos = $sql ->fetch_object()) {?>
           <tr>
            <td><?= $datos->id?></td>
            <td><?= $datos->nombre?></td>
            <td><?= $datos->apellido?></td>
            <td><?= $datos->cedula?></td>
            <td><?= $datos->telefono?></td>
            <td><?= $datos->correo?></td>
            <td><?= $datos->direccion?></td>
            
           </tr>
         <?php 
        }
         ?>
        </tbody>
        </table>
    </div>
</div>

<?php include("../includes/footer.php");?>