<?php

include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$Nombre=$_POST['Nombres'];
$Apellido=$_POST['Apellidos'];
$Telefono=$_POST['Telefonos'];
$Correo=$_POST['Correos'];

$sql="UPDATE empleados SET  Nombre='$Nombre',Apellido='$Apellido',Telefono='$Telefono',Correo='$Correo',WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>