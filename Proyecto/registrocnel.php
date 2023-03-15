<?php

include('db.php');
    $nombreinstitucion=$_POST['nombreinstitucion'];
    $nuevasluminarias=$_POST['nuevasluminarias'];
    $mantenimiento=$_POST['mantenimiento'];
    $tipo=$_POST['tipo'];
    $cantidad=$_POST['cantidad'];
    $estado=$_POST['estado'];
    $distrito=$_POST['distrito'];
    $codtrabajador=$_POST['codtrabajador'];
    $nombretrabajador=$_POST['nombretrabajador'];

//Ejecutamos la sentencia sql
    $sql_query = "INSERT INTO registrocnel (nombreinstitucion, nuevasluminarias, mantenimiento, tipo, cantidad, estado, distrito,  codtrabajador, nombretrabajador) VALUES('$nombreinstitucion','$nuevasluminarias', '$mantenimiento', '$tipo','$cantidad','$estado','$distrito', '$codtrabajador', '$nombretrabajador')";
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
            window.location.replace("RegistroCnel.html");
        },2000);
    </script>
    <?php  
    }
      
}
mysqli_close($conexion);
?>


