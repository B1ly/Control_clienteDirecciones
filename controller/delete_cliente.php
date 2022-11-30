<?php 
if (isset($_POST["btnDelete"])) {
    if (!empty($_POST["id"])) {
        
        $id=$_POST["id"];
       
        $_DELETE_SQL =  "DELETE FROM $tabla_db1 WHERE id = '$id'";

        $sql= mysqli_query($conexion,$_DELETE_SQL); 
        
            if($sql==1){
                echo'<div class="alert alert-success">Eliminado correctamente</div>';
            }
            
                    
    }else{
        echo'<div class="alert alert-warning">Todos los campos son necesarios!!</div>';
    }
}
?>