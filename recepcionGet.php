<?php

$usuario=$_POST["user"];
$password=$_POST["pwd"];

//echo "Usuario: ".$usuario."<br>";
//echo "Contraseña: ".$password."<br>";

function verificarDatos($Usuario, $Contraseña){
if($Usuario=="Administrador"&&$Contraseña=="1234"){
    return true;
}else{
    return false;
}
}

$resultado=verificarDatos($usuario, $password);
if($resultado){
    echo "Bienvenido";
}else{
    echo "Datos incorrectos";
}

