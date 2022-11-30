<?php include("../includes/header.php");?>


<div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Editar cliente</h3>
        <?php
         include("../model/open_connection.php");
         include("../controller/delete_cliente.php")
        ?>
        <div class="mb-3">
        <input type="text" class="form-control" name="id" placeholder="ID del Cliente" >
    </div>
   
    <button type="submit" class="btn btn-danger"name="btnDelete" >Eliminar</button>
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