<?php

include('db.php');

    $nombreinstitucion=$_POST['nombreinstitucion'];
    $rector=$_POST['rector'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $distrito=$_POST['distrito'];
    $idregistrocnel=$_POST['idregistrocnel'];
    
    
    $validar = ("SELECT nombreinstitucion, rector FROM formulario WHERE nombreinstitucion = '$nombreinstitucion' AND rector = '$rector' LIMIT 1 ");
    if($conexion->query($validar)){
                echo"Esta institucion ya fue registrada";
                header("Location: Formulario.html");
    } else {
        $insertar = "";
        $insertar = ("INSERT INTO formulario (nombreinstitucion, rector, direccion, telefono, distrito, idregistrocnel) 
                    VALUES('$nombreinstitucion', '$rector', '$direccion', '$telefono', '$distrito', '$idregistrocnel')");
        if ($conexion->query($insertar)==TRUE){
            ?>
            <script>
                setTimeout(function(){
                alert("Registro Realizado")
                window.location.replace("formulario.html");
                },2000);
                </script>
            <?php  
        }
    }mysqli_close($conexion);
?>