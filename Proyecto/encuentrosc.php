<?php

include('db.php');

    $direccion=$_POST['direccion'];
    $parroquia=$_POST['parroquia'];
    $estado=$_POST['estado'];
    $nombrecontacto=$_POST['nombrecontacto'];
    $cedula=$_POST['cedula'];
    $telefono=$_POST['telefono'];  
//Eejecutamos la sentencia sql
    $sql_query = "INSERT INTO encuentros(direccion, parroquia, estado, nombrecontacto , cedula, telefono) VALUES('$direccion','$parroquia','$estado','$nombrecontacto', '$cedula', '$telefono')";
//fin de la sentencia sql
if(mysqli_query($conexion, $sql_query))
{
    ?>
    <script>
        setTimeout(function(){
            window.location.replace("home.html");
        },2000);
    </script>
    <?php  
}else{
    if (mysqli_query($conexion, $sql_query)==false){
        ?>
    <script>
        setTimeout(function(){
            window.location.replace("encuentrosc.html");
        },2000);
    </script>
    <?php  
    }
}
mysqli_close($conexion);
?>
