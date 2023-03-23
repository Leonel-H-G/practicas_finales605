<?php 
//Recuperar e insertar datos 
include "conexion.php";

if (isset ($_POST['btn'])){

    $nombrep= $conecta->real_escape_string($_POST['NombreP']);
    $clave= $conecta->real_escape_string($_POST['Clave']);
    $direccionp= $conecta->real_escape_string($_POST['DireccionP']);
    $telefonop= $conecta->real_escape_string($_POST['TelefonoP']);
    $responsable= $conecta->real_escape_string($_POST['Responsable']);
    


    if ($nombrep=="" || $clave=="" || $direccionp=="" || $telefonop=="" || $telefonop=="" || $responsable=="" ){
        $Alerta ="Alguno de tus datos esta vacio";
    }
   else{
    $registro = "INSERT INTO practica.Plantel(NombreP, Clave, DireccionP, TelefonoP, Responsable)
    VALUES ('$nombrep', '$clave', '$direccionp', '$telefonop', '$responsable')";
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