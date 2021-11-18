<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];


$sql="INSERT INTO empleados VALUES('$idempleado','$Nombre','$Apellido','$Telefono','$Correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>