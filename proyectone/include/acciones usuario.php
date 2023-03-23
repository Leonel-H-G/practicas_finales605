<?php 
//Recuperar e insertar datos 
include "conexion.php";

if (isset ($_POST['btn'])){

    $nombre= $conecta->real_escape_string($_POST['Nombre']);
    $apellidos= $conecta->real_escape_string($_POST['Apellidos']);
    $direccion= $conecta->real_escape_string($_POST['Direccion']);
    $telefono= $conecta->real_escape_string($_POST['Telefono']);
    $fecha= $conecta->real_escape_string($_POST['Fecha']);
    $email= $conecta->real_escape_string($_POST['Email']);


    if ($nombre=="" || $apellidos=="" || $direccion=="" || $telefono=="" || $fecha=="" || $email=="" ){
        $Alerta ="Alguno de tus datos esta vacio";
    }
   else{
    $registro = "INSERT INTO practica.Usuario(Nombre, Apellidos, Direccion, Telefono, Fecha, Email)
    VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', '$fecha', '$email')";
    $registro= $conecta->query($registro);
   
   if($registro > 0){
    echo "Registro exitoso";
   }
   else{
    echo "Error al registrar";
   }
}
}
?>