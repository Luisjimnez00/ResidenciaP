<?php
include ("conexion.php");

if(isset($_POST['registrar_btn'])) {
    if(strlen($_POST['nombre_curso']) >= 1 && strlen($_POST['duracion_curso']) >= 1 && strlen($_POST['descripcion_curso']) >= 1) {
        $nombre1 = trim($_POST['nombre_curso']);
        $fecha1 = trim($_POST['fecha_curso']);
        $duracion1 = trim($_POST['duracion_curso']);
        $descripcion1 = trim($_POST['descripcion_curso']);
        $consulta = "INSERT INTO cursos (nombre_curso, fecha, duracion, descripcion) VALUES ('$nombre1','$fecha1','$duracion1','$descripcion1')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3>El curso se guardo correctamente</h3>
            <?php
        }else{
            ?>
            <h3>ups ha ocuurrido un error</h3>
            <?php
        }
    } else{
        ?>
            <h3>Complete los campos</h3>
            <?php
    }
}
?>