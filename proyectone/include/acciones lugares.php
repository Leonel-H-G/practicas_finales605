<?php 
//Recuperar e insertar datos 
include "conexion.php";

if (isset ($_POST['btn'])){

    $nombrel= $conecta->real_escape_string($_POST['NombreL']);
    $descripcion= $conecta->real_escape_string($_POST['Descripcion']);
    $telefonol= $conecta->real_escape_string($_POST['TelefonoL']);
    $facebook= $conecta->real_escape_string($_POST['Facebook']);
    $emailL= $conecta->real_escape_string($_POST['EmailL']);
    $horario= $conecta->real_escape_string($_POST['Horario']);


    if ($nombrel=="" || $descripcion=="" || $telefonol=="" || $facebook=="" || $emailL=="" || $horario=="" ){
        $Alerta ="Alguno de tus datos esta vacio";
    }
   else{
    $registro = "INSERT INTO practica.Lugares(NombreL, Descripcion, TelefonoL, Facebook, EmailL, Horario)
    VALUES ('$nombrel', '$descripcion', '$telefonol', '$facebook', '$emailL', '$horario')";
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