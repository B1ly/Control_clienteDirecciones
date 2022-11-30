<?php 
if (isset($_POST["btnEdit"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"])
    and !empty($_POST["telefono"]) and !empty($_POST["correo"]) and !empty($_POST["direccion"])  ) {
        
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cedula=$_POST["cedula"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["correo"];
        $direccion=$_POST["direccion"];

        $_UPDATE_SQL="UPDATE $tabla_db1 Set 
        nombre='$nombre', 
        apellido='$apellido',
        cedula='$cedula', 
        telefono='$telefono',
        correo='$correo', 
        direccion='$direccion'
      
        WHERE id='$id'"; 
      
        $sql= mysqli_query($conexion,$_UPDATE_SQL); 
        
            if($sql==1){
                echo'<div class="alert alert-success">Editado correctamente</div>';
            }
            
                    
    }else{
        echo'<div class="alert alert-warning">Todos los campos son necesarios!!</div>';
    }
}
?>