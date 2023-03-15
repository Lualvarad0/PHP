<?php

include('db.php');

    $codtrabajador=$_POST['codtrabajador'];
    $nombretrabajador=$_POST['nombretrabajador'];
    $cedula=$_POST['cedula'];
    $parroquia=$_POST['parroquia'];
    
//Eejecutamos la sentencia sql
    $sql_query = "INSERT INTO acta (codtrabajador, nombretrabajador, cedula, parroquia) 
    VALUES('$codtrabajador', '$nombretrabajador', '$cedula', '$parroquia')";
//fin de la sentencia sql

$verificar = mysqli_query($conexion, "SELECT * FROM acta WHERE cedula='$cedula'");
    if(mysqli_num_rows($verificar)>0){
        ?>
        <script>
            alert("Este numero de cedula ya fue registrado");
            setTimeout(function(){
                window.location.replace("actas.html");
            },2000);
        </script>
    <?php
    }exit();

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
            window.location.replace("actas.html");
        },2000);
    </script>
    <?php  
    }
      
}
mysqli_close($conexion);
?>

