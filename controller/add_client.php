<?php 
if (!empty($_POST["btnAdd"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"])
    and !empty($_POST["telefono"]) and !empty($_POST["correo"]) and !empty($_POST["direccion"])  ) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cedula=$_POST["cedula"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["correo"];
        $direccion=$_POST["direccion"];

            $sql =$conexion -> query("INSERT INTO $tabla_db1 
            (nombre,apellido,cedula,telefono,correo,direccion) 
                values 
            ('$nombre','$apellido','$cedula','$telefono','$correo','$direccion')");
            if($sql==1){
                echo'<div class="alert alert-success">Registrado correctamente</div>';
            }
            
                    
    }else{
        echo'<div class="alert alert-warning">Todos los campos son necesarios!!</div>';
    }
}
?>